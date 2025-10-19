<?php
// Latest news partial
?>
<article class="post-card">
    <?php if( has_post_thumbnail() ): ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
        </div>
    <?php endif; ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="meta"><?php echo get_the_date(); ?></div>
</article>