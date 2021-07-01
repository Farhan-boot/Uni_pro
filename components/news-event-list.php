<?php
    global $uni_pro;
    $news_events_category = $uni_pro['opt-select-news-events-category'];
    $news_events_category_link = get_category_link( $news_events_category );
?>
<div class="row">
    <?php
        $notice_args = array(
              'posts_per_page'   => -1,
              'offset'           => 0,
              'cat'    => $news_events_category,
              'meta_query' => array(
                  array(
                      'key' => 'news_events_expire_date',
                      'value' => date('Ymd'),
                      'type' => 'DATE',
                      'compare' => '>='
                  )
              ),
              'meta_key'         => 'news_events_priority',
              'orderby'          => 'meta_value_num',
              'order'            => 'ASC',
              'post_type'        => 'post',
              'post_status'      => 'publish',
              'suppress_filters' => true
        );
    ?>

    <?php
        $news_events_posts = get_posts( $notice_args );
        if(have_posts()) :
           foreach ( $news_events_posts as $post ) : setup_postdata( $post );
    ?>
    <div class="col-md-4">
        <div class="archivetour boxShadow">
            <div class="leftarchivetour">
                <div class="imgarchivesinglepost">
                    <div class="btnsarchivesingletravel">
                        <a href="<?php echo get_permalink(); ?>"><p class="offerarchivesingletravel">MORE</p></a>
                    </div>
                    <?php
                        if ( has_post_thumbnail() ) : 
                            $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'meduim' ); 
                            $url = $thumb['0'];
                        else: $url= bloginfo('template_directory')+"/assets/images/no-img.jpg"; endif;
                    ?>
                    <div class="img" style="background-image:url(<?=$url?>);height:162px;background-size: cover;background-position: center;background-repeat: no-repeat;"></div>
                </div>
                <div class="pricetitleleftarchivetour yellow">
                    <div class="priceleftarchivetour"><p><?php the_time('d')  ?></p></div>
                    <p class="titleleftarchivetour"><span class="striketext"><?php the_time('M Y')  ?></span></p>
                </div>
            </div>
            <div class="rightarchivetour">
                <div class="titledayarchivetour">
                    <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title() ?>"><p class="titlearchivetour"><?php echo get_the_title() ?></p></a>

                </div>
                <div class="descriptioniconsarchivetour">
                    <p><?php echo limitWordsByChar(get_the_excerpt(),110); ?></p>
                </div>
                  <div style="border-top: dashed 1px #eee; padding: 8px 0 7px;background-color: rgba(67, 74, 84, 0.03);">
                    <ul class="social-network social-circle">
                        <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>/&text=<?php the_title(); ?> - <?php bloginfo('name'); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php bloginfo('name'); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				</div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>Not Found!</strong> There in no recently news & events.
    </div>
    <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
</div>