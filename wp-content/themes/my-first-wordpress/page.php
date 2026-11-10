<?php
/**
 * Page Template
 */

get_header();
?>

<div class="container">
    <div class="page-layout">
        <article class="page-content">
            <?php while (have_posts()) : the_post(); ?>

                <header class="page-header">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="page-featured-image">
                        <?php the_post_thumbnail('large', array('loading' => 'eager')); ?>
                    </div>
                <?php endif; ?>

                <div class="page-content-area">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'mytheme'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php
                // If comments are open or we have at least one comment
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>
        </article>
    </div>
</div>

<style>
.page-layout {
    margin: 3rem 0;
}

.page-content {
    max-width: 900px;
    margin: 0 auto;
}

.page-header {
    margin-bottom: 2rem;
}

.page-title {
    font-size: 2.5rem;
    line-height: 1.2;
    color: var(--secondary-color);
}

.page-featured-image {
    margin-bottom: 2rem;
    border-radius: 8px;
    overflow: hidden;
}

.page-featured-image img {
    width: 100%;
    height: auto;
}

.page-content-area {
    font-size: 1.125rem;
    line-height: 1.8;
    color: var(--text-color);
}

.page-content-area h2,
.page-content-area h3,
.page-content-area h4 {
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

.page-content-area p {
    margin-bottom: 1.5rem;
}

.page-content-area img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 2rem 0;
}

.page-content-area ul,
.page-content-area ol {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.page-content-area li {
    margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
    .page-title {
        font-size: 2rem;
    }

    .page-content-area {
        font-size: 1rem;
    }
}
</style>

<?php
get_footer();
