<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>

<div class="page-wrap page-wrap--home">
    <div class="home-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/img/forensic-accounting-test.jpg);">
        <div class="home-banner__text">
            <h1>Forensic Accountants</h1>
            <p>We help you discover the who, what, where and why. Insight offers top-notch forensic accountants with the expertise necessary to meet the needs of every client.</p>
        </div>
    </div>

    <div class="section-wrap">
        <div class="container">
            <div id="welcome">
                <h1>Welcome</h1>
                <p>Clients hire us to help them find answers to the myriad of financial questions that arise when evaluating claims: How much is the loss? How do we know that to be true? Can we mitigate damages or expedite recovery?</p>

                <p>As a team of forensic accountants who've been working together since the 1980s, we not only do the fundamentals extremely well, but provide valuable insights to assist our clients' decision-making and strategies. </p>

                <p>Our new name reflects what our clients appreciate most about us - the insights we offer based on the experiences we've been privileged to acquire by working with over 100 insurance companies and law firms on over 7,500 matters. </p>

                <p>Our clients appreciate that we know what to look for, how and where to find it, that we express what it means in clear and concise language. They also appreciate that we pursue this information with unmatched professionalism, sensitivity and efficiency.</p>
            </div>

            <div id="news">
                <h2>In the News</h2>
                <ul class="link-list">
                    <?php query_posts('showposts=3'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <span class="post-date"><?php the_time('F j, Y'); ?></span>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </li>
                    <?php endwhile;?>
                    <li class="link-list__item"><a href="<?php bloginfo('url'); ?>/resources/#recent-news/" class="view-all">view all</a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div id="meet-our-team">
                <h2>Meet our Partners</h2>
                <div id="partners">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/reynolds.jpg" alt="Curtis J. Reynolds" />
                        <h4><a href="<?php bloginfo('url'); ?>/our-team/#reynolds">Curtis J. Reynolds</a></h4>
                        <p class="location">Milwaukee, WI</p>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/bestul.jpg" alt="Jennifer G. Bestul" />
                        <h4><a href="<?php bloginfo('url'); ?>/our-team/#bestul">Jennifer G. Bestul</a></h4>
                        <p class="location">Minneapolis, MN</p>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/friestedt.jpg" alt="John D. Friestedt" />
                        <h4><a href="<?php bloginfo('url'); ?>/our-team/#friestedt">John D. Friestedt</a></h4>
                        <p class="location">Milwaukee, WI</p>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/denson.jpg" alt="Kathy M. Denson" />
                        <h4><a href="<?php bloginfo('url'); ?>/our-team/#denson">Kathy M. Denson</a></h4>
                        <p class="location">Denver, CO</p>
                    </div>
                    <div>
                         <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/knight.jpg" alt="Terrence S. Knight" />
                        <h4><a href="<?php bloginfo('url'); ?>/our-team/#knight">Terrence S. Knight</a></h4>
                        <p class="location">Chicago, IL</p>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/img/spacer.png" alt="" />
                        <a href="<?php bloginfo('url'); ?>/our-team/#our-staff" class="btn">Meet our Staff</a>
                    </div>
               </div>
            </div>
        </div>

        <div class="container">
            <div id="inspirational-quote">
                <div id="quote-flourish">
                    <div id="quote-hr-left">
                        <hr />
                    </div>
                    <div id="quote-img">
                        <span><p>&ldquo;</p></span>
                    </div>
                    <div id="quote-hr-right">
                        <hr />
                    </div>
                </div>
                <div id="quote">The achievements of an organization are the results of the combined effort of each individual.</div>
                <div id="author">- Vince Lombardi, Green Bay Packers</div>
            </div>
        </div>
    </div>

    <div id="about-us" class="section-wrap">
            <div class="container">
            <h2>About Us</h2>
            <p>Our clients are focused on resolving claims fairly and expeditiously, and seek knowledge and insight derived from solid forensic accounting practices.
                    <p>They seek independent, objective and accurate analyses of the causes, circumstances and financial impact of an event or action. Specifically, they seek our expertise in one or more of these areas:</p>
        </div>
        <div class="container">
            <div class="area">
                <h4>Insurance</h4>
                <p>Business Income </p>
                <p>Disability Income </p>
                <p>Employee Dishonesty / Theft</p>
                <p>Faithful Performance</p>
                <p>Financial Condition / Motive</p>
                <p>Out-Of-Sight Stock</p>
                <p>Property Recall</p>
                <p>Property Loss</p>
                <p>Repair Costs</p>
                <p>Third-Party Liability</p>
            </div>
            <div class="area">
                <h4>Litigation</h4>
                <p>Damage Evaluation</p>
                <p>Economic Loss</p>
                <p>Expert Testimony</p>
                <p>Fraud Investigation</p>
                <p>Personal Injury</p>
                <p>Professional Malpractice</p>
                <p>Subrogation</p>

            </div>
            <div class="area">
                <h4>General</h4>
                <p>Record Reconstruction</p>
                <p>Contract Compliance</p>

            </div>
        </div>
        <div class="container">
            <p>Each principal brings more than 20 years of forensic accounting experience, resulting in unmatched knowledge, competence and effectiveness on each and every engagement.</p>
        </div>
    </div>

    <div id="contact-section" class="section-wrap">
        <div class="container">
            <div id="contact-us">
                <h3>Contact Us</h3>
                <p></p>
                <?php echo do_shortcode ('[contact-form-7 id="11" title="Contact form"]'); ?>
            </div>
            <div id="our-locations">
                <h3>Our Office Locations</h3>
                <div>
                    <div class="location">
                        <h4>Chicago</h4>
                        <p>7500 W Grand Avenue</p>
                        <p>Suite 22</p>
                        <p>Gurnee, Illinois 60031</p>
                        <p>P: 224 643 7496</p>
                        <p>F: 224 643 7493</p>
                        <p><a href="https://www.google.com/maps/place/7500+W+Grand+Ave/@42.3859979,-87.988289,17z/data=!3m1!4b1!4m2!3m1!1s0x880f8fdcb49ea1c3:0xd3b8897286c8228" target="_blank">view map</a></p>
                    </div>
                    <div class="location">
                        <h4>Denver</h4>
                        <p>19590 E Mainstreet</p>
                        <p>Suite 209</p>
                        <p>Parker, Colorado 80138</p>
                        <p>P: 303 805 1870</p>
                        <p>F: 303 805 1823</p>
                        <p><a href="https://www.google.com/maps/place/19590+E+Mainstreet/@39.5182617,-104.7619739,17z/data=!3m1!4b1!4m2!3m1!1s0x876c91fb19e58391:0x25735649f4e6f474" target="_blank">view map</a></p>
                    </div>
                    <div class="location">
                        <h4>Milwaukee</h4>
                        <p>2665 S Moorland Road</p>
                        <p>Suite 112</p>
                        <p>New Berlin, Wisconsin 53151</p>
                        <p>P: 262 782 3307</p>
                        <p>F: 262 782 3309</p>
                        <p><a href="https://www.google.com/maps/place/2665+S+Moorland+Rd/@42.9967686,-88.1086331,17z/data=!3m1!4b1!4m2!3m1!1s0x880508a2619e8c69:0xaeb7c7262b7680c2" target="_blank">view map</a></p>
                    </div>
                    <div class="location">
                        <h4>Minneapolis</h4>
                        <p>7373 147th Street West</p>
                        <p>Suite 186</p>
                        <p>Apple Valley, Minnesota 55124</p>
                        <p>P: 952 432 2280</p>
                        <p>F: 952 432 2281</p>
                        <p><a href="https://www.google.com/maps/place/7373+147th+St+W/@44.735154,-93.214247,17z/data=!3m1!4b1!4m2!3m1!1s0x87f6312be03621eb:0x90dbd0954548a647" target="_blank">view map</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
