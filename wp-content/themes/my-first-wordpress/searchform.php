<?php
/**
 * Search Form Template
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-field" class="sr-only">
        <?php _e('Search', 'my-first-wordpress'); ?>
    </label>
    <input
        type="search"
        id="search-field"
        class="search-field"
        placeholder="<?php esc_attr_e('Search...', 'my-first-wordpress'); ?>"
        value="<?php echo get_search_query(); ?>"
        name="s"
        required
    />
    <button type="submit" class="search-submit">
        <?php _e('Search', 'my-first-wordpress'); ?>
    </button>
</form>
