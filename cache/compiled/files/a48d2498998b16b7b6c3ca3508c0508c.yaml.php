<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/davidreckner/source/grav-reckner/user/plugins/svg-icons/blueprints.yaml',
    'modified' => 1727984634,
    'size' => 1083,
    'data' => [
        'name' => 'SVG Icons',
        'type' => 'plugin',
        'slug' => 'svg-icons',
        'version' => '2.5.3',
        'premium' => true,
        'description' => 'Various SVG icons and utilities to use them.',
        'icon' => 'diamond',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://getgrav.org/premium/site-toolbox#svg-icons',
        'keywords' => 'grav, premium, svg, icons, heroicons, social, tabler, nextgen-editor',
        'bugs' => 'https://github.com/getgrav/grav-premium-issues/issues?q=label:site-toolbox+label:svg-icons',
        'docs' => 'https://getgrav.org/premium/site-toolbox/docs#svg-icons',
        'license' => 'https://getgrav.org/premium/license',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.30'
            ],
            1 => [
                'name' => 'shortcode-core',
                'version' => '>=4.2.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'custom_icon_path' => [
                    'type' => 'text',
                    'label' => 'Custom Icon Path',
                    'default' => 'theme://images/icons',
                    'validate' => [
                        'type' => 'text',
                        'required' => true
                    ]
                ]
            ]
        ]
    ]
];
