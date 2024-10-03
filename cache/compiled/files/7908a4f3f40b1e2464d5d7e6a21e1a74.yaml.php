<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/davidreckner/source/grav-reckner/user/config/plugins/email.yaml',
    'modified' => 1727984633,
    'size' => 260,
    'data' => [
        'enabled' => true,
        'from' => 'info@reckner.com',
        'from_name' => 'Reckner Facilities',
        'to' => 'info@reckner.com',
        'to_name' => 'Reckner Facilities',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => '127.0.0.1',
                'port' => 2525,
                'encryption' => NULL,
                'user' => 'Reckner Facilities',
                'password' => NULL,
                'auth_mode' => NULL
            ]
        ]
    ]
];
