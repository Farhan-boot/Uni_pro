<div class="element_size_100">
    <header class="cs-heading-title">
        <h2 class="cs-section-title">Professional Courses</h2>                                                                                </header>
    <div class="our_courses">
        <?php
            wp_nav_menu( array(
                'container' =>false,
                'menu_class' => '',
                'theme_location' => 'profcourses',
                'echo' => true,
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'depth' => 1,
                'items_wrap' => '<ul class="pro">%3$s</ul>',
                'walker' => new Walker_Nav_Menu())
            );
        ?>
        <!--<ul>
            <li>
                <article style="background-color: #8a9045">
                    <h5><a href="http://chimpgroup.com/wp-demo/statfort/courses/msc-money-finance-and-investment/"
                           class="colrhovr">MSc Money Finance and Inv...</a></h5>
                </article>
            </li>
            <li>
                <article style="background-color: #3e769a">
                    <h5><a href="http://chimpgroup.com/wp-demo/statfort/courses/bsc-medicinal-chemistry/"
                           class="colrhovr">BSc Medicinal Chemistry.</a></h5>
                    <span class="course-program">
										5
										Programms                                        </span>                                    </article>
            </li>
            <li>
                <article style="background-color: #7d7b7b">
                    <h5><a href="http://chimpgroup.com/wp-demo/statfort/courses/bsc-neuroscience/"
                           class="colrhovr">BSc Neuroscience.</a></h5>
                    <span class="course-program">
										5
										Programms                                        </span>                                    </article>
            </li>
            <li>
                <article style="background-color: #8f3931">
                    <h5><a href="http://chimpgroup.com/wp-demo/statfort/courses/graduate-diploma-in-marketing/"
                           class="colrhovr">Graduate Diploma in Marke...</a></h5>
                    <span class="course-program">
										5
										Programms                                        </span>                                    </article>
            </li>
            <li>
                <article style="background-color: #a88b60">
                    <h5><a href="http://chimpgroup.com/wp-demo/statfort/courses/master-of-international-business/"
                           class="colrhovr">Master of International B...</a></h5>
                    <span class="course-program">
										5
										Programms                                        </span>                                    </article>
            </li>
            <li>
                <article style="background-color: #c16622">
                    <h5><a href="http://chimpgroup.com/wp-demo/statfort/courses/graduate-diploma-in-human-resources/"
                           class="colrhovr">Graduate Diploma in Human...</a></h5>
                    <span class="course-program">
										5
										Programms                                        </span>                                    </article>
            </li>
        </ul>-->
    </div>
</div>