<?php
/*
Template Name: Resources
*/
?>


<?php get_header(); ?>


<section id="recent-news">
    <div class="container">
        <div class="resources">
            <h2>Resources</h2>
            <ul class="link-list">
                <li class="link-list__item"><a href="http://www.abanet.org/tips">ABA Tort Trial & Insurance Practice Section </a></li>
                <li class="link-list__item"><a href="http://www.abanet.org/tips/fslc">ABA Fidelity and Surety Law Committee</a></li>
                <li class="link-list__item"><a href="http://www.acfe.com/">Association of Certified Fraud Examiners</a></li>
                <li class="link-list__item"><a href="http://www.aicpa.org/InterestAreas/ForensicAndValuation/Pages/FVS.aspx">AICPA Forensic and Valuation Services Section</a></li>
                <li class="link-list__item"><a href="http://www.fidelitylaw.org/">The Fidelity Law Association</a></li>
                <li class="link-list__item"><a href="http://www.nspii.com/">National Society of Professional Insurance Investigators </a></li>
                <li class="link-list__item"><a href="http://www.westernloss.org/">Western Loss Association </a></li>
                <li class="link-list__item"><a href="Property Loss Research Bureau ">Property Loss Research Bureau </a></li>
            </ul>
        </div>
        <div class="news">
            <h1>In the News</h1>
            <div id="posts-list">
               <?php query_posts('showposts=25'); ?>
                <?php while (have_posts()) : the_post(); ?>
    
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'news-thumb')); ?>
                        <div class="news-content">
                            
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><h4><?php the_title(); ?></h4></a>
                            <span class="post-date"><?php the_time('F j, Y'); ?></span>
                            <span><?php the_excerpt(); ?></span>
                            <hr />
                        </div>
                    </article>
    
                <?php endwhile;?>
                <div class="news__navigation">
                    <div class="previous"><?php previous_posts_link('&laquo; Newer articles') ?></div>
                    <div class="next"><?php next_posts_link('Older articles &raquo;','') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

