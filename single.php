<?php get_header(); ?>

<section id="single-post">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <span class="post-date"><?php the_date('F j, Y'); ?> by <span class="author"><?php the_author(); ?></span></span>
                <h1 id="post-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>