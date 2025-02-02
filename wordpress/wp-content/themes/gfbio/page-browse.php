<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<section id="browse">

<div class="container">
<div class="row">


<h2 class="center-align"><?php _e('Terminologies', 'gfbio') ?></h2>

  <?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>

    <?php
      // while (have_posts()) : the_post();
      if (have_posts()) {
        echo '<p>';
        the_post();
    		the_content();
        echo '</p>';
      }
    	// endwhile;
    ?>

    <section id="terminologies">
        <table class="bordered">
            <thead>
              <tr>
                  <th data-field="name"><?php _e('Name', 'gfbio') ?></th>
                  <th data-field="description"><?php _e('Description', 'gfbio') ?></th>
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

</div><!--row-->
</div><!--container-->

</section>


<?php get_footer(); ?>

<script type="text/javascript">
$(function () {

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