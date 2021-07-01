<?php get_header(); ?>
<div class="container" style="padding-top: 30px;">
    <div class="row">
        <div class="col-md-4 main-content ">

            <?php
                 global $post;
                 $current_page_parent = ( $post->post_parent ? $post->post_parent : $post->ID );
                
                $output= wp_list_pages( array(
                        'echo'=>'0',
                      'title_li' => '',
                      'child_of' => $current_page_parent,
                      'exclude'      => '',
                      'depth' => '1',
                      'sort_column'=>'menu_order' )
                 );
                
                 if ($output) {
            ?>


            <div class="content-box" style="">
                <h4 class="title">Links</h4>
                 
                <!--<ul class="page_siblings" style="">
                    <li class="current_page_item"><a href="#"><?php the_title(); ?></a> </li>-->
                    <ul class="page_siblings" style="">
                    <?php  echo $output; ?>
                    </ul>
                   
                  
                </ul>
            </div>
            <?php } ?>

            

            <div class="" style=""><?php get_template_part( "/components/notices", $name = "list" ) ?></div>
        </div>
        <div class="col-md-8 main-content ">
            <div class="content-box">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div id="page">
                    <h4 class="title text-center"><?php the_title(); ?> <?php edit_post_link( __( 'Edit', 'UniPro' ), '<span class="edit-link  pull-right"><span class="fa fa-1x fa-edit"></span> ', '</span>' ); ?></h4>
                    <hr>
                    <?php if ( has_post_thumbnail() ) {
                        	    the_post_thumbnail('large',
                                array(
                                'class' => 'img-responsive img-thumbnail',
                                'style' => 'padding-bottom: 15px;'
                                ));
                            } 
                    ?>
                    <div style="padding-bottom: 15px;"><?php the_content(); ?></div>
                    <div class="row" style="border-radius: 0 0 5px 5px;border-top: dashed 1px #eee;margin-bottom: -15px;padding: 10px 0;background-color: rgba(67, 74, 84, 0.03);">
                          <div class="col-sm-6">
                              <small class="text-muted"><em>Last updated on <?php the_time('l, F d, Y')  ?></em></small>
                          </div>
                          <div class="col-sm-6 text-right">
                            <ul class="social-network social-circle">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>/&text=<?php the_title(); ?> - <?php bloginfo('name'); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php bloginfo('name'); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                          </div>	
				    </div>
                    <?php
                         //global $post;
                         //$current_page_parent = ( $post->post_parent ? $post->post_parent : $post->ID );
                        
                        $output= wp_list_pages( array(
                                'echo'=>'0',
                              'title_li' => '',
                              'child_of' => $post->ID,
                              'exclude'      => $post->ID,
                              'depth' => '1',
                              'sort_column'=>'menu_order' )
                         );
                        
                         if ($output) {
                    ?>
                    <hr>
                    <div class="" style="">
                        <h4 class="title">See Also</h4>
                        <ul class="" style="list-style-type: circle;">
                            <?php  echo $output; ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <?php endwhile; // end of the loop. ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer("no-sidebar"); ?>