<?php get_header(); ?>

<div id="single-post" class="page-wrap page-wrap--single-post">
    <div class="section-wrap">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <span class="post-date"><?php the_date('F j, Y'); ?> by <span class="author"><?php the_author(); ?></span></span>
                    <h1 id="post-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; endif; ?>
        </div>
	</div>
</div>

<?php get_footer(); ?>