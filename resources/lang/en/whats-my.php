<?php

return [
    'title' => __('global.projects.whats-my.name').' / '.__('meta.title'),
    'description' => __('global.projects.whats-my.description'),
    'meta-image' => [
        'src' => asset('images').'/whats-my-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.whats-my.image'),
    'navigation' => [
        'home' => [
            'text' => __('projects.navigation.home.text'),
            'title' => __('projects.navigation.home.title'),
            'link' => __('projects.navigation.home.link'),
            'icon' => __('projects.navigation.home.icon')
        ],
        'overview' => [
            'text' => __('projects.navigation.overview.text'),
            'title' => __('projects.navigation.overview.title').__('global.projects.whats-my.name'),
            'link' => __('projects.navigation.overview.link'),
            'icon' => __('projects.navigation.overview.icon')
        ],
        'preview' => [
            'text' => __('projects.navigation.preview.text'),
            'title' => __('projects.navigation.preview.title').__('global.projects.whats-my.name'),
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
        'main-title' => __('global.projects.whats-my.name'),
        'content' => __('global.projects.whats-my.description')
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.whats-my.name'),
            'content' => [
                'This is test content with a <a href="#" class="animated-hover" title="link">link</a>.'
            ]
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
                        'src' => asset('images').'/whats-my-device-1-phone.png',
                        'alt' => 'Home page "Use Cases" section represented on an iPhone'
                    ],
                    'tablet' => [
                        'src' => asset('images').'/whats-my-device-2-tablet.png',
                        'alt' => 'How it works page "What you must do" section represented on an iPad'
                    ],
                    'laptop' => [
                        'src' => asset('images').'/whats-my-device-3-laptop.png',
                        'alt' => 'Contact page represented on a Macbook Pro'
                    ],
                    'desktop' => [
                        'src' => asset('images').'/whats-my-device-4-desktop.png',
                        'alt' => 'About us "The Leadership Team" section represented on an iMac'
                    ]
                ],
                'cta' => [
                    'text' => __('projects.main-content.preview-slider-cta').__('global.projects.whats-my.name'),
                    'title' => __('projects.main-content.preview-slider-cta').__('global.projects.whats-my.name'),
                    'link' => __('global.projects.whats-my.website')
                ],
            ],
            'option-list' => [
                'title' => __('projects.main-content.option-list-title'),
                'list' => [
                    'libro' => __('global.projects.libro'),
                    'zucora' => __('global.projects.zucora'),
                    'pink-precast' => __('global.projects.pink-precast')
                ],
                'toggle' => false
            ]
        ]
    ]
];
