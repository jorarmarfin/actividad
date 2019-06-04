<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/jsahostp/public_html/actividad/user/config/site.yaml',
    'modified' => 1559584934,
    'data' => [
        'title' => 'Actividad económica',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Luis Mayta',
            'email' => 'luis.mayta@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
