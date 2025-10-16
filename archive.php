<?php get_header(); ?>
<div class="container">
  <h1>
    <?php
    if (is_category()) {
      single_cat_title();
    } elseif (is_tag()) {
      single_tag_title();
    } elseif (is_author()) {
      the_post();
      echo 'Postat nga ' . get_the_author();
      rewind_posts();
    } elseif (is_day()) {
      echo 'Dita: ' . get_the_date();
    } elseif (is_month()) {
      echo 'Muaji: ' . get_the_date('F Y');
    } elseif (is_year()) {
      echo 'Viti: ' . get_the_date('Y');
    } else {
      echo 'Arkiva';
    }
    ?>
  </h1>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
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
    <p><?php _e('Nuk u gjet asnjë artikull në këtë arkivë.', 'malet-kosoves'); ?></p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
