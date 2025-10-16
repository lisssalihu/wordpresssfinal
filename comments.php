<?php
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area">
  <?php if (have_comments()) : ?>
    <h2 class="comments-title">
      <?php
      $count = get_comments_number();
      if (1 === $count) {
        printf(_x('1 Koment', 'comments title', 'malet-kosoves'));
      } else {
        printf(_nx('%1$s Koment', '%1$s Komente', $count, 'comments title', 'malet-kosoves'), number_format_i18n($count));
      }
      ?>
    </h2>

    <ol class="comment-list">
      <?php
      wp_list_comments(array(
        'style' => 'ol',
        'short_ping' => true,
      ));
      ?>
    </ol>

    <?php
    the_comments_navigation();
    ?>

  <?php endif;

  if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
  ?>
    <p class="no-comments"><?php _e('Komentet janë të mbyllura.', 'malet-kosoves'); ?></p>
  <?php endif; ?>

  <?php
  comment_form();
  ?>
</div>
