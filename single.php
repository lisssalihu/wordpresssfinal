<?php get_header(); ?>

<div class="container">
  <div class="content-area">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <div class="entry-meta">
            <span><?php the_date(); ?></span> | <span><?php the_author(); ?></span>
          </div>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <div class="post-navigation">
            <?php
            previous_post_link('&laquo; %link');
            next_post_link('%link &raquo;');
            ?>
          </div>

          <?php
          if (comments_open() || get_comments_number()) {
            comments_template();
          }
          ?>

        </article>

    <?php
      endwhile;
    endif;
    ?>
  </div>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
