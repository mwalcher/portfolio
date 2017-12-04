<?php

return [
    'title' => __('meta.title').'musicbook',
    'description' => 'A fictional social media website for music. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/musicbook-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.musicbook.image'),
    'navigation' => [
        'home' => [
            'text' => __('projects.navigation.home.text'),
            'title' => __('projects.navigation.home.title'),
            'link' => __('projects.navigation.home.link'),
            'icon' => __('projects.navigation.home.icon')
        ],
        'overview' => [
            'text' => __('projects.navigation.overview.text'),
            'title' => __('projects.navigation.overview.title').__('global.projects.musicbook.name'),
            'link' => __('projects.navigation.overview.link'),
            'icon' => __('projects.navigation.overview.icon')
        ],
        'preview' => [
            'text' => __('projects.navigation.preview.text'),
            'title' => __('projects.navigation.preview.title').__('global.projects.musicbook.name'),
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
        'main-title' => __('global.projects.musicbook.name'),
        'content' => __('global.projects.musicbook.description')
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.musicbook.name')
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
                        'src' => asset('images').'/musicbook-device-1-phone.png',
                        'alt' => 'The Musicbook login page represented on an iPhone'
                    ],
                    'tablet' => [
                        'src' => asset('images').'/musicbook-device-2-tablet.png',
                        'alt' => 'An example of a user\'s playlist page represented on an iPad'
                    ],
                    'laptop' => [
                        'src' => asset('images').'/musicbook-device-3-laptop.png',
                        'alt' => 'The Musicbook music page represented on a Macbook Pro'
                    ],
                    'desktop' => [
                        'src' => asset('images').'/musicbook-device-4-desktop.png',
                        'alt' => 'An example of a user\'s profile page represented on an iMac'
                    ]
                ]
            ],
            'option-list' => [
                'title' => __('projects.main-content.option-list-title'),
                'list' => [
                    'sex-ed' => __('global.projects.sex-ed'),
                    'smart-fridge' => __('global.projects.smart-fridge'),
                    'truckladders' => __('global.projects.truckladders')
                ],
                'toggle' => false
            ]
        ]
    ]
];
