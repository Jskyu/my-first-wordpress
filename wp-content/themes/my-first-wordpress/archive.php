<?php
/**
 * Archive Template
 * For category, tag, author, date, and custom post type archives
 */

get_header();
?>

<div class="container">
    <div class="archive-page">
        <header class="archive-header">
            <?php
            the_archive_title('<h1 class="archive-title">', '</h1>');
            the_archive_description('<div class="archive-description">', '</div>');
            ?>
        </header>

        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('mytheme_featured', array('loading' => 'lazy')); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="post-content">
                            <header class="entry-header">
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <div class="entry-meta">
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                    <span class="author">
                                        <?php _e('by', 'mytheme'); ?>
                                        <?php the_author(); ?>
                                    </span>
                                </div>
                            </header>

                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div>

                            <footer class="entry-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    <?php _e('Read More', 'mytheme'); ?> &rarr;
                                </a>
                            </footer>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('&laquo; Previous', 'mytheme'),
                'next_text' => __('Next &raquo;', 'mytheme'),
            ));
            ?>

        <?php else : ?>
            <div class="no-results">
                <h2><?php _e('Nothing Found', 'mytheme'); ?></h2>
                <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mytheme'); ?></p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
.archive-page {
    padding: 3rem 0;
}

.archive-header {
    text-align: center;
    margin-bottom: 3rem;
}

.archive-title {
    font-size: 2.5rem;
    color: var(--secondary-color);
    margin-bottom: 1rem;
}

.archive-description {
    font-size: 1.125rem;
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .archive-title {
        font-size: 2rem;
    }

    .archive-description {
        font-size: 1rem;
    }
}
</style>

<?php
get_footer();
