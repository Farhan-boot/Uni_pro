<?php
    global $uni_pro;
    $notice_category = $uni_pro['opt-select-notice-category'];
    $notice_category_link = get_category_link( $notice_category );
 ?>
<style type="text/css">
    #myCarousel {
        -webkit-box-shadow: 0px 7px 7px rgba(0, 0, 0, .3);
        -moz-box-shadow: 0px 7px 7px rgba(0, 0, 0, .3);
        box-shadow: 0px 7px 7px rgba(0, 0, 0, .3);
    }

    .carousel-inner {
        width: auto;
        margin-right: 300px;
        margin-left: 200px;
    }

    .news-body .nav-tabs {
        display: none;
    }

    .news-body .notice-list .tab-content {
        height: auto;
        overflow: inherit;
        padding: 4px;
    }

    .news-body article.event .date {
        margin: 0px 9px 10px 0px;
    }
</style>
<div id="myCarousel" class="carousel slide">
    <!-- Wrapper for Slides -->
    <div class="loading" style="display:none">
        <i class="fa fa-circle-o-notch fa-spin"></i> downloading... images!
    </div>
    <div class="carousel-inner">
        <?php

        $active="active";
        wp_reset_postdata();
        $tempVar = " active";
        // $slider_category = $uni_pro['opt-select-slider-category'];
        // $myposts = new WP_Query(array(
        //     'cat'               => $slider_category,
        //  'posts_per_page'    => -1,
        //  'meta_key'          => 'slider_order',
        //  'orderby'           => 'meta_value_num',
        //  'order'             => 'DESC'
        // ));
        // WP_Query arguments
        $args = array (
        'post_type'              => 'home_slider',
        'posts_per_page'         => -1,
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'cache_results'          => true,
        );

        // The Query
        $myposts = new WP_Query( $args );
        while ($myposts->have_posts()){
        $myposts->the_post();
        ?>
        <div class="item <?php echo $active ?>">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'large' );  ?>
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" data-src="<?php echo  $image[0]; ?>" style="background-image:url('<?php echo  $image[0]; ?>')"></div>
            <div class="carousel-caption">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <h4><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo limitWordsByChar(get_the_title(),35); ?> </a> </h4>
                        <p><?php echo limitWordsByChar(get_the_excerpt(),200); ?></p>
                    </div>
                </div>
            </div>
            <?php  $active=""; ?>
        </div>
        <?php } ?>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="margin-left: 200px;">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="margin-right: 300px;">
        <span class="icon-next"></span>
    </a>
    <div>
        <!--important news start -->
        <div class="banner-news-holder" style="">
            <div class="news-box" style="">
                <div class="news-header" style="">
                    <a href="<?php echo esc_url($notice_category_link); ?>" class="news-caption" style="">
                        <i class="fa fa-file-text"></i>&nbsp;Important Notice
                    </a>
                    <a href="<?php echo esc_url($notice_category_link); ?>" class="news-caption pull-right">
                        <i class="fa fa-archive"></i>&nbsp;Archive&nbsp;
                    </a>
                </div>
                <!--Widget Header-->
                <div class="news-body" style="">
                    <?php get_template_part( "/components/notices", $name = "list" ) ?>

                </div>
                <!--Widget Body-->
            </div>
            <!--Widget-->
        </div>
    </div>
    <!--important news end -->
    <div class="banner-link-holder" style="">
        <!-- part 1 -->
        <div class="link-box" style="">
            <div class="link-header" style="">
                <span class="link-caption" style=" "><i class="fa fa-tasks"></i> &nbsp;Wings & Directorates</span>
            </div>

            <div class="link-body" style="">
                <div class="link-item" style="">
                    <div class="item-booker" style="">
                        <a href="http://dadm.mist.ac.bd/" target="_blank">
                            <div class="item-title" style="">
                                <span class="badge pull-left" style=""></span>
                                Directorate of Admin
                            </div>
                            <div class="item-time" style="">
                                <span>MIST Administration</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="link-item" style="">
                    <div class="item-booker" style="">
                        <a href="http://ict.mist.ac.bd/" target="_blank">
                            <div class="item-title" style="">
                                <span class="badge pull-left" style=""></span>
                                Directorate of ICT
                            </div>
                            <div class="item-time" style="">
                                <span>Automating MIST</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="link-item" style="">
                    <div class="item-booker" style="">
                        <a href="http://dsw.mist.ac.bd/" target="_blank">
                            <div class="item-title" style="">
                                <span class="badge pull-left" style=""></span>
                                Directorate of Student Welfare
                            </div>
                            <div class="item-time" style="">
                                <span>Student Welfare</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="link-item" style="">
                    <div class="item-booker" style="">
                        <a href="http://research.mist.ac.bd/" target="_blank">
                            <div class="item-title" style="">
                                <span class="badge pull-left" style=""></span>
                                Directorate of R&D
                            </div>
                            <div class="item-time" style="">
                                <span>Research & Development</span>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <!-- part 2 http://mist.teletalk.com.bd/-->
        <div class="link-box" style="">
            <div class="link-header" style="">
                <span class="link-caption" style=" "><i class="fa fa-tasks"></i> &nbsp;Important Links</span>
            </div>
            <div class="link-body" style="">
                <div class="link-item" style="">
                    <div class="item-booker" style="">
                        <a href="http://admission.mist.ac.bd/" title="Undergraduate Admission" target="_blank">
                            <div class="item-title" style="">
                                <span class="badge pull-left" style="color:red"></span>
                                Online Pre-registration
                            </div>
                            <div class="item-time" style="">
                                <span>Undergraduate Admission 2015</span>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="link-item" style="">
                    <div class="item-booker" style="">
                        <a href="http://mist.ac.bd/website-admin-contact/" title="All departmental website admin contact" >
                            <div class="item-title" style="">
                                <span class="badge pull-left" style="color:red"></span>
                                Website Admins
                            </div>
                            <div class="item-time" style="">
                                <span>All Website Admin Contact</span>
                            </div>
                        </a>
                    </div>
                    </div>
                     <div class="link-item" style="">
                   <div class="item-booker" style="">
                        <a href="https://support.mist.ac.bd/" title="Undergraduate Admission" >
                            <div class="item-title" style="">
                                <span class="badge pull-left" style="color:red"></span>
                                Online Support
                            </div>
                            <div class="item-time" style="">
                                <span>Submit Any Request Online</span>
                            </div>
                        </a>
                    </div>
                </div>
            
        <!--<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmist.ac.bd%2F&width=131&layout=button_count&action=like&show_faces=true&share=true&height=46&appId=1601220076860452" width="100%" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->
        </div>
    </div>
</div>
