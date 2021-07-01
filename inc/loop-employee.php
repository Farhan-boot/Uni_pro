<div class="our_staff">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="col-md-4">
        <article class="cycle-slide">
          <figure class="post-img">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumbnail' );  ?>
            <img src="<?php echo $image[0] ?>" alt="">
            <figcaption>
              <a href="<?php echo get_permalink(); ?>" class="btnreadmore bgcolr">
                <em class="fa fa-long-arrow-right"></em>
              </a>
            </figcaption>
          </figure>

          <div class="text">
            <h2 class="cs-post-title">
              <a href="<?php echo get_permalink(); ?>" class="colrhvr" title="<?php echo get_the_title(); ?>">
                <?php echo limitWordsByChar(get_the_title(),40); ?>
              </a>
            </h2>
            <h6 class="designation" title="<?php echo get_field( 'designation', get_the_ID()); ?>"><?php echo limitWordsByChar(get_field( 'designation', get_the_ID()),35); ?></h6>
            <h6 class="cat-department" title="<?php echo get_field( 'faculty', get_the_ID()); ?>"><?php echo limitWordsByChar(get_field( 'faculty', get_the_ID()),44); ?></h6>
            <!--<p>Suavely less belligerent by stuck much wow effective newest neat less far far became.</p>-->
            <div class="post-options">
              <ul>
                <li>
                  <em class="fa fa-envelope-o"></em> 
                  <a href="<?php echo get_field( 'e-mail', get_the_ID() ); ?>"> <?php echo get_field( 'e-mail', get_the_ID() ); ?></a>
                </li>
                <li>
                  <em class="fa fa-phone"></em> <?php echo get_field( 'mobile_no', get_the_ID() ); ?>
                </li>
              </ul>
            </div>
          </div>
        </article>
      </div>
    <?php endwhile; //endif; ?>
  </div>
