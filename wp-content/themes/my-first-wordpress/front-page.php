<?php
/**
 * Front Page Template - 홈페이지
 */

get_header();
?>

<div class="front-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <?php echo esc_html(get_bloginfo('name')); ?>
                </h1>
                <p class="hero-description">
                    <?php echo esc_html(get_bloginfo('description')); ?>
                </p>
                <div class="hero-buttons">
                    <a href="#products" class="btn btn-primary">
                        <?php _e('Our Products', 'mytheme'); ?>
                    </a>
                    <a href="#contact" class="btn btn-secondary">
                        <?php _e('Contact Us', 'mytheme'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="products">
        <div class="container">
            <h2 class="section-title"><?php _e('Our Solutions', 'mytheme'); ?></h2>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="5" y="11" width="14" height="10" rx="2"/>
                            <circle cx="12" cy="5" r="2"/>
                            <path d="M12 7v4"/>
                            <line x1="8" y1="16" x2="8" y2="16"/>
                            <line x1="16" y1="16" x2="16" y2="16"/>
                        </svg>
                    </div>
                    <h3><?php _e('Industrial Robots', 'mytheme'); ?></h3>
                    <p><?php _e('Advanced robotic solutions for manufacturing and automation', 'mytheme'); ?></p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3><?php _e('Collaborative Robots', 'mytheme'); ?></h3>
                    <p><?php _e('Safe and efficient cobots working alongside humans', 'mytheme'); ?></p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                            <polyline points="2 17 12 22 22 17"/>
                            <polyline points="2 12 12 17 22 12"/>
                        </svg>
                    </div>
                    <h3><?php _e('AI Integration', 'mytheme'); ?></h3>
                    <p><?php _e('Smart robotics powered by artificial intelligence', 'mytheme'); ?></p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <h3><?php _e('Custom Solutions', 'mytheme'); ?></h3>
                    <p><?php _e('Tailored robotic systems for your specific needs', 'mytheme'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Posts Section -->
    <?php
    $recent_posts = new WP_Query(array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
    ));

    if ($recent_posts->have_posts()) :
    ?>
        <section class="latest-posts-section">
            <div class="container">
                <h2 class="section-title"><?php _e('Latest News', 'mytheme'); ?></h2>

                <div class="posts-grid">
                    <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                        <article class="post-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('mytheme_featured', array('loading' => 'lazy')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="post-content">
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="entry-meta">
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                </div>
                                <div class="entry-summary">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    <?php _e('Read More', 'mytheme'); ?> &rarr;
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>

                <div class="view-all-posts">
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn btn-outline">
                        <?php _e('View All Posts', 'mytheme'); ?>
                    </a>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>

<style>
/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 6rem 0;
    text-align: center;
}

.hero-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.hero-description {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.95;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn {
    display: inline-block;
    padding: 0.875rem 2rem;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.btn-primary {
    background: var(--primary-color);
    color: white;
}

.btn-primary:hover {
    background: #b83228;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(220, 61, 49, 0.3);
}

.btn-secondary {
    background: white;
    color: var(--secondary-color);
}

.btn-secondary:hover {
    background: var(--light-gray);
    transform: translateY(-2px);
}

.btn-outline {
    background: transparent;
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.btn-outline:hover {
    background: var(--primary-color);
    color: white;
}

/* Features Section */
.features-section {
    padding: 5rem 0;
    background: var(--light-gray);
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 3rem;
    color: var(--secondary-color);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.feature-card {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.feature-icon {
    margin-bottom: 1.5rem;
    color: var(--primary-color);
}

.feature-icon svg {
    width: 60px;
    height: 60px;
    stroke: var(--primary-color);
    transition: transform 0.3s ease;
}

.feature-card:hover .feature-icon svg {
    transform: scale(1.1);
}

.feature-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

.feature-card p {
    color: #666;
    line-height: 1.6;
}

/* Latest Posts Section */
.latest-posts-section {
    padding: 5rem 0;
}

.view-all-posts {
    text-align: center;
    margin-top: 3rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }

    .hero-description {
        font-size: 1.1rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .features-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
get_footer();
