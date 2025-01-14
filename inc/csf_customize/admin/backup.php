<?php
/**
 * VüCH Theme page option
 *
 * @package Fresh Awards
 */
CSF::createSection( $prefix, array(
    'id'     => 'fawards_backup',
    'title'  => 'Backup Option',
    'icon'   => 'fas fa-download',
    'fields' => array(
        array(
            'type' => 'backup',
        ),
    ),
) );
