<?php

return [
    'title' => __('global.projects.pink-precast.name').' / '.__('meta.title'),
    'description' => __('global.projects.pink-precast.description'),
    'meta-image' => [
        'src' => asset('images').'/pink-precast-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.pink-precast.image'),
    'navigation' => [
        'home' => [
            'text' => __('projects.navigation.home.text'),
            'title' => __('projects.navigation.home.title'),
            'link' => __('projects.navigation.home.link'),
            'icon' => __('projects.navigation.home.icon')
        ],
        'overview' => [
            'text' => __('projects.navigation.overview.text'),
            'title' => __('projects.navigation.overview.title').__('global.projects.pink-precast.name'),
            'link' => __('projects.navigation.overview.link'),
            'icon' => __('projects.navigation.overview.icon')
        ],
        'preview' => [
            'text' => __('projects.navigation.preview.text'),
            'title' => __('projects.navigation.preview.title').__('global.projects.pink-precast.name'),
            'link' => __('projects.navigation.preview.link'),
            'icon' => __('projects.navigation.preview.icon')
        ],
        'contact' => [
            'text' => __('projects.navigation.contact.text'),
            'title' => __('projects.navigation.contact.title'),
            'link' => __('projects.navigation.contact.link'),
            'icon' => __('projects.navigation.contact.icon')
        ]
    ],
    'hero' => [
        'id' => __('projects.hero.id'),
        'main-title' => __('global.projects.pink-precast.name'),
        'content' => __('global.projects.pink-precast.description')
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.pink-precast.name')
        ],
        'work' => [
            'title' => __('projects.tab-content.work.title')
        ]
    ],
    'main-content' => [
        'id' => __('projects.main-content.id'),
        'main-title' => __('projects.main-content.main-title'),
        'components' => [
            'preview-slider' => [
                'list' => [
                    'phone' => [
                        'src' => asset('images').'/zucora-device-1-phone.png',
                        'alt' => 'The zucora login page represented on an iPhone'
                    ],
                    'tablet' => [
                        'src' => asset('images').'/zucora-device-2-tablet.png',
                        'alt' => 'An example of a user\'s playlist page represented on an iPad'
                    ],
                    'laptop' => [
                        'src' => asset('images').'/zucora-device-3-laptop.png',
                        'alt' => 'The zucora music page represented on a Macbook Pro'
                    ],
                    'desktop' => [
                        'src' => asset('images').'/zucora-device-4-desktop.png',
                        'alt' => 'An example of a user\'s profile page represented on an iMac'
                    ]
                ],
                'cta' => [
                    'text' => __('projects.main-content.preview-slider-cta').__('global.projects.pink-precast.name'),
                    'title' => __('projects.main-content.preview-slider-cta').__('global.projects.pink-precast.name'),
                    'link' => __('global.projects.pink-precast.website')
                ],
            ],
            'option-list' => [
                'title' => __('projects.main-content.option-list-title'),
                'list' => [
                    'libro' => __('global.projects.libro'),
                    'zucora' => __('global.projects.zucora'),
                    'mortgage-teacher' => __('global.projects.mortgage-teacher')
                ],
                'toggle' => false
            ]
        ]
    ]
];
