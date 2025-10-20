<?php get_header(); ?>
<div id="container">
        <div id="inner_container">
            <div id="imgs_container">
                <div class="img_container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Gjeravica.jpg" alt="Mali 1 - Gjeravica">
                </div>
                <div class="img_container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Hajla.jpg" alt="Mali 2 - Hajla">
                </div>
                <div class="img_container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Sharri.jpg" alt="Mali 3 - Sharri">
                </div>
            </div>
            <div id="overlay">
                <div id="left_button" class="overlay_button" onclick="onLeftButton()"><</div>
                <div id="right_button" class="overlay_button" onclick="onRightButton()">></div>
            </div>
        </div>
    </div>
<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        <h1>Malet e Kosovës — Eksploroni natyrën</h1>
                    </section>
                    <section class="services">
                        <h2>Shërbimet</h2>
                        <div class="container">
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-1' )){
                                        dynamic_sidebar( 'services-1' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-2' )){
                                        dynamic_sidebar( 'services-2' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-3' )){
                                        dynamic_sidebar( 'services-3' );
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                    <section class="home-blog">
                        <h2>Postimet e fundit</h2>
                        <div class="container">
                            <?php 

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                            );

                            $postlist = new WP_Query( $args );

                                if( $postlist->have_posts() ):
                                    while( $postlist->have_posts() ) : $postlist->the_post();
                                    get_template_part( 'parts/content', 'latest-news' );
                                    endwhile;
                                    wp_reset_postdata();
                                else: ?>
                                    <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>                                
                        </div>
                    </section>
                    <div class="wpdevs-slider">

</div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
