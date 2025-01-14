<?php
/**
 * Fresh Awards Theme page option
 *
 * @package Fresh Awards
 */
CSF::createSection( $prefix, array(
    'id'     => 'fawards_site_color',
    'title'  => 'Color Settings',
    'icon'   => 'fas fa-eye-dropper',
    'fields' => array(
        array(
            'id'          => 'fawards-primary-color',
            'type'        => 'color',
            'title'       => 'Primary Color',
            'default'     => '#003C97',
        ),
        array(
            'id'          => 'fawards-secondary-color',
            'type'        => 'color',
            'title'       => 'Secondary Color',
            'default'     => '#1570EF',
        ),
        array(
            'id'          => 'fawards-text-color',
            'type'        => 'color',
            'title'       => 'Text Color',
            'default'     => '#1A1927',
        ),
    ),
) );
