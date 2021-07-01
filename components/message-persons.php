
<div class="title11">
   <h2>Messages
    <span class="line4"></span></h2>
</div>

<br>

<div class="row" style="padding-left: 12.9%;padding-right: 12.8%;">
 <?php 
 
 wp_reset_postdata();
 $tempVar = " active";   
 $slider_category = $uni_pro['opt-select-slider-category'];     
 $myposts = new WP_Query(array(
    'post_type' => array("mist_message"),
    'posts_per_page'    => 3,
    'meta_key'          => 'person_order_number',
    'orderby'           => 'meta_value_num',
    'order'             => 'DESC',
    'post_status'      => 'publish'
    ));
 while ($myposts->have_posts()){
  $myposts->the_post(); 
  ?>
  
  <div class="col-md-4 animate fadeInUp person-message" data-anim-type="fadeInUp" data-anim-delay="300">
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );  ?>
    <img src="<?php echo $image[0] ?>" alt="" class="cirimg">
    <div class="cinfo message-box"> 
       <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/shape1.jpg" alt="" class="shape1">               
       <h5><?php echo get_the_title(); ?></h5>
       <em><?php the_field('person_designation'); ?></em>
       <b>Message:</b>
       <p class="message-text"><?php echo limitWordsByChar(get_the_excerpt(),130); ?></p>
       <a href="<?php echo get_permalink(); ?>" class="button1">Read More</a>
   </div>
   
</div><!-- end section -->


<?php } ?>
</div>