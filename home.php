<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>

<div class="home-banner">
    <div class="container">
        <h1>Forensic Accountants</h1>
        <p>We help you discover the who, what, where and why. Peters & Associates offers top-notch forensic accountants with the expertise necessary to meet the needs of every client.</p>
    </div>
</div>

<section id="main-wrapper">
        <div class="container">
                <div id="welcome">
                <h1>Welcome</h1>
            <p>Clients hire us to help them find answers to the myriad of financial questions that arise when evaluating claims: How much is the loss? How do we know that to be true? Can we mitigate damages or expedite recovery?</p>

            <p>As a team of forensic accountants who've been working together since the 1980s, we not only do the fundamentals extremely well, but provide valuable insights to assist our clients' decision-making and strategies. </p>

            <p>Our new name reflects what our clients appreciate most about us - the insights we offer based on the experiences we've been privileged to acquire by working with over 100 insurance companies and law firms on over 7,500 matters. </p>

            <p>Our clients appreciate that we know what to look for, how and where to find it, that we express what it means in clear and concise language. They also appreciate that we pursue this information with unmatched professionalism, sensitivity and efficiency.</p>
        </div>

        <div id="recent-news">
                <h1>In the News</h1>
				<div class="news-item">
					<?php query_posts('showposts=3'); ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                        <span class="post-date"><?php the_date('F j, Y'); ?></span>
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                        </article>
                    <?php endwhile;?>
                </div>
                <a href="<?php bloginfo('url'); ?>/resources/" class="view-all">view all</a>
        </div>
    </div>

    <div class="container">
        <div id="meet-our-team">
        	<h2>Meet our Partners</h2>
            <div id="partners">
                <div>
                     <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/knight.jpg" alt="<?php bloginfo('name'); ?>" />
                    <h4>Terrence S. Knight</h4>
                    <p class="location">Chicago, IL</p>
                </div>
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/denson.jpg" alt="<?php bloginfo('name'); ?>" />
                    <h4>Kathy M. Denson</h4>
                    <p class="location">Denver, CO</p>
                </div>
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/friestedt.jpg" alt="<?php bloginfo('name'); ?>" />
                    <h4>John D. Friestedt</h4>
                    <p class="location">Milwaukee, WI</p>
                </div>
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/reynolds.jpg" alt="<?php bloginfo('name'); ?>" />
                    <h4>Curtis J. Reynolds</h4>
                    <p class="location">Milwaukee, WI</p>
                </div>
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/bestul.jpg" alt="<?php bloginfo('name'); ?>" />
                    <h4>Jennifer G. Bestul</h4>
                    <p class="location">Minneapolis, MN</p>
                </div>
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/img/staff-photos/stone.jpg" alt="<?php bloginfo('name'); ?>" />
                    <h4>Sandy Stone</h4>
                    <p class="location">Bethel Park, PA</p>
               </div>
           </div>
        </div>
    </div>

    <div class="container">
    	<div id="inspirational-quote">
        	<span class="quote">The achievements of an organization are the results of the combined effort of each individual.</span>
			<span class="author">- Vince Lombardi, Green Bay Packers</span>
        </div>
    </div>
</section>

<section id="about-us">
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
</section>






<?php get_footer(); ?>
