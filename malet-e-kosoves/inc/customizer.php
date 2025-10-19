<?php
// Minimal customizer placeholder to avoid missing file errors.
function malet_customize_register( $wp_customize ) {
    $wp_customize->add_section('malet_footer_section', array(
        'title' => __('Footer Settings', 'malet-e-kosoves'),
        'priority' => 160,
    ));
    $wp_customize->add_setting('set_copyright', array('default' => 'Copyright Malet e Kosoves'));
    $wp_customize->add_control('set_copyright', array(
        'label' => __('Copyright text', 'malet-e-kosoves'),
        'section' => 'malet_footer_section',
        'type' => 'text',
    ));
}
add_action('customize_register','malet_customize_register');
