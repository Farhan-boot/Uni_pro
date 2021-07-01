<?php
    global $uni_pro;
    $notice_category = $uni_pro['opt-select-notice-category'];
    $notice_category_link = get_category_link( $notice_category );
?>
<div class="notice-list">
<ul class="nav nav-tabs" role="tablist" id="myTab">
    <li role="presentation" class="active">
        <a href="#offeredCourse" aria-controls="offeredCourse" role="tab" data-toggle="tab"><?php echo get_cat_name($notice_category);?></a>
    </li>
    <li class="pull-right">
        <a href="<?php echo esc_url($notice_category_link); ?>"><i class="fa fa-archive"></i> Archive</a>
    </li>
</ul>

<div class="tab-content" style="">
    <div role="tabpanel" class="tab-pane active" id="offeredCourse">
        <div class="notice">
            <?php
                $notice_args = array(
                      'posts_per_page'   => -1,
                      'offset'           => 0,
                      'cat'    => $notice_category,
                      'meta_query' => array(
                          array(
                              'key' => 'notice_expire_date',
                              'value' => date('Ymd'),
                              'type' => 'DATE',
                              'compare' => '>='
                          )
                      ),
                      'orderby'          => 'date',//'meta_value_num',
                      //'meta_key'         => 'notice_priority',
                      //'order'            => 'DSC',
                      'post_type'        => 'post',
                      'post_status'      => 'publish',
                      'suppress_filters' => true
                );
            ?>
            
            <?php
                 $notice_posts = get_posts( $notice_args );
                 if(have_posts()) :
                    foreach ( $notice_posts as $post ) : setup_postdata( $post );
            ?>
            <article class="event">
                <a class="date"
                   href="<?php echo get_permalink(); ?>"><?php the_time('d')  ?><span class="day-year"><?php the_time('M Y')  ?> </span></a>
                <h3 class="event-title">
                    <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title() ?>"><?php echo get_the_title() ?></a>
                </h3>
            </article>
            <div style="clear:both"></div>
            <?php endforeach; ?>
            <?php else: ?>
            <div class="alert alert-warning alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <strong>Not Found!</strong> There in no recent notice.
            </div>
            <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
        </div>
    </div>

</div>
</div>
<style type="text/css">

.notice-list .tab-content
{height: 384px;overflow: auto;}
    /*Event List*/
    article.event {
          color: rgb(47, 37, 26);
          min-height: 60px;
          text-align: left;
          width: 100%;
          border-top: 0px none rgb(47, 37, 26);
          border-right: 0px none rgb(47, 37, 26);
          border-left: 0px none rgb(47, 37, 26);
          
          list-style: none outside none;
          margin: 0;
          outline: rgb(47, 37, 26) none 0px;
          padding: 0 0 10px 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        line-height:14px;
    }
    
    article.event .date {
        color: #fff;
        display: block;
        float: left;
        min-height: 42px;
        text-align: center;
        width: 64px;
        perspective-origin: 32px 32px;
        transform-origin: 32px 32px;
        background: #0089CF none repeat scroll 0% 0% / auto padding-box border-box;
        border: 0px none rgb(47, 37, 26);
        
        list-style: none outside none;
        margin: 0px 15px 10px 0px;
        outline: rgb(47, 37, 26) none 0px;
        padding: 11px 0px;
        
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        line-height:21px;

    }
    
    article.event .day-year {
        color: #fff;
        display: block;
        height: 21px;
        text-align: center;
        width: 64px;
        perspective-origin: 32px 10.5px;
        transform-origin: 32px 10.5px;
        border: 0px none rgb(175, 162, 147);
     
        list-style: none outside none;
        outline: rgb(175, 162, 147) none 0px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
        line-height:22px;
    }
    
    article.event .event-title {
        color: rgb(59, 36, 9);
        /*display: inline-block;*/
        text-align: left;
        max-width: 470px;
        perspective-origin: 138.25px 8.5px;
        transform-origin: 138.25px 8.5px;
        border-top: 0px none rgb(59, 36, 9);
        border-right: 0px none rgb(59, 36, 9);
        border-bottom: 1px solid rgba(0, 0, 0, 0);
        border-left: 0px none rgb(59, 36, 9);
        
        list-style: none outside none;
        outline: rgb(59, 36, 9) none 0px;
   
        font-family: Arial, Helvetica, sans-serif;
        font-size: 19px;
        line-height:16px;
    }
    .event-title{
        display: table-cell;
        vertical-align: middle;
        height: 62px;
        margin: 0;
    }
    
    a.list-group-item .list-group-item-heading, .event-title a {
        color: rgb(59, 36, 9);
        cursor: pointer;
        text-align: left;
        text-decoration: none;
        border: 0px none rgb(59, 36, 9);
        
        list-style: none outside none;
        outline: rgb(59, 36, 9) none 0px;
        transition: color 0.1s linear 0s;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        line-height:12px;
    }
    
    a.list-group-item .list-group-item-heading:hover,.event-title a:hover{
        color: #0089CF;
    }
    
    article.event p {
        color: rgb(141, 122, 101);
        height: 31px;
        text-align: left;
        width: 100%;
        border: 0px none rgb(141, 122, 101);
        list-style: none outside none;
        margin: 0px;
        outline: rgb(141, 122, 101) none 0px;
    }
    .event .date{
        border-radius: 50px;
        height: 62px;
    }
    /* End Event List*/
</style>