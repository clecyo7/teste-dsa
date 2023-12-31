<?php get_header(); ?>
<div id="content">
    <main id="main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
    </main>
</div>
<?php get_footer(); ?>
