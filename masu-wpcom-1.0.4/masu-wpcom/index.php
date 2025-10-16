<?php get_header(); ?>

<div class="container">
  <div class="content-area">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry-excerpt">
            <?php the_excerpt(); ?>
          </div>
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
      <p><?php _e('Nuk u gjet asnjë artikull.', 'malet-kosoves'); ?></p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
