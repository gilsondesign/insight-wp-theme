<?php
/*
Template Name: Recent News
*/
?>


<?php get_header(); ?>
<section id="posts-list">
    <div class="container">
        <?php query_posts('showposts=25'); ?>
                        <?php while (have_posts()) : the_post(); ?>

                        <ul class="news-post-roll">
                                <li>
                                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'news-thumb')); ?>
                                                <div class="news-content">
                                                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                                        <span class="news-excerpt"><?php the_excerpt(); ?></span>
                                                </div>
                                        </article>
                                </li>
                        </ul>
                        <?php endwhile;?>
        </div>
        <div id="post-sidebar">
                <div class="recent-posts">
                <h3><?php _e('Recent Articles','insight'); ?></h3>
                <?php query_posts('category_name=article&showposts=10'); ?>
                <?php while (have_posts()) : the_post(); ?>
                
                <ul><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li></ul>
                <?php endwhile; ?>
            </div>
            
            <div class="tag-cloud">
                <h3><?php _e('Top Trends','insight'); ?></h3>
                <?php wp_tag_cloud( $args ); ?>
            </div>   
                     
            
        </div>         
    </div> 
</section>


<?php get_footer(); ?>