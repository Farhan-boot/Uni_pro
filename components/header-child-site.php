<?php
    global $uni_pro;
    $theme_color = $uni_pro['opt-color-theme'];
?>
<style>
    .child-site-top .logo-bar .container {
        padding: 0px;
    }

    #top-nav .navbar-inverse {
        background-color: <?php echo $theme_color; ?>;
       
    }
</style>

<div class="child-site-top" style="">


    <!--Logo Part start-->

    <div id="" class="logo-bar">
        <nav class="" style="padding-top: 10px; padding-bottom: 10px; margin-bottom: 0px;">
            <div class="container">
                <?php
                global $uni_pro;
                
                $logo = $uni_pro['media-logo']['url'];
                ?>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="">
                    <div class="col-md-8">
                        <div class="text-center">
                            <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
                                <img title="" src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>">
                                <div class="title" style="">
                                    <?php bloginfo( 'name' ); ?>
                                    <div class="caption" style="">
                                        <?php bloginfo( 'description' ); ?>
                                    </div>
                                </div>

                            </a>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=" pull-right hidden-xs top-links" style="margin-top: 15px">
                            <div class="btn-group" role="group" aria-label="Top Link">
                                <a href="http://mist.ac.bd/" target="_blank" class="btn btn-default  btn-primary"><i class="fa fa-home"></i>&nbsp;MIST Home</a>
                                <a href="https://mail.mist.ac.bd" target="_blank" title="MIST official email service" title="" class="btn btn-default  btn-primary"><i class=" fa fa-envelope-o"></i>&nbsp;Webmail</a>
                                <a href="https://mist.orbund.com/einstein-freshair/" target="_blank" title="Education Management System (EMS)" class="btn btn-default  btn-primary"><i class=" fa fa-sign-in"></i>&nbsp;EMS</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!--Logo Part end-->

    <!-- Child Site Top Menu Start-->


    <div id="top-nav" class="">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="menu" style="margin-left: -15px">
                    <div id="ddsTopMenu" class="ddsTopMenu">
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
                            <li class="dropdown"><a href="#" class="dropdown-toggle disabled" data-toggle="dropdown" data-hover="dropdown">MIST APPS</a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://mist.xenbit.com/parade">m-Parade State</a></li>
                                    <li><a href="http://mist.xenbit.com/ds_state">m-Discipline State</a></li>
                                    <li><a href="https://mist.orbund.com/einstein-freshair/">Education Management System (EMS)</a></li>
                                    <li><a href="https://mail.mist.ac.bd">m-Webmail</a></li>
                                    <li><a href="http://support.mist.ac.bd">e-Support System</a></li>
                                    <li><a href="http://mcloud.mist.ac.bd/">m-Cloud Causality Record</a></li>
                                    <li><a href="http://mist.xenbit.com/appsys">m-ACR for Faculty Members</a></li>
                                    <li><a href="http://admission.mist.ac.bd">m-Admission</a></li>
                                    <li><a href="http://hub.mist.ac.bd">m-EMS</a></li>                                    
                                    <li><a href="http://mist.xenbit.com/aeetc">m-AEETC</a></li>
                                    <li><a href="http://library.mist.ac.bd">m-Central Library</a></li>
                                    <li><a href="http://123.49.3.58:8081/index.php">m-SMS</a></li>
                                    <li><a href="http://mist.ac.bd/under-construction/">m-ACS (Access Control System)</a></li>
                                    <li><a href="http://mist.ac.bd/under-construction/">m-Student Messing System</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="mobile-menu-toggle visible-xs">
                        <span class="sr-only">Menu</span>
                        <i class="fa fa-bars"></i>

                    </button>
                    <a class="navbar-right search-toggle collapsed" data-toggle="collapse" data-target="#nav-search" href="#"><i class="fa fa-search"></i></a>

                  <div class="navbar-right topnav-sidebar">
                    <div id="text-17" class=" col-md-12  widget_text">
                      <div class=" widget-inner">
                        <div class="textwidget">
                          <a target="_blank" href="https://www.facebook.com/mist.ac.bd"><i class="fa fa-facebook-official fa-2x"></i></a>
                          <a target="_blank" href="https://www.twitter.com/mistacbd"><i class="fa fa-twitter fa-2x"></i></a>
                          <a target="_blank" href="https://plus.google.com/117096386700188301797"><i class="fa fa-google-plus-square fa-2x"></i></a>
                          <a target="_blank" href="https://www.youtube.com/channel/UCHRG8bCYE2zm9yU-xDpTC7A"><i class="fa fa-youtube-square fa-2x"></i></a>
                          <a target="_blank" href="https://bd.linkedin.com/in/military-institute-of-science-and-technology-051826117/"><i class="fa fa-linkedin-square fa-2x"></i></a>
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
                                    <input type="text" name="s" class="form-control search-field" placeholder="Search Here" autocomplete="off">
                                    <span class="input-group-btn">
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
    <!-- Child Site Top Menu end-->
    <div style="clear:both"></div>
    <!--  Mobile Menu    -->
    <div class="mobile-menu-wrap dark-div visible-xs">
        <a href="#" class="mobile-menu-toggle"><i class="fa fa-times-circle"></i></a>

        <ul class="mobile-menu">
            <li class="menu-item "><a href="#"><i class="fa fa fa-book"></i>FUTURE STUDENT </a>

                <ul class="sub-menu">
                    <li class="menu-item "><a href="http://www.mist.ac.bd/future-student/undergraduate/">Undergraduate</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/future-student/graduate/">Graduate</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/future-student/programs/">Programs</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/future-student/international/">International</a>

                    </li>

                </ul>
            </li>
            <li class="menu-item "><a href="#"><i class="fa fa fa-clock-o"></i>CURRENT STUDENT</a>

                <ul class="sub-menu">
                    <li class="menu-item "><a href="http://www.mist.ac.bd/current-students/academics-and-programs/">Academics and Programs</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/current-students/money-matters/">Money Matters</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/current-students/student-services/">Services</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/current-students/campus-life/">Campus Life</a>

                    </li>
                </ul>
            </li>
            <li class="menu-item "><a href="#"><i class="fa fa-university"></i>Faculty & Informations</a>

                <ul class="sub-menu">
                    <li class="menu-item "><a href="http://www.mist.ac.bd/_faculties/faculty-of-civil-engineering/">Faculty of Civil Engineering</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/_faculties/faculty-of-electrical-computer-engineering/">Faculty of Electrical &amp; Computer Engineering</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/_faculties/faculty-of-mechanical-engineering/">Faculty of Mechanical Engineering</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/_faculties/faculty-of-nuclear-science-biomedical-engineering/">Faculty of Nuclear Science &amp; Biomedical Engineering</a>

                    </li>

                </ul>
            </li>
            <li class="menu-item "><a href="#"><i class="fa fa-graduation-cap"></i>RESEARCH</a>

                <ul class="sub-menu">
                    <li class="menu-item "><a href="http://www.mist.ac.bd/research/center-for-advance-testing-services-cats/">Center for Advisory and Testing Services (CATS)</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/research/energy-systems-and-nuclear-science-research-centre-erc/">Energy Systems and Nuclear Science Research Centre (ERC)</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/research/automotive-centre-of-excellence-ace/">Automotive Centre of Excellence (ACE)</a>

                    </li>
                    <li class="menu-item "><a href="http://www.mist.ac.bd/research/partners/">Partners</a>

                    </li>
                    <li class="menu-item"><a href="http://www.mist.ac.bd/research/students/">Students</a>

                    </li>
                    <li class="menu-item"><a href="http://www.mist.ac.bd/research/your-research-destiny/">International Research Oppurtunities</a>

                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Mobile Menu end  -->

</div>
