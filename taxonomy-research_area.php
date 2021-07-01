

<?php get_header(); ?>
<div class="container" style="padding-top: 30px;">
    <div class="row">
        <div class="col-md-4 main-content ">
            <div class="content-box">
              
                        <?php
                        $terms = get_terms('research_area' );
                        if ($terms && ! is_wp_error($terms)): ?>
                            <h4>Research Areas</h4>
                            <hr>
                            
                            <?php foreach($terms as $term): ?>
                              <?php $isCurrentTerm = get_queried_object()->term_id==$term->term_id; ?>
                                <a href="<?php echo get_term_link( $term->slug, 'research_area'); ?>" rel="tag" class="<?php echo $term->slug;?>"> 
                                  <?php  if ($isCurrentTerm) { echo "<b>"; } ?>
                                    <div title="<?php echo $term->name; ?> " class=""><?php echo string_limit_words($term->name,5); ?>
                                      <div class="label label-info pull-right" title="<?php echo $term->count; ?> faculties are interested on this research area">
                                      
                                          <?php echo $term->count; ?>
                                        
                                      </div>
                                    </div>
                                <?php  if ($isCurrentTerm) { echo "</b>"; } ?>
                                     &nbsp
                                </a>
                            <?php endforeach; ?>

                        <?php endif; ?>
            </div>
        </div>
        <div class="col-md-8 main-content ">
          <div class="content-box">
          
          <?php printf( __( '%s', 'UniPro' ), single_cat_title('<h5 class=""><i>Faculties Interested in </i><b>', '</b></h5>' ) ); ?>
          <hr>
              <?php get_template_part( "loop", $name = "faculty" ) ?>
          </div>
        </div>

    </div>
</div>

<?php get_footer("no-sidebar"); ?>