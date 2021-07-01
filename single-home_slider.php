

<?php get_header(); ?>
<div class="container" style="padding-top: 30px;">
    <div class="row">
        <div class="col-md-4 main-content">
            <div class=""><?php get_template_part( "/components/notices", $name = "list" ) ?></div>
        </div>
        <div class="col-md-8 main-content">
            <div class="content-box">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div class="boxshadow jobs-item jobs-single-item " id="post-<?php the_ID();?>">
                    <?php edit_post_link( __( 'Edit', 'UniPro' ), '<span class="edit-link pull-right"><span class="fa fa-1x fa-edit"></span> ', '</span>' ); ?>
                    <h4 class="title"><a href="#"><?php the_title(); ?></a></h4>
                    <hr>
                    <?php if ( has_post_thumbnail() ) {
                        	    the_post_thumbnail('large', array('class' => 'img-responsive img-thumbnail'));
                            } 
                    ?>
                    <br/>
                    <br/>
                    <div class="row">
                    	<div class="col-md-12">
                    		<?php the_content(); ?>
                    	</div>
                    </div>
                </div>
                <?php endwhile; // end of the loop. ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer("no-sidebar"); ?>