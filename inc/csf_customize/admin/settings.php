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
			'id'     => 'fawards-footer-logo-1',
			'type'   => 'media',
			'title'  => 'Footer Logo 1',
			'url'     => false,
			'library' => 'image',
		),
		array(
			'id'     => 'fawards-footer-logo-2',
			'type'   => 'media',
			'title'  => 'Footer Logo 2',
			'url'     => false,
			'library' => 'image',
		),
		array(
            'id'      => 'fawards-footer-copyright',
            'type'    => 'text',
            'title'   => 'Copyright',
            'default' => 'Copyright © {year} Fresh Produce Consortium. All Rights Reserved.',
            'subtitle' => esc_html__( '{year} show current year.', 'fawards' ),
        ),
	),
) );
