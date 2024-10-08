<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/davidreckner/source/grav-reckner/user/plugins/license-manager/blueprints.yaml',
    'modified' => 1727984634,
    'size' => 713,
    'data' => [
        'name' => 'License Manager',
        'slug' => 'license-manager',
        'type' => 'plugin',
        'version' => '1.0.2',
        'description' => 'Allow easy management of Grav Premium licenses',
        'icon' => 'key',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-license-manager',
        'keywords' => 'grav, plugin, theme, license, manager, premium',
        'bugs' => 'https://github.com/getgrav/grav-plugin-license-manager/issues',
        'docs' => 'https://github.com/getgrav/grav-plugin-license-manager/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
