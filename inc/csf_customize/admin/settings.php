<?php
/**
 * Fresh Awards Theme header option
 *
 * @package Fresh Awards
 */
CSF::createSection( $prefix, array(
    'id'     => 'fawards_settings',
    'title'  => 'Settings',
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
            'id'       => 'fawards-footer-logo',
            'type'     => 'media',
            'title'    => 'Footer Logo',
            'subtitle' => esc_html__( '(108x32)px', 'fawards' ),
            'url'      => false,
            'library'  => 'image',
        ),
        array(
            'id'          => 'opt-select-1',
            'type'        => 'select',
            'title'       => 'Select',
            'placeholder' => 'Select an option',
            'options'     => array(
              'option-1'  => 'Option 1',
              'option-2'  => 'Option 2',
              'option-3'  => 'Option 3',
            ),
            'default'     => 'option-2'
          ),
          
    ),
) );
