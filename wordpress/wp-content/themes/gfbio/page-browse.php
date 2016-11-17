<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<div class="container" id="browse">
<div class="row">


<h1 class="flow-text center-align">Terminologies</h1>

<p>
    <?php
    	while (have_posts()) : the_post();
    		the_content();
    	endwhile;
    ?>
</p>

<section id="terminologies">
    <table class="bordered">
        <thead>
          <tr>
              <th data-field="name">Name</th>
              <th data-field="description">Description</th>
          </tr>
        </thead>

        <tbody>
          <tr class="loading">
            <td colspan="3" class="center-align">
                  <!--Loading...-->
                  <div class="preloader-wrapper active">
                    <div class="spinner-layer spinner-red-only">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                  </div>
            </td>
          </tr>
        </tbody>
    </table>
</section>

</div>
</div>



<?php get_footer(); ?>

<script type="text/javascript">
$(document).ready(function () {

    /* Query the terminologies */
    $.getJSON('http://terminologies.gfbio.org/api/terminologies/', function(data) {

      var tpl = "",
        $table = $('#terminologies table');

      if (data && data.results) {
          $.each(data.results, function(key, item) {
            tpl += '<tr>'+
              '<td><a href="/terminology/?ontology=' + item.acronym + '">' + item.name + ' (' + item.acronym + ')' + '</a></td>' +
              '<td>' + item.description + '</td>' +
            '</tr>';
          });
      }
      $table.find('tbody').append(tpl);
      $table.find('tr.loading').remove();
      $table.addClass('highlight');




});

});
</script>

</body>
</html>