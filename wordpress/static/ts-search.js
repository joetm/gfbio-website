/*
    Source: terminologies.gfbio.org/search/facettedSearch/search.js
*/

var SEARCH = {

	maxResults : 10,

	/*
	 * The Server base URL. This needs to be adjusted between live and dev server, or generated automatically.
	 */	 
	server : "http://terminologies.gfbio.org",

	/*
	 * initialize the container to display the results of the search
	 */
	init : function(container) {
		var spinnerImg = $('<img>').attr('src',
				'/search/openSocialGadget/spinner.gif')
				.attr('id', 'spinner_image');
		var spinnerImg = $('<div class="preloader-wrapper active" title="Loading..."><div class="spinner-layer spinner-red-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>');
		var searchResults = $('<div>').attr('id', 'search_results')
		$('#' + container).append(spinnerImg);
		$('#' + container).append(searchResults);
		spinnerImg.hide();
	},

	/*
	 * remove recent search results to display new data
	 */
	cleanUp : function() {
		SEARCH.dictionary.clear();
		$('#search_results').html('');
	},

	dictionary : {
		attributes : [],
		getAttribute : function(attributeName) {
			for (var i = 0; i < SEARCH.dictionary.attributes.length; i++) {
				if (SEARCH.dictionary.attributes[i].name == attributeName) {
					return SEARCH.dictionary.attributes[i];
				}
			}
			return null;
		},
		addAttribute : function(attributeName, results) {
			this.attributes.push({
				"name" : attributeName,
				"results" : [ results ]
			});
		},
		clear : function() {
			this.attributes = [];
		}
	},

	/*
	 * This function adds the attribute data to the dictionary and creates a table
	 * dynamically
	 */
	createResult : function(data) {
		if (data) {
			// add data to dictionary
			$.each(data.results, function() {
				var attribute = SEARCH.dictionary.getAttribute(this.attributelabel);
				if (attribute == null) {
					SEARCH.dictionary.addAttribute(this.attributelabel, this);
				}
				else { 
					attribute.results.push(this);
				}
			});
		}
		$('#spinner_image').hide();
		var i = 0;
		var table = $('<table>').attr('id','lookup_table');	
		$('#search_results').append(table);
		
		$.each(SEARCH.dictionary.attributes, function(index, attribute) {
			$.each(this.results, function(index, result) {
//				alert(result.toSource());
				SEARCH.createTable(table, result);							
			});
		});
	},
	
	/*
	 * This function adds a result to the table. 
	 * To group values belonging to the same attribute, we search for the attribute 
	 * label within the table. If it is present, we add the value to the already present values,
	 * otherwise we create a new row with this attribute and value.
	 */
	createTable : function(table, result) {
		var attributelabel = result.attributelabel;
		if (!result.attributelabel){
			attributelabel = result.attributeuri;
		}
		// check if attributelabel already in table
		var text = $('td:contains("'+attributelabel+'")');
		if (text.length > 0){
			// if it is already present, group the result values 
			// together in one column
			text.attr('rowspan','1');
			text.next().append($('<tr>').text(result.value));
		}
		else if (text.length == 0){
			// if not present yet, build a new row with value
			var column = $('<tr>').append(
					$('<td>').text(attributelabel))
					.append($('<td>').text(result.value));
			$(table).append(column);
		}
		
	},

	/*
	 * Init function to create an autocomplete search widget.
	 * The widget will use http://terminologies.gfbio.org/api/terminologies/suggest
	 */
	lookupSearch : function() {
		//Create a JQuery autocomplete widget
		var a = $('#suggestSearchInput').autocomplete({
			source : function(request, response) {
				//Perform an ajax request
				var url = SEARCH.server + '/api/terminologies/suggest';
				$.getJSON(url, {query : request.term}, function(data) {
					var items = [];
					//collect all items from ajax request
					$.each(data.results, function(index, item) {
						items.push({
							'label' : item.label,
							'value' : item.label,
							'id' : item.uri,
							'query' : request.term,
							'sourceTerminology' : item.sourceTerminology
						});
					});
					//send collected items to the widget
					response(items);
				})
			},
			
			select : function(event, ui) {
				//if user selects an item, fill the suggestSearchInput with the item from the selected entry
				$('#suggestSearchInput').val(ui.item.label);
				SEARCH.retrieveSelectedConcept(ui.item);
			}
		});
		
		//redefine the _rendetItem function to highlight the searched query in the entries
		a.data('ui-autocomplete')._renderItem = function(ul, item){
			//insert <b> tags into the label
			var highlightedItem = item.label.replace(item.query,'<b>' + item.query + '</b>');
			return $('<li>').data('item.autocomplete', item).append($('<a>').append($('<div>').attr('id','row')
							.append($('<span>').html(highlightedItem + ' - ')).append($('<span>').text(item.id).
							attr('id','link')))).appendTo(ul);
		};
	},
	
	textSearch : function(){
		// Create a JQuery autocomplete widget
		var b = $('#normalSearchInput').autocomplete({
			source : function(request, response) {
				//Perform an ajax request
				var url = SEARCH.server + '/api/terminologies/suggest';
				$.getJSON(url, {query : request.term}, function(data) {
					var items = [];
					//collect all items from ajax request
					$.each(data.results, function(index, item) {
						items.push({
							'label' : item.label,
							'value' : item.label,
							'id' : item.uri,
							'query' : request.term,
							'sourceTerminology' : item.sourceTerminology
						});
					});
					//send collected items to the widget
					response(items);
				})
			},
			
			select : function(event, ui) {
				console.log('textsearch click');
//				alert(ui.toSource());
				//if user selects an item, fill the suggestSearchInput with the item from the selected entry
				$('#normalSearchInput').val(ui.item.label);
				SEARCH.performSearch(ui.item.label);
			}
		});
		
		//redefine the _rendetItem function to highlight the searched query in the entries
		b.data('ui-autocomplete')._renderItem = function(ul, item){
			//insert <b> tags into the label
			var highlightedItem = item.label.replace(item.query,'<b>' + item.query + '</b>');
			return $('<li>').data('item.autocomplete', item).append($('<a>').append($('<div>').attr('id','row').
					append($('<span>').html(highlightedItem)))).appendTo(ul);
		};
	},
	
	
	performSearch : function(searchquery) {
		console.log('in function searchquery');
		var restfulws_url = SEARCH.server + '/api/terminologies/search';
		$('#spinner_image').show();
		// delete the recent values from the dictionary
		TMS.dictionary.clear();
		// remove the recent values
		$('#search_results').html($(''));
		console.log('displaying only internal data');
			$.getJSON(restfulws_url, {
				query : searchquery, internal_only : true
			}, TMS.createResult)
	},
	
	
	/*
	 * This function is called after click on an item in autocomplete widget.
	 * The stored information of this selected concept is retrieved using
	 * 'http://terminologies.gfbio.org/api/terminologies/'+terminology+'/term';
	 */
	retrieveSelectedConcept : function (item){
		console.log("in retrieve function");
		SEARCH.cleanUp();
		var terminology = item.sourceTerminology;
		var link = item.id;
		var termInfoUrl = SEARCH.server + '/api/terminologies/'+terminology+'/term';
		SEARCH.dictionary.clear();
//		// remove the recent values
		$.getJSON(termInfoUrl, {
			uri : link
		}, SEARCH.createResult)
	}
	

};
