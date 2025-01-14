<?php
/**
 * Fresh Awards Theme header option
 *
 * @package Fresh Awards
 */
CSF::createSection( $prefix, array(
    'id'     => 'fawards_header',
    'title'  => 'Header',
    'icon'   => 'fas fa-home',
    'fields' => array(
        array(
            'id'       => 'fawards-header-logo',
            'type'     => 'media',
            'title'    => 'Header Logo',
            'subtitle' => esc_html__( '(72x22)px', 'fawards' ),
            'url'      => false,
            'library'  => 'image',
        ),
        array(
            'id'     => 'fawards-header-logo-width',
            'type'   => 'dimensions',
            'title'  => 'Logo Width',
            'height' => false,
            'default'  => array(
                'width'  => '72',
                'unit'   => 'px',
            ),
            'output' => '.logo'
          ),
    ),
) );
