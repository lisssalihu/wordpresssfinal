<aside id="secondary" class="sidebar widget-area">
  <?php dynamic_sidebar('sidebar-1'); ?>

  <section class="widget widget_recent_posts">
    <h3 class="widget-title"><?php _e('Postime të fundit', 'malet-kosoves'); ?></h3>
    <ul>
      <?php
      $recent = wp_get_recent_posts(array('numberposts' => 5));
      foreach ($recent as $post) {
        echo '<li><a href="' . get_permalink($post["ID"]) . '">' .   $post["post_title"].'</a></li>';
      }
      ?>
    </ul>
  </section>

  <section class="widget widget_categories">
    <h3 class="widget-title"><?php _e('Kategoritë', 'malet-kosoves'); ?></h3>
    <ul>
      <?php wp_list_categories(array('title_li' => '')); ?>
    </ul>
  </section>
</aside>
