<?php get_header(); ?>
<style type="text/css">
  .faculty-detail .img-responsive {
    width: 218px;

  }
</style>
<div class="container" style="padding-top: 30px;">
    <div class="row">
        <div class="col-md-4 main-content">
            <div class=""><?php get_template_part( "/components/notices", $name = "list" ) ?></div><br>
        </div>
        <div class="col-md-8 main-content">
            <div class="content-box faculty-detail">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div class="boxshadow jobs-item jobs-single-item " id="post-<?php the_ID();?>">
                    <?php edit_post_link( __( 'Edit', 'UniPro' ), '<span class="edit-link pull-right"><span class="fa fa-1x fa-edit"></span> ', '</span>' ); ?>
                    <h4>Employee Details</h4>
                    <hr>
                    <div class="row">
                      <div class="col-md-4">
                         <?php if ( has_post_thumbnail() ) {
                              the_post_thumbnail('large', array('class' => 'img-responsive img-thumbnail'));
                            } else{
                              ?>
                              <img class="img-responsive img-thumbnail" src="/wp-content/themes/<?php echo get_template(); ?>/assets/images/no-profile-pic.jpg" alt="No Image">
                              <?php
                            }
                          ?>
                          <br/>

                          <br/>
                      </div>
                      <div class="col-md-8">
                      <h4 class="title"><a href="#"><?php the_title(); ?></a></h4>  
                      <h6 class="designation" title="<?php echo get_field( 'designation', get_the_ID()); ?>"><?php echo get_field( 'designation', get_the_ID()); ?></h6>
                      <h6 class="cat-department" title="<?php echo get_field( 'faculty', get_the_ID()); ?>"><?php echo get_field( 'faculty', get_the_ID()); ?></h6>
                      <div title="<?php echo get_field( 'e-mail', get_the_ID()); ?>"><i class="fa fa-envelope-o"></i> <?php echo get_field( 'e-mail', get_the_ID()); ?></div>
                      <div title="<?php echo get_field( 'mobile_no', get_the_ID()); ?>"><i class="fa fa-mobile"></i> <?php echo get_field( 'mobile_no', get_the_ID()); ?></div>
                      <br>
                      

                        <div class="research_areas" style="text-align:left;">
                          <?php
                            $terms = get_the_terms( get_the_ID(), 'research_area' );
                            if ($terms && ! is_wp_error($terms)): ?>
                              <h4>Research Areas</h4>
                              <?php foreach($terms as $term): ?>
                                  <a href="<?php echo get_term_link( $term->slug, 'research_area'); ?>" rel="tag" class="<?php echo $term->slug; ?>"> 
                                      <div class="label label-info"><?php echo $term->name; ?>
                                      </div> &nbsp
                                  </a>
                              <?php endforeach; ?>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div><?php the_content(); ?></div>
                </div>
                <?php endwhile; // end of the loop. ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer("no-sidebar"); ?>