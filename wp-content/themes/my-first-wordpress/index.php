<?php
/**
 * Main Template File
 */

get_header();
?>

<div class="container">
    <div class="content-area">
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
                                <?php
                                if (is_singular()) :
                                    the_title('<h1 class="entry-title">', '</h1>');
                                else :
                                    the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
                                endif;
                                ?>

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
            // Pagination
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('&laquo; Previous', 'mytheme'),
                'next_text' => __('Next &raquo;', 'mytheme'),
            ));
            ?>

        <?php else : ?>

            <article class="no-results">
                <header class="entry-header">
                    <h1><?php _e('Nothing Found', 'mytheme'); ?></h1>
                </header>

                <div class="entry-content">
                    <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mytheme'); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </article>

        <?php endif; ?>
    </div>
</div>

<style>
/* Blog Layout Styles */
.posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.post-card {
    background: #ffffff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.12);
}

.post-thumbnail {
    overflow: hidden;
}

.post-thumbnail img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.post-card:hover .post-thumbnail img {
    transform: scale(1.05);
}

.post-content {
    padding: 1.5rem;
}

.entry-title {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    line-height: 1.3;
}

.entry-title a {
    color: var(--secondary-color);
    text-decoration: none;
}

.entry-title a:hover {
    color: var(--primary-color);
}

.entry-meta {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 1rem;
}

.entry-meta time,
.entry-meta .author {
    margin-right: 1rem;
}

.entry-summary {
    color: var(--text-color);
    margin-bottom: 1rem;
}

.read-more {
    display: inline-block;
    color: var(--primary-color);
    font-weight: 600;
    transition: color 0.3s ease;
}

.read-more:hover {
    color: #b83228;
}

.pagination {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin: 3rem 0;
}

.pagination .page-numbers {
    padding: 0.5rem 1rem;
    border: 1px solid var(--border-color);
    border-radius: 4px;
    text-decoration: none;
    color: var(--text-color);
    transition: all 0.3s ease;
}

.pagination .page-numbers:hover,
.pagination .page-numbers.current {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.no-results {
    text-align: center;
    padding: 3rem 1rem;
}

@media (max-width: 768px) {
    .posts-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
get_footer();
