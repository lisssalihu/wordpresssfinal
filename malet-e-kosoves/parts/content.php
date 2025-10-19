<?php
// Basic loop partial for posts
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
    <?php if( has_post_thumbnail() ): ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
        </div>
    <?php endif; ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta"><?php echo get_the_date(); ?> — <?php the_category(', '); ?></div>
    <p><?php echo wp_trim_words( get_the_excerpt(), 28 ); ?></p>
    <a href="<?php the_permalink(); ?>">Read more →</a>
</article>