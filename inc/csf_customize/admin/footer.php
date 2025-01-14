<?php
/**
 * Fresh Awards Theme footer option
 *
 * @package Fresh Awards
 */
CSF::createSection( $prefix, array(
    'id'     => 'fawards_footer',
    'title'  => 'Footer',
    'icon'   => 'fa fa-home',
    'fields' => array(
        array(
            'id'       => 'fawards-footer-logo',
            'type'     => 'media',
            'title'    => 'Footer Logo',
            'subtitle' => esc_html__( '(108x32)px', 'fawards' ),
            'url'      => false,
            'library'  => 'image',
        ),
    ),
) );