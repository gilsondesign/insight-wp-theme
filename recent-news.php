<?php
/*
Template Name: Recent News
*/
?>


<?php get_header(); ?>
<section id="posts-list">
    <div class="container">
    	<div id="recent-news">
        <?php query_posts('showposts=25'); ?>
			<?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'news-thumb')); ?>
                    <div class="news-content">
                    	
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
                        <span class="post-date"><?php the_time('F j, Y'); ?></span>
                        <span><?php the_excerpt(); ?></span>
                    </div>
                </article>

            <?php endwhile;?>
        </div>
        <div id="resource-links">
        	<h2>Resources</h2>
        	<a href="http://www.abanet.org/tips" target="_blank">ABA Tort Trial & Insurance Practice Section </a>
            <a href="http://www.abanet.org/tips/fslc" target="_blank">ABA Fidelity and Surety Law Committee </a>
            <a href="http://www.acfe.com/" target="_blank">Association of Certified Fraud Examiners </a>
            <a href="http://www.aicpa.org/InterestAreas/ForensicAndValuation/Pages/FVS.aspx" target="_blank">AICPA Forensic and Valuation Services Section </a>
            <a href="http://www.fidelitylaw.org/" target="_blank">The Fidelity Law Association </a>
            <a href="http://www.nspii.com/" target="_blank">National Society of Professional Insurance Investigators  </a>
            <a href="http://www.westernloss.org/" target="_blank">Western Loss Association  </a>
            <a href="http://www.plbr.com/" target="_blank">Property Loss Research Bureau  </a>
        </div>  
    </div> 
</section>


<?php get_footer(); ?>