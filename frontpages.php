<?php get_header(); ?>

<div class="hero">
  <h2>Mirësevini në “Mallet e Kosovës & Alpinizëm”</h2>
</div>

<div class="container">
  <section class="latest-posts">
    <h2>Artikuj më të fundit</h2>
    <?php
    $recent = new WP_Query(array(
      'posts_per_page' => 3
    ));
    if ($recent->have_posts()) :
      while ($recent->have_posts()) : $recent->the_post(); ?>
        <article>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </section>

  <section class="about-section">
    <h2>Rreth Nesh</h2>
    <p>Këtu mund të vendosësh përshkrimin e organizatës, historinë, misionin, etj.</p>
    <a href="<?php echo site_url('/about'); ?>">Më shumë</a>
  </section>
</div>

<?php get_footer(); ?>
