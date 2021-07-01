<?php
    /**
     * The category page template file.
     *
     * @package UniPro
     */
    get_header();
?>
<div class="container">
    <div id="page-header">
        <div class="row">
            <div class="col-md-12">
                Slides
            </div>
        </div>
    </div>
    <style>
            @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
            @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
            body {
		        background-color: rgb(220, 220, 220);
	        }
    </style>
    <?php if ( have_posts() ) : ?>
    <ul class="event-list">
        <?php
            while ( have_posts() ) : the_post();
        ?>
        <li>
            <time datetime="<?php the_date('Y-m-d'); ?>">
                <span class="day"><?php the_time('j'); ?></span>
                <span class="month"><?php the_time('F'); ?></span>
                <span class="year"><?php the_time('Y'); ?></span>
            </time>
            <?php if ( has_post_thumbnail() ) {the_post_thumbnail('large');}  ?>
            <div class="info">
                <h2 class="title"><?php the_title(); ?></h2>
                <p class="desc">
                    <?php echo getTrimHtml(get_the_content(), 0, 200); ?>
                    <a class="info-link" href="<?php the_permalink(); ?>"><span class="fa fa-link"></span>continue</a>
                </p>
            </div>
            <div class="social">
                <ul>
                    <li class="facebook" style=" width: 33%; ">
                        <a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <li class="twitter" style=" width: 33%; ">
                        <a  href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>/&text=<?php the_title(); ?> - <?php bloginfo('name'); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li class="google-plus" style=" width: 33%; ">
                        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <span class="fa fa-google-plus"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
    <?php  endif; ?>

    <?php if(function_exists('page_navi')) { page_navi(); } else { ?>
    <div class="alignleft"><?php next_posts_link('Older posts'); ?></div>
    <div class="alignright"><?php previous_posts_link('Newer posts'); ?></div>
    <?php } ?>
</div>
<?php get_footer("no-sidebar"); ?>
