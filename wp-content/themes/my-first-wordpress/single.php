<?php
/**
 * Single Post Template
 */

get_header();
?>

<div class="container">
    <div class="single-post-layout">
        <article class="single-post-content">
            <?php while (have_posts()) : the_post(); ?>

                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <div class="entry-meta">
                        <span class="post-date">
                            <time datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                        </span>
                        <span class="post-author">
                            <?php _e('by', 'mytheme'); ?>
                            <?php the_author_posts_link(); ?>
                        </span>
                        <?php if (has_category()) : ?>
                            <span class="post-categories">
                                <?php _e('in', 'mytheme'); ?>
                                <?php the_category(', '); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-featured-image">
                        <?php the_post_thumbnail('large', array('loading' => 'eager')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'mytheme'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php if (has_tag()) : ?>
                    <footer class="entry-footer">
                        <div class="post-tags">
                            <?php the_tags('<strong>' . __('Tags:', 'mytheme') . '</strong> ', ', ', ''); ?>
                        </div>
                    </footer>
                <?php endif; ?>

                <!-- Post Navigation -->
                <nav class="post-navigation" aria-label="<?php _e('Post navigation', 'mytheme'); ?>">
                    <div class="nav-links">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();

                        if ($prev_post) :
                        ?>
                            <div class="nav-previous">
                                <span class="nav-subtitle"><?php _e('Previous Post', 'mytheme'); ?></span>
                                <a href="<?php echo get_permalink($prev_post); ?>" rel="prev">
                                    <span class="nav-title"><?php echo get_the_title($prev_post); ?></span>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if ($next_post) : ?>
                            <div class="nav-next">
                                <span class="nav-subtitle"><?php _e('Next Post', 'mytheme'); ?></span>
                                <a href="<?php echo get_permalink($next_post); ?>" rel="next">
                                    <span class="nav-title"><?php echo get_the_title($next_post); ?></span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </nav>

                <?php
                // If comments are open or we have at least one comment
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>
        </article>

        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <aside class="sidebar" role="complementary">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </aside>
        <?php endif; ?>
    </div>
</div>

<style>
.single-post-layout {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 3rem;
    margin: 3rem 0;
}

.single-post-content {
    max-width: 800px;
}

.entry-header {
    margin-bottom: 2rem;
}

.entry-title {
    font-size: 2.5rem;
    line-height: 1.2;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

.entry-meta {
    font-size: 0.95rem;
    color: #666;
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.entry-meta span {
    display: inline-flex;
    align-items: center;
}

.post-featured-image {
    margin-bottom: 2rem;
    border-radius: 8px;
    overflow: hidden;
}

.post-featured-image img {
    width: 100%;
    height: auto;
}

.entry-content {
    font-size: 1.125rem;
    line-height: 1.8;
    color: var(--text-color);
}

.entry-content h2,
.entry-content h3,
.entry-content h4 {
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

.entry-content p {
    margin-bottom: 1.5rem;
}

.entry-content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 2rem 0;
}

.entry-content ul,
.entry-content ol {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.entry-content li {
    margin-bottom: 0.5rem;
}

.entry-content blockquote {
    border-left: 4px solid var(--primary-color);
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: #555;
}

.entry-footer {
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid var(--border-color);
}

.post-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.post-tags a {
    background: var(--light-gray);
    padding: 0.4rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.post-tags a:hover {
    background: var(--primary-color);
    color: white;
}

/* Post Navigation */
.post-navigation {
    margin: 3rem 0;
    padding: 2rem 0;
    border-top: 1px solid var(--border-color);
    border-bottom: 1px solid var(--border-color);
}

.nav-links {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
}

.nav-previous,
.nav-next {
    display: flex;
    flex-direction: column;
}

.nav-next {
    text-align: right;
}

.nav-subtitle {
    font-size: 0.85rem;
    color: #666;
    margin-bottom: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.nav-title {
    color: var(--primary-color);
    font-weight: 600;
    transition: color 0.3s ease;
}

.nav-links a:hover .nav-title {
    color: #b83228;
}

/* Sidebar */
.sidebar {
    position: sticky;
    top: 100px;
    height: fit-content;
}

.sidebar .widget {
    background: var(--light-gray);
    padding: 1.5rem;
    border-radius: 8px;
    margin-bottom: 2rem;
}

.sidebar .widget-title {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

/* Responsive */
@media (max-width: 1024px) {
    .single-post-layout {
        grid-template-columns: 1fr;
    }

    .sidebar {
        position: static;
    }
}

@media (max-width: 768px) {
    .entry-title {
        font-size: 2rem;
    }

    .entry-content {
        font-size: 1rem;
    }

    .nav-links {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .nav-next {
        text-align: left;
    }
}
</style>

<?php
get_footer();
