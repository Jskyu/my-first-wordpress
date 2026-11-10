<?php
/**
 * 404 Error Page Template
 */

get_header();
?>

<div class="container">
    <div class="error-404-page">
        <div class="error-404-content">
            <div class="error-404-graphic">
                <h1 class="error-404-title">404</h1>
                <div class="error-robot">🤖</div>
            </div>

            <div class="error-404-text">
                <h2><?php _e('Page Not Found', 'mytheme'); ?></h2>
                <p class="error-description">
                    <?php _e('Oops! The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'mytheme'); ?>
                </p>

                <div class="error-404-search">
                    <h3><?php _e('Try searching for what you need:', 'mytheme'); ?></h3>
                    <?php get_search_form(); ?>
                </div>

                <div class="error-404-links">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                        <?php _e('Go to Homepage', 'mytheme'); ?>
                    </a>
                    <a href="javascript:history.back()" class="btn btn-secondary">
                        <?php _e('Go Back', 'mytheme'); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Popular Posts -->
        <?php
        $popular_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby' => 'comment_count',
        ));

        if ($popular_posts->have_posts()) :
        ?>
            <div class="error-404-suggestions">
                <h3><?php _e('Popular Posts', 'mytheme'); ?></h3>
                <div class="posts-grid">
                    <?php while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                        <article class="post-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('mytheme_thumbnail'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="post-content">
                                <h4 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
.error-404-page {
    padding: 4rem 0;
    text-align: center;
}

.error-404-content {
    max-width: 800px;
    margin: 0 auto 4rem;
}

.error-404-graphic {
    margin-bottom: 2rem;
}

.error-404-title {
    font-size: 8rem;
    font-weight: 700;
    color: var(--primary-color);
    line-height: 1;
    margin: 0;
    opacity: 0.2;
}

.error-robot {
    font-size: 5rem;
    margin-top: -3rem;
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}

.error-404-text h2 {
    font-size: 2.5rem;
    color: var(--secondary-color);
    margin-bottom: 1rem;
}

.error-description {
    font-size: 1.125rem;
    color: #666;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.error-404-search {
    max-width: 500px;
    margin: 2rem auto;
}

.error-404-search h3 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--text-color);
}

.error-404-search .search-form {
    display: flex;
    gap: 0.5rem;
}

.error-404-search input[type="search"] {
    flex: 1;
    padding: 0.75rem 1rem;
    border: 2px solid var(--border-color);
    border-radius: 6px;
    font-size: 1rem;
}

.error-404-search input[type="submit"] {
    padding: 0.75rem 2rem;
    background: var(--primary-color);
    color: white;
    border: none;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s ease;
}

.error-404-search input[type="submit"]:hover {
    background: #b83228;
}

.error-404-links {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-top: 2rem;
    flex-wrap: wrap;
}

.error-404-suggestions {
    margin-top: 4rem;
    padding-top: 3rem;
    border-top: 1px solid var(--border-color);
}

.error-404-suggestions h3 {
    font-size: 1.75rem;
    margin-bottom: 2rem;
    color: var(--secondary-color);
}

@media (max-width: 768px) {
    .error-404-title {
        font-size: 5rem;
    }
/*  sj#U@psidK*qPKEPs! */
    .error-robot {
        font-size: 3rem;
        margin-top: -2rem;
    }

    .error-404-text h2 {
        font-size: 2rem;
    }

    .error-description {
        font-size: 1rem;
    }

    .error-404-search .search-form {
        flex-direction: column;
    }

    .error-404-links {
        flex-direction: column;
    }

    .error-404-links .btn {
        width: 100%;
    }
}
</style>

<?php
get_footer();
