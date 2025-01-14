<?php
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'fawards_page_options';

    //
    // Create a metabox
    CSF::createMetabox( $prefix, array(
        'title'              => 'Hero Background Option',
        'post_type'          => 'page',
        'data_type'          => 'serialize',
        'context'            => 'advanced',
        'priority'           => 'default',
        'exclude_post_types' => array(),
        'page_templates'     => '',
        'post_formats'       => '',
        'show_restore'       => false,
        'enqueue_webfont'    => true,
        'async_webfont'      => false,
        'output_css'         => true,
        'nav'                => 'normal',
        'theme'              => 'light',
        'class'              => '',
    ) );

    //
    // Create a section
    require_once fawards_ROOT . '/inc/csf_customize/metabox/hero_bg.php';

}