<?php 
    global $uni_pro;
 ?>       
<?php 
            $is_child = $uni_pro['opt-switch-dept'];
            if($is_child==true): get_template_part( "components/home-slider-child-site" );
            else: get_template_part( "components/home-slider-main-site" );
            endif;
?>
<br/>
<!-- Page Content -->
<div class="container">
    <div class="row top-info">
        <div class="col-md-6">
            
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-university"></span>
                </div>
                <div class="info">
                        <?php 
                            $wc_page_id = $uni_pro['opt-select-welcome'];
                            $wc_msg = get_page($wc_page_id ); 
                        ?>
                    <h4 class="text-center"><?php echo $wc_msg->post_title; ?></h4>
                    <p><?php echo getTrimHtml($wc_msg->post_content, 0, 302); ?></p>
                    <p><?php echo getTrimHtml($wc_msg->post_content, 303, 400); ?></p>
                    <div style="text-align: center"><a href="<?php echo post_permalink( $wc_page_id ); ?>" class="btn">Read More</a> </div>
                </div>
            </div>

 
        </div>
        <div class="col-md-6">
            <h1>&nbsp</h1>
            <div   style="padding-top:4%;padding-right:3%;padding-bottom:23%;padding-left:13%;background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/images/home_video_border.png);background-repeat: no-repeat;background-position: center;background-size: contain;">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/videoseries?list=PL1c1fPBMhJv3eS_ee70aLyFy9gU9x4a8L' frameborder='0' allowfullscreen></iframe>
                  <?php //echo $uni_pro['featured_video']; ?>
                </div>
            </div>
            <br/>
       </div>
   </div>

      <?php if(!$is_child): ?>
        <span id="messages" class="feature_sec7">
            <?php  get_template_part( "components/message", $name = "persons" );?>
        </span>
     <?php else:?><br /><br />
     <?php  endif; ?>

    <div class="row">

        <div id="news-timeline"  class="col-md-4 col-sm-12">
            <div>
               <?php get_template_part( "/components/notices", $name = "list" ) ?>
               <?php /*get_template_part( "/components/newstimeline", $name = "home" )*/ ?>
           </div>
        </div>

        <div id="news-timeline-right" class="col-md-8 col-sm-12">
            <span id="tab">
                <?php get_template_part( "components/tabs", $name = "home" ) ?>
            </span>
        </div>
    </div>
    <br>
    <div class="row">

        <div class="col-md-4" id="courses">
            <?php get_template_part( "components/home", $name = "courses" ) ?>
        </div>
        <div class="col-md-8" id="faculties">
            <?php get_template_part( "components/home", $name = "employees" ) ?>
        </div>
    </div>
</div>