<?php
return [
    'zf-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'adapters' => [
            'dummy' => [],
            'guiafacilbd' => [
                'driver' => \mysqli::class,
                'database' => 'guiafacil',
                'username' => 'root',
                'password' => '',
                'hostname' => 'localhost',
                'charset'  => 'utf8',
                'options' => [
                    'buffer_results' => true,
                ],
            ],
        ],
    ],
];