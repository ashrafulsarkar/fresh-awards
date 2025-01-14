<?php
/**
 * Fresh Awards Theme Theme Custom function
 *
 * @package Fresh Awards
 */

// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'fawards_csf';

    //
    // Create options
    CSF::createOptions( $prefix, array(

        // framework title
        'framework_title'         => 'Fresh Awards Option <small>by <a href="mailto:ashrafulsarkar47@gmail.com">Ashraful Sarkar Naiem</a></small>',
        'framework_class'         => '',

        // menu settings
        'menu_title'              => 'Fresh Awards',
        'menu_slug'               => 'fawards-option',
        'menu_type'               => 'menu',
        'menu_capability'         => 'manage_options',
        'menu_icon'               => null,
        'menu_position'           => 30,
        'menu_hidden'             => false,
        'menu_parent'             => '',

        // menu extras
        'show_bar_menu'           => true,
        'show_sub_menu'           => true,
        'show_in_network'         => true,
        'show_in_customizer'      => false,

        'show_search'             => false,
        'show_reset_all'          => false,
        'show_reset_section'      => true,
        'show_footer'             => false,
        'show_all_options'        => false,
        'show_form_warning'       => true,
        'sticky_header'           => true,
        'save_defaults'           => true,
        'ajax_save'               => true,

        // admin bar menu settings
        'admin_bar_menu_icon'     => '',
        'admin_bar_menu_priority' => 80,

        // footer
        'footer_text'             => '',
        'footer_after'            => '',
        'footer_credit'           => 'Developed By <a href="https://www.linkedin.com/in/ashrafulsarkar/" target="_blank">Ashraful Sarkar Naiem</a>',

        // database model
        'transient_time'          => 0,

        // contextual help
        'contextual_help'         => array(),
        'contextual_help_sidebar' => '',

        // typography options
        'enqueue_webfont'         => true,
        'async_webfont'           => false,

        // others
        'output_css'              => true,

        // theme and wrapper classname
        'nav'                     => 'normal',
        'theme'                   => 'dark',
        'class'                   => '',

        // external default values
        'defaults'                => array(),

    ) );

    require_once fawards_ROOT . '/inc/csf_customize/admin/header.php';
    require_once fawards_ROOT . '/inc/csf_customize/admin/color.php';
    require_once fawards_ROOT . '/inc/csf_customize/admin/footer.php';
    require_once fawards_ROOT . '/inc/csf_customize/admin/backup.php';

}
