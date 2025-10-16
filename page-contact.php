<?php
/* Template Name: Contact */
get_header(); ?>

<div class="container">
  <h1><?php the_title(); ?></h1>
  <div class="page-content">
    <?php
    while (have_posts()) {
      the_post();
      the_content();
    }
    ?>
    <form action="" method="post">
      <p><label for="cf-name">Emri:</label><br>
         <input type="text" name="cf-name" id="cf-name"></p>
      <p><label for="cf-email">Email:</label><br>
         <input type="email" name="cf-email" id="cf-email"></p>
      <p><label for="cf-message">Mesazhi:</label><br>
         <textarea name="cf-message" id="cf-message"></textarea></p>
      <p><input type="submit" name="cf-submit" value="Dërgo"></p>
    </form>
  </div>
</div>

<?php get_footer(); ?>
