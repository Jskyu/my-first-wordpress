<?php
/**
 * Search Results Template
 */

get_header();
?>

<div class="container">
    <div class="search-results-page">
        <header class="page-header">
            <h1 class="page-title">
                <?php
                printf(
                    __('Search Results for: %s', 'mytheme'),
                    '<span class="search-query">' . get_search_query() . '</span>'
                );
                ?>
            </h1>

            <?php
            global $wp_query;
            $total_results = $wp_query->found_posts;
            ?>
            <p class="search-results-count">
                <?php
                printf(
                    _n('%s result found', '%s results found', $total_results, 'mytheme'),
                    '<strong>' . number_format_i18n($total_results) . '</strong>'
                );
                ?>
            </p>
        </header>

        <?php if (have_posts()) : ?>
            <div class="search-results-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('search-result-item'); ?>>
                        <div class="search-result-content">
                            <header class="entry-header">
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <div class="entry-meta">
                                    <span class="post-type">
                                        <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>
                                    </span>
                                    <span class="post-date">
                                        <?php echo get_the_date(); ?>
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

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="search-result-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('mytheme_thumbnail'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
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
                <p><?php _e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'mytheme'); ?></p>

                <div class="search-again">
                    <?php get_search_form(); ?>
                </div>

                <div class="search-suggestions">
                    <h3><?php _e('Suggestions:', 'mytheme'); ?></h3>
                    <ul>
                        <li><?php _e('Make sure all words are spelled correctly', 'mytheme'); ?></li>
                        <li><?php _e('Try different keywords', 'mytheme'); ?></li>
                        <li><?php _e('Try more general keywords', 'mytheme'); ?></li>
                        <li><?php _e('Try fewer keywords', 'mytheme'); ?></li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
.search-results-page {
    padding: 3rem 0;
}

.page-header {
    margin-bottom: 3rem;
    text-align: center;
}

.page-title {
    font-size: 2rem;
    color: var(--secondary-color);
    margin-bottom: 0.5rem;
}

.search-query {
    color: var(--primary-color);
}

.search-results-count {
    font-size: 1.1rem;
    color: #666;
}

.search-results-list {
    margin-bottom: 3rem;
}

.search-result-item {
    display: flex;
    gap: 2rem;
    padding: 2rem;
    margin-bottom: 2rem;
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: box-shadow 0.3s ease;
}

.search-result-item:hover {
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.search-result-content {
    flex: 1;
}

.search-result-item .entry-title {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.search-result-item .entry-title a {
    color: var(--secondary-color);
    text-decoration: none;
}

.search-result-item .entry-title a:hover {
    color: var(--primary-color);
}

.search-result-item .entry-meta {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 1rem;
}

.search-result-item .entry-meta span {
    margin-right: 1rem;
}

.post-type {
    background: var(--light-gray);
    padding: 0.25rem 0.75rem;
    border-radius: 4px;
    text-transform: uppercase;
    font-size: 0.8rem;
    font-weight: 600;
}

.search-result-thumbnail {
    width: 200px;
    flex-shrink: 0;
}

.search-result-thumbnail img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
}

.no-results {
    text-align: center;
    padding: 3rem 1rem;
    max-width: 600px;
    margin: 0 auto;
}

.no-results h2 {
    font-size: 2rem;
    color: var(--secondary-color);
    margin-bottom: 1rem;
}

.search-again {
    margin: 2rem 0;
}

.search-suggestions {
    text-align: left;
    margin-top: 2rem;
}

.search-suggestions h3 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

.search-suggestions ul {
    list-style: none;
    padding: 0;
}

.search-suggestions li {
    padding: 0.5rem 0;
    padding-left: 1.5rem;
    position: relative;
}

.search-suggestions li::before {
    content: '→';
    position: absolute;
    left: 0;
    color: var(--primary-color);
}

@media (max-width: 768px) {
    .search-result-item {
        flex-direction: column-reverse;
    }

    .search-result-thumbnail {
        width: 100%;
    }

    .search-result-thumbnail img {
        width: 100%;
        height: 200px;
    }
}
</style>

<?php
get_footer();
