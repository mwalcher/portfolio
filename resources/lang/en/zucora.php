<?php

return [
    'title' => __('global.projects.zucora.name').' / '.__('meta.title'),
    'description' => __('global.projects.zucora.description'),
    'meta-image' => [
        'src' => asset('images').'/zucora-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.zucora.image'),
    'navigation' => [
        'home' => [
            'text' => __('projects.navigation.home.text'),
            'title' => __('projects.navigation.home.title'),
            'link' => __('projects.navigation.home.link'),
            'icon' => __('projects.navigation.home.icon')
        ],
        'overview' => [
            'text' => __('projects.navigation.overview.text'),
            'title' => __('projects.navigation.overview.title').__('global.projects.zucora.name'),
            'link' => __('projects.navigation.overview.link'),
            'icon' => __('projects.navigation.overview.icon')
        ],
        'preview' => [
            'text' => __('projects.navigation.preview.text'),
            'title' => __('projects.navigation.preview.title').__('global.projects.zucora.name'),
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
        'main-title' => __('global.projects.zucora.name'),
        'content' => __('global.projects.zucora.description')
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.zucora.name'),
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
                    'text' => __('projects.main-content.preview-slider-cta').__('global.projects.zucora.name'),
                    'title' => __('projects.main-content.preview-slider-cta').__('global.projects.zucora.name'),
                    'link' => __('global.projects.zucora.website')
                ],
            ],
            'option-list' => [
                'title' => __('projects.main-content.option-list-title'),
                'list' => [
                    'libro' => __('global.projects.libro'),
                    'whats-my' => __('global.projects.whats-my'),
                    'pink-precast' => __('global.projects.pink-precast')
                ],
                'toggle' => false
            ]
        ]
    ]
];
