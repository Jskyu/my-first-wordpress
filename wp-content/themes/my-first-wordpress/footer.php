</main><!-- #main-content -->

<footer class="site-footer" role="contentinfo">
    <div class="container">
        <?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3')) : ?>
            <div class="footer-widgets">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <div class="footer-column">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-2')) : ?>
                    <div class="footer-column">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-3')) : ?>
                    <div class="footer-column">
                        <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php else : ?>
            <!-- Default Footer Content -->
            <div class="footer-widgets">
                <div class="footer-widget">
                    <h3><?php _e('About', 'my-first-wordpress'); ?></h3>
                    <p><?php bloginfo('description'); ?></p>
                </div>

                <div class="footer-widget">
                    <h3><?php _e('Quick Links', 'my-first-wordpress'); ?></h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ));
                    ?>
                </div>

                <div class="footer-widget">
                    <h3><?php _e('Contact', 'my-first-wordpress'); ?></h3>
                    <?php
                    $phone = get_theme_mod('mytheme_phone');
                    $email = get_theme_mod('mytheme_email');

                    if ($phone) :
                        echo '<p><strong>' . __('Phone:', 'my-first-wordpress') . '</strong> <a href="tel:' . esc_attr($phone) . '">' . esc_html($phone) . '</a></p>';
                    endif;

                    if ($email) :
                        echo '<p><strong>' . __('Email:', 'my-first-wordpress') . '</strong> <a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a></p>';
                    endif;
                    ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="site-info">
            <p>
                &copy; <?php echo date('Y'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
                <?php _e('All rights reserved.', 'my-first-wordpress'); ?>
            </p>
            <p>
                <?php
                printf(
                    __('Powered by %s', 'my-first-wordpress'),
                    '<a href="https://wordpress.org/" target="_blank" rel="noopener">WordPress</a>'
                );
                ?>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
