<?php get_header();
    $search_query = get_search_query();
?>

<div class="container">
    <div id="page-header">
        <div class="row">
            <div>
                <h1 class="header-title"><?php echo $count; ?>&nbsp;<?php printf( __( 'Search Results for: %s', 'UniPro' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; ?>
                    <?php if ( have_posts() ) :while ( have_posts() ) : the_post(); $count++; ?>
                    <?php the_title( sprintf( '<h4><a target="_blank" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
                    <h5><a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark"><i class="fa fa-external-link"></i>&nbsp;<?php the_permalink(); ?></a></h5>
                    <p>
                        <?php
                            $search_query_index=strpos(get_the_content(), "$search_query");
                            $search_query_indexStart=0;
                            if($search_query_indexStart >= 100){$search_query_indexStrat = $search_query_index - 50;}
                            $search_query_indexEnd=$search_query_indexStart + 400;
                            echo getTrimHtml(get_the_content(), $search_query_indexStart, $search_query_indexEnd);
                        ?>
                    </p>
                    <hr />
                    <?php endwhile; ?>
                    <?php else : ?>
                    <h4><i class="fa fa-exclamation-triangle fa-fw text-danger"></i>Nothing Found with this keyword!</h4>
                    <?php endif; ?>

                    <?php if(function_exists('page_navi')) { page_navi(); } else { ?>
                    <div class="alignleft"><?php next_posts_link('Older posts'); ?></div>
                    <div class="alignright"><?php previous_posts_link('Newer posts'); ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer('no-sidebar'); // will include footer-no-sidebar.php; ?>?>

