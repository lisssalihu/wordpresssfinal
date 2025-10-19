<?php
// Single content partial
?>
<article class="single-post">
    <h1><?php the_title(); ?></h1>
    <?php if( has_post_thumbnail() ): ?>
        <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
    <?php endif; ?>
    <div class="entry-content"><?php the_content(); ?></div>
</article>