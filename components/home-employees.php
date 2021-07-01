<div class="element_size_100">
   <header class="cs-heading-title">
    <h2 class="cs-section-title">Our Professionals</h2>
</header>
<div class="our_staff our-carousel">
  <div class="center">
  	 <a href="/employees">All</a>
    <a id="prev3" href="#" class="prev-btn"><i class="fa fa-chevron-left"></i></a>
    <a id="next3" href="#" class="next-btn"><i class="fa fa-chevron-right"></i></a>
</div>
<div class="cycle-slideshow" data-cycle-timeout="40000" data-cycle-fx="carousel" data-cycle-slides="article" data-allow-wrap="true" data-cycle-next="#next3" data-cycle-prev="#prev3" style="position: relative; overflow: hidden;">

	<div class="cycle-carousel-wrap" style="margin: 0px; padding: 0px; top: 0px; left: -3840px; position: absolute; white-space: nowrap;">
	<?php 
			   $tempVar = " active";				
	                $myposts = new WP_Query(array( 'post_type' => array('mist_employee')));
					while ($myposts->have_posts()){
						$myposts->the_post();
						
	 ?>

	<article style="border-color: rgb(138, 144, 69); position: static; top: 0px; left: 0px; z-index: 99; display: inline-block;" class="cycle-slide">
	    <figure class="post-img">
	    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'medium' );  ?>
	       
	       <?php if (has_post_thumbnail(get_the_id())) { ?>
                  <img src="<?php echo $image[0] ?>" alt="" class="img-thumbnail">
             <?php } else{?>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/no-profile-pic.jpg" alt="No Image" class="img-thumbnail">
             <?php } ?>

	        <figcaption>
	            <a href="<?php echo get_permalink(); ?>" class="btnreadmore bgcolr">
	                <em class="fa fa-eye"></em>
	            </a>
	        </figcaption>
	    </figure>

	    <div class="text" style="text-align:center">
	        <h2 class="cs-post-title">
	        	<a href="<?php echo get_permalink(); ?>" class="colrhvr" title="<?php echo get_the_title(); ?>">
	        		<?php echo limitWordsByChar(get_the_title(),40); ?>
	        	</a>
	        </h2>
	        <h6 class="designation" title="<?php echo get_field( 'designation', get_the_ID()); ?>"><?php echo limitWordsByChar(get_field( 'designation', get_the_ID()),35); ?></h6>
	        <h6 class="cat-department" title="<?php echo get_field( 'employee', get_the_ID()); ?>"><?php echo limitWordsByChar(get_field( 'employee', get_the_ID()),44); ?></h6>
	        <!-- <p>Suavely less belligerent by stuck much wow effective newest neat less far far became.</p>                                     -->
	       <!-- <div class="post-options">
	            <ul>
	                <li>
	                    <em class="fa fa-envelope-o"></em> 
	                    <a href="<?php echo get_field( 'e-mail', get_the_ID() ); ?>"> <?php echo get_field( 'e-mail', get_the_ID() ); ?></a>
	                </li>
	                 <li>
	                    <em class="fa fa-phone"<!-- em> <?php echo get_field( 'mobile_no', get_the_ID() ); ?>
	                </li>
	                <li>
	                    <em class="fa fa-clock-o"></em>    
	                    <time datetime="2011-01-12">08:00 to 13:00</time>
	                </li> 
	            </ul>
	        </div>-->
	        
	    </div>
	</article>
	<?php } ?>

	</div>

</div>
<!-- Our Classes Close -->

</div>
</div>