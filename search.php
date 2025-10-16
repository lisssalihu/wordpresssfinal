<?php get_header(); ?>

<div class="container">
  <h1><?php printf(__('Rezultatet e kërkimit për: %s', 'malet-kosoves'), '<span>' . get_search_query() . '</span>'); ?></h1>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>

    <div class="pagination">
      <?php
      the_posts_pagination(array(
        'prev_text' => __('« Prev', 'malet-kosoves'),
        'next_text' => __('Next »', 'malet-kosoves'),
      ));
      ?>
    </div>

  <?php else : ?>
    <p><?php _e('Nuk u gjet asnjë rezultat për kërkimin tënd.', 'malet-kosoves'); ?></p>
    <?php get_search_form(); ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
