<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
  <label>
    <span class="screen-reader-text"><?php _e('Kërko për:', 'malet-kosoves'); ?></span>
    <input type="search" class="search-field"
           placeholder="<?php echo esc_attr__('Kërko …', 'malet-kosoves'); ?>"
           value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit"><?php _e('Kërko', 'malet-kosoves'); ?></button>
</form>
