<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']         = __('Framework', 'fw');
$manifest['uri']          = 'http://themefuse.com/framework';
$manifest['description']  = __('WordPress Framework', 'fw');
$manifest['version']      = '1.0';
$manifest['author']       = 'ThemeFuse';
$manifest['author_uri']   = 'http://themefuse.com/';
$manifest['requirements'] = array(
    'wordpress' => array(
        'min_version' => '4.0',
        /*'max_version' => '4.99.9'*/
    ),
);