<?php get_header(); ?>

<section id="single-post">
	<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <section id="post-title">
                <div class="container">
                    <?php the_date('F j, Y'); ?> by <span class="author"><?php the_author(); ?> </span>
                    <h1><?php the_title(); ?></h1>
                </div>
            </section>
    
            <section id="post-content">
                <div class="container">
                    <div id="post">
                        <?php the_post_thumbnail('category-thumb', array('class' => 'post-thumbnail')); ?>
                        <?php the_content(); ?>
                        
                        <?php endwhile; endif; ?>
                    </div>  
                    
                    <div id="post-sidebar">
                        
                        
                    </div>  
                        
                </div>
            </section>
        </article>
	</div>
</section>

<?php get_footer(); ?>