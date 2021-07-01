<style>
    .child-site-slider {
  -moz-box-shadow: #BDBDBD 0 2px 3px 2px;
  -webkit-box-shadow: #BDBDBD 0 2px 3px 2px;
  box-shadow: #BDBDBD 0 2px 3px 2px;
  overflow: hidden;
  border: 4px solid white;
  border-radius: 0 0 4px 4px;
}
</style>   

<?php 
    global $uni_pro;
 ?>   
<div class="container child-site-slider" style="height: 83%;">
  <div class="row" style="height:100%;">
      <div id="myCarousel" class="carousel slide " style="height:100%;">
        <!-- Wrapper for Slides -->
        <div class="loading" style="display:none"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        <div class="carousel-inner">
          <?php 
          
            $active="active";
            wp_reset_postdata();
            $tempVar = " active";   
            // $slider_category = $uni_pro['opt-select-slider-category'];     
            // $myposts = new WP_Query(array(
            //     'cat'               => $slider_category,
            // 	'posts_per_page'	=> -1,
            // 	'meta_key'			=> 'slider_order',
            // 	'orderby'			=> 'meta_value_num',
            // 	'order'				=> 'DESC'
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
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-next"></span></a>
      </div>
  </div>
</div>
