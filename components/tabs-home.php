<?php
    global $uni_pro;
    $ne_category = $uni_pro['opt-select-news-events-category'];
    $cw_category = $uni_pro['opt-select-conferences-workshops-category'];
    $ne_category_link = get_category_link( $ne_category );
    $cw_category_link = get_category_link( $cw_category );
?>
<ul class="nav nav-tabs" role="tablist" id="myTab">
	<li role="presentation" class="active">
        <a href="#Events" aria-controls="Events" role="tab" data-toggle="tab"><?php echo get_cat_name( $ne_category );?></a>
	</li>
	<li role="presentation" >
        <a href="#Conferences" aria-controls="Conferences" role="tab" data-toggle="tab"><?php echo get_cat_name( $cw_category );?></a>
	</li>
	<li class="pull-right">
          <a type="button" class="btn dropdown-toggle" role="tab" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-archive"></i> Archive
          </a>
          <ul class="dropdown-menu">
            <li>
                <a href="<?php echo esc_url($ne_category_link); ?>"><?php echo get_cat_name( $ne_category );?></a>
            </li>
            <li role="separator" class="divider"></li>
            <li>
                <a href="<?php echo esc_url($cw_category_link); ?>"><?php echo get_cat_name( $cw_category );?></a>
            </li>
          </ul>
	</li>
</ul>
<div class="tab-content" style="height: 384px;overflow-y: auto;overflow-x: hidden;">
	<div role="tabpanel" class="tab-pane active" id="Events">
		<span id="events">
			<?php get_template_part( "components/news-event", $name = "list" ) ?>
		</span>
	</div>
	<div role="tabpanel" class="tab-pane " id="Conferences">
		<span id="conferences">
			<?php get_template_part( "components/conferences-workshops", $name = "list" ) ?>
		</span>
	</div>
</div>

<style>

</style>