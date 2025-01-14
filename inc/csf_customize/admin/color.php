<?php
/**
 * VüCH Theme page option
 *
 * @package Fresh Awards
 */
CSF::createSection( $prefix, array(
    'id'     => 'fawards_site_color',
    'title'  => 'Color Settings',
    'icon'   => 'fas fa-eye-dropper',
    'fields' => array(
        array(
            'id'          => 'vuch-primary-color',
            'type'        => 'color',
            'title'       => 'Primary Color',
            'default'     => '#003C97',
        ),
        array(
            'id'          => 'vuch-secondary-color',
            'type'        => 'color',
            'title'       => 'Secondary Color',
            'default'     => '#1570EF',
        ),
        array(
            'id'          => 'vuch-text-color',
            'type'        => 'color',
            'title'       => 'Text Color',
            'default'     => '#1A1927',
        ),
    ),
) );
