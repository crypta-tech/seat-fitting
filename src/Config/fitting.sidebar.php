<?php

return [
    'doctrine' => [
        'name' => 'Doctrines & Fittings',
        'permission' => 'fitting.doctrineview',
        'route_segment' => 'fitting',
        'icon' => 'fas fa-rocket',
        'entries' => [
            'fitting' => [
                'name' => 'Fittings',
                'icon' => 'fas fa-rocket',
                'route_segment' => 'fitting',
                'route' => 'cryptafitting::view',
                'permission' => 'fitting.view',
            ],
            'doctrine' => [
                'name' => 'Doctrine',
                'icon' => 'fas fa-list',
                'route_segment' => 'fitting',
                'route' => 'cryptafitting::doctrineview',
                'permission' => 'fitting.doctrineview',
            ],
            'doctrinereport' => [
                'name' => 'Doctrine Report',
                'icon' => 'fas fa-chart-pie',
                'route_segment' => 'fitting',
                'route' => 'cryptafitting::doctrinereport',
                'permission' => 'fitting.reportview',
            ],
            'about' => [
                'name' => 'About',
                'icon' => 'fas fa-info',
                'route_segment' => 'fitting',
                'route' => 'cryptafitting::about',
                'permission' => 'fitting.view',
            ],
            'settings' => [
                'name' => 'Settings',
                'icon' => 'fas fa-cog',
                'route_segment' => 'fitting',
                'route' => 'fitting.settings',
                'permission' => 'fitting.settings',
            ],
        ],
    ],
];
