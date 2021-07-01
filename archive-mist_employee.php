<?php get_header(); ?>
<div class="container" style="padding-top: 30px;">
    <div class="row">
        <div class="col-md-4 main-content ">
            <div class="" style=""><?php get_template_part( "/components/notices", $name = "list" ) ?></div>
        </div>
        <div class="col-md-8 main-content ">
          <div class="content-box">
          <h4 class="title text-center">Our Professionals</h4>
          <hr>
              <?php get_template_part( "loop", $name = "employee" ) ?>
          </div>
        </div>

    </div>
</div>

<?php get_footer("no-sidebar"); ?>