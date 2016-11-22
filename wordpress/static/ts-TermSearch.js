var TMS = {
	
	cleanUp : function(){
		TMS.dictionary.clear();
		$('#search_results').html($(''));
	},
	
	/***************************************************************************
	 * 
	 * Initialization of container
	 * 
	 **************************************************************************/
	
	init : function(container) {

		var spinnerImg = $('<img>').attr('src', 'http://terminologies.gfbio.org/search/openSocialGadget/spinner.gif').attr('id',
				'spinner_image');

		var searchResults = $('<div>').attr('id', 'search_results')

		$('#' + container).append(spinnerImg);
		$('#' + container).append(searchResults);
		spinnerImg.hide();

	},

	/***************************************************************************
	 * 
	 * Dictionary
	 * 
	 **************************************************************************/

	dictionary : {
		domains : [],
		getDomain : function(domainName) {
			for (var i = 0; i < TMS.dictionary.domains.length; i++) {
				if (TMS.dictionary.domains[i].name == domainName) {
					return TMS.dictionary.domains[i];
				}
			}
			return null;
		},
		addDomain : function(domainName, results) {
			this.domains.push({
				"name" : domainName,
				"results" : [ results ]
			});
		},
		clear : function() {
			this.domains = [];
		}
	},

	/***************************************************************************
	 * 
	 * Create Result from Data
	 * 
	 **************************************************************************/
	createResult : function(data) {
		if (data) {
			// add data to dictionary
			$.each(data.results, function() {
				if (!this.domain) {
					this.domain = "Uncategorized";
				}

				var domain = TMS.dictionary.getDomain(this.domain);
				if (domain == null) {
					TMS.dictionary.addDomain(this.domain, this);
				} else {
					domain.results.push(this);
				}
			});
		}
		$('#spinner_image').hide();
		
		
		$('#search_results').show();
		var j = 0;
		$.each(TMS.dictionary.domains, function(index, domain) {
			var i = 0;
			$.each(this.results, function(index, result) {
				var table = $('<table>');		
				
				var label_headline = $('<div>').text(result.label + ' - ' + result.sourceTerminology).attr('id','headline');
				
				var uri = $('<a>').attr('href',result.uri).attr('id','uri').attr('target','_blank')
				.text(result.uri);
				
				if (result.sourceTerminology == 'TDWGREGION' ){
					if (result.uri){
						label_headline
						.append('<br>').append(uri);
					}
				}
				else {
					var infobutton = $('<button>').attr('type','button').attr('id','infobutton'+j)
					.data('conceptID',result.uri).data('terminologyID',result.sourceTerminology).css('margin-left','25px').css('background','#F6F6F6 !important');
					j++;

					if (result.uri){
						label_headline
						.append(infobutton)
						.append('<br>').append(uri);
					}
					else {
						label_headline
						.append(infobutton);
						infobutton.data('conceptID',result.externalID);
					}
				}
				
					
				var infobox = $('<div>').append(label_headline);
				
				infobox.append('<br>')
				.append(table);
				
				$('#search_results').append(infobox);
				
				TMS.createTable(table, result);
				infobox.append('<br>');
				$('#search_results').append('<br>').append('<br>');
				i++;
				
			});// end of result iteration
			$('button').button({
				icons: {primary:'ui-icon-search'},
				text: false
			});
		});
	},
	
	/***************************************************************************
	 * 
	 * Perform Search
	 * 
	 **************************************************************************/
	performSearch : function(searchquery, searchType) {
	
		var restfulws_url = 'http://terminologies.gfbio.org/api/terminologies/search';
		$('#spinner_image').show();
		// delete the recent values from the dictionary
		TMS.dictionary.clear();
		// remove the recent values
		$('#search_results').html($(''));
		
		if (searchType == 'exact'){
			$.getJSON(restfulws_url, {
				query : searchquery,
				match_type : searchType
			}, TMS.createResult)
		}
		else {
			$.getJSON(restfulws_url, {
				query : searchquery
			}, TMS.createResult)
		}
	},

	
	createTable : function(table, result) {

		if (result['label']){
			var label = $('<tr>').append(
					$('<td>').text('Label'))
					.append($('<td>').text(result.label));
			$(table).append(label);
		}
		
		if (result['description']){
			var description = $('<tr>').append($('<td>').text('Description'))
			.append($('<td>').text(result.description));

			$(table).append(description);
		}
		
		if (result['externalID']){
			var externalID = $('<tr>').append(
					$('<td>').text('External ID'))
					.append(
							$('<td>').text(result.externalID));
			$(table).append(externalID);
		}
		
		if (result['rank']){
			var rank = $('<tr>').append(
					$('<td>').text('Rank')).append(
							$('<td>').text(result.rank));
			$(table).append(rank);
		}
		
		if (result['kingdom']){
			var kingdom = $('<tr>')
			.append(
					$('<td>').text('Kingdom')).append(
					$('<td>').text(result.kingdom));
			$(table).append(kingdom);
		}
		
		if (result['status']){
			var status = $('<tr>').append(
					$('<td>').text('Status')).append(
							$('<td>').text(result.status));
			$(table).append(status);
		}
		
	}
	
};
