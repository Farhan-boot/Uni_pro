       
<?php
    global $uni_pro;
    $theme_color = $uni_pro['opt-color-theme'];
?>
<div class="header-title" style=""><h1 style="margin: 0;"><?php bloginfo( 'name' ); ?></h1></div>
<style>

    #top-nav .navbar-inverse {
        background-color: <?php echo $theme_color; ?>;
       
    }
</style>
<!--   Top Menu    -->

       <div id="top-nav" class="dark-div nav-style-1">
        <nav class="navbar navbar-inverse " role="navigation">
          <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="menu">
              <?php
                  wp_nav_menu( array(
                   'container' =>false,
				   'menu_class' => 'nav navbar-nav hidden-xs',
                   'theme_location' => 'tm',
                   'echo' => true,
                   'before' => '',
                   'after' => '',
                   'link_before' => '',
                   'link_after' => '',
                   'depth' => 5,
                   'walker' => new Bootstrap_Walker_Nav_Menu())
                  );
              ?>
                 <ul id="menu-top-menu" class="nav navbar-nav hidden-xs">

                 <li id="" class="main-menu-item multi-column menu-item  menu-item-has-children parent dropdown">
                    <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">
                      MIST APPS
                    </a>

                    <?php
                    wp_nav_menu( array(
                     'container' =>false,
                     'menu_class' => 'dropdown-menu menu-depth-1',
                     'theme_location' => 'm-apps',
                     'echo' => true,
                     'before' => '',
                     'after' => '',
                     'link_before' => '',
                     'link_after' => '',
                     'depth' => 5,
                     'walker' => new description_walker())
                    );
                    ?>
                  </li>
                   </ul>

              <button type="button" class="mobile-menu-toggle visible-xs"> <span class="sr-only">Menu</span>
                <i class="fa fa-bars"></i>
              </button>
              
              <a class="navbar-right search-toggle collapsed" data-toggle="collapse" data-target="#nav-search" href="#">
              <i class="fa fa-search"></i>
              </a>

              <div class="navbar-right topnav-sidebar">
                <div id="text-17" class=" col-md-12  widget_text">
                  <div class=" widget-inner">
                    <div class="textwidget">
                      <a target="_blank" href="https://www.facebook.com/mist.ac.bd"><i class="fa fa-facebook-official fa-2x"></i></a>
                      <a target="_blank" href="https://www.twitter.com/mistacbd"><i class="fa fa-twitter fa-2x"></i></a>
                      <a target="_blank" href="https://www.youtube.com/+MistAcBd"><i class="fa fa-youtube-square fa-2x"></i></a>
                      <!--<a target="_blank" href="https://plus.google.com/+MistAcBd"><i class="fa fa-google-plus-square fa-2x"></i></a>
                      <a target="_blank" href="https://bd.linkedin.com/in/military-institute-of-science-and-technology-051826117/"><i class="fa fa-linkedin-square fa-2x"></i></a>-->
                    </div>
                  </div>
                </div>
                <div id="icl_lang_sel_widget" class=" col-md-12  icl_languages_selector">
                </div>
              </div>

              <div id="nav-search" class="collapse dark-div">
                <div class="container">
                  <form action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="input-group">
                      <input type="text" name="s" class="form-control search-field" placeholder="Search Here" autocomplete="on"> <span class="input-group-btn">
                      <button type="submit"><i class="fa fa-search fa-4x"></i>&nbsp;</button>
                    </span>
                    <span class="input-group-btn hidden-xs">
                      <button type="button" data-toggle="collapse" data-target="#nav-search">&nbsp;<i class="fa fa-times fa-2x"></i></button>
                    </span>

                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.navbar-collapse -->
        </div>
      </nav>
    </div>
    <div style="clear:both"></div>
    <!--/top-nap-->
    <div id="main-nav" class="dark-div nav-style-1">
      <nav class="navbar navbar-inverse main-color-2-bg" role="navigation">
        <div class="container">
            <?php
                global $uni_pro;
             
                $logo = $uni_pro['media-logo']['url'];
            ?>
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <div  class="logo" >
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
                <img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" style="padding-right: 15px;">
            </a>
            <!--<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>-->
            <link href='https://fonts.googleapis.com/css?family=Yeseva+One' rel='stylesheet' type='text/css'>
             <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
                <div class="title" style="padding: 0;">
                    <em style="font-family: 'Yeseva One', 'Pacifico', cursive;font-size: 40px;">m<span style="font-family: fantasy;font-size: 40px;">-</span>Cloud </em> 
                    <div class="caption" style="color: rgba(79, 0, 0, 0.5);margin-top: -12px;">
                      MIST Cloud Services System
                    </div>
                </div>
                 </a>
            
            </div>

          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="main-menu hidden-xs">
            <ul class="nav navbar-nav navbar-right">
              <li id="" class="main-menu-item multi-column menu-item  menu-item-has-children parent dropdown">
                <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">
                  <i class="fa fa-book"></i>  FUTURE STUDENT <span class="menu-description"> Why & How</span></a>
                  <?php
                  wp_nav_menu( array(
                   'container' =>false,
                   'menu_class' => 'dropdown-menu menu-depth-1',
                   'theme_location' => 'fs',
                   'echo' => true,
                   'before' => '',
                   'after' => '',
                   'link_before' => '',
                   'link_after' => '',
                   'depth' => 5,
                   'walker' => new description_walker())
                  );
                  ?>

                </li>

                <li id="" class="main-menu-item multi-column menu-item  menu-item-has-children parent dropdown">
                  <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">
                    <i class="fa fa-clock-o"></i>  CURRENT STUDENT <span class="menu-description"> Campus & Services </span></a>
                    <?php
                    wp_nav_menu( array(
                     'container' =>false,
                     'menu_class' => 'dropdown-menu menu-depth-1',
                     'theme_location' => 'cs',
                     'echo' => true,
                     'before' => '',
                     'after' => '',
                     'link_before' => '',
                     'link_after' => '',
                     'depth' => 5,
                     'walker' => new description_walker())
                    );
                    ?>

                  </li>
                
                  <!--<li id="" class="main-menu-item menu-item single-column top-level  dropdown">-->
                   <li id="" class="main-menu-item multi-column menu-item  menu-item-has-children parent dropdown">
                    <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">
                      <i class="fa fa-university"></i>  ACADEMICS <span class="menu-description">Faculty &amp; Informations</span>
                    </a>

                    <?php
                    wp_nav_menu( array(
                     'container' =>false,
                     'menu_class' => 'dropdown-menu menu-depth-1',
                     'theme_location' => 'academic',
                     'echo' => true,
                     'before' => '',
                     'after' => '',
                     'link_before' => '',
                     'link_after' => '',
                     'depth' => 5,
                     'walker' => new description_walker())
                    );
                    ?>
                  </li>
                  <li id="" class="main-menu-item menu-item single-column top-level dropdown">
                    <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">
                      <i class="fa fa-graduation-cap"></i>  RESEARCH <span class="menu-description">Research &amp; Study</span>
                    </a>

                    <?php
                    wp_nav_menu( array(
                     'container' =>false,
                     'menu_class' => 'dropdown-menu menu-depth-1',
                     'theme_location' => 'research',
                     'echo' => true,
                     'before' => '',
                     'after' => '',
                     'link_before' => '',
                     'link_after' => '',
                     'depth' => 5,
                     'walker' => new description_walker())
                    );
                    ?>
                  </li>
                </ul> 
                <a href="#" class="sticky-gototop main-color-1-hover"><i class="fa fa-angle-up"></i></a>

              </div>
              <!-- /.navbar-collapse -->
            </div>
          </nav>
        </div>
        <!-- #main-nav -->

        <!--  Top Menu End    -->

        <!--  Mobile Menu    -->
        <div class="mobile-menu-wrap dark-div visible-xs"> 
            <a href="#" class="mobile-menu-toggle"><i class="fa fa-times-circle"></i></a>
            <div class="mobile-menu">
              <?php
                  wp_nav_menu( array(
                   'container' =>false,
                   'theme_location' => 'tm',
                   'echo' => true,
                   'before' => '',
                   'after' => '',
                   'link_before' => '',
                   'link_after' => '',
                   'depth' => 5)
                  );
              ?>
              <?php
                  wp_nav_menu( array(
                   'container' =>false,
                   'theme_location' => 'academic',
                   'echo' => true,
                   'before' => '',
                   'after' => '',
                   'link_before' => '',
                   'link_after' => '',
                   'depth' => 5)
                  );
              ?>
              <?php
                  wp_nav_menu( array(
                   'container' =>false,
                   'theme_location' => 'm-apps',
                   'echo' => true,
                   'before' => '',
                   'after' => '',
                   'link_before' => '',
                   'link_after' => '',
                   'depth' => 5)
                  );
              ?>
              <?php
                  wp_nav_menu( array(
                   'container' =>false,
                   'theme_location' => 'fs',
                   'echo' => true,
                   'before' => '',
                   'after' => '',
                   'link_before' => '',
                   'link_after' => '',
                   'depth' => 5)
                  );
              ?>
              <?php
                  wp_nav_menu( array(
                   'container' =>false,
                   'theme_location' => 'cs',
                   'echo' => true,
                   'before' => '',
                   'after' => '',
                   'link_before' => '',
                   'link_after' => '',
                   'depth' => 5)
                  );
              ?>
            </div> 
        </div>
        <!-- Mobile Menu end  -->      
    <div style="clear:both"></div>
