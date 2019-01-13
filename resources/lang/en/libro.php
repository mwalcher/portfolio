<?php

return [
    'title' => __('global.projects.libro.name').' / '.__('meta.title'),
    'description' => __('global.projects.libro.description'),
    'meta-image' => [
        'src' => asset('images').'/libro-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.libro.image'),
    'navigation' => [
        'home' => [
            'text' => __('projects.navigation.home.text'),
            'title' => __('projects.navigation.home.title'),
            'link' => __('projects.navigation.home.link'),
            'icon' => __('projects.navigation.home.icon')
        ],
        'overview' => [
            'text' => __('projects.navigation.overview.text'),
            'title' => __('projects.navigation.overview.title').__('global.projects.libro.name'),
            'link' => __('projects.navigation.overview.link'),
            'icon' => __('projects.navigation.overview.icon')
        ],
        'preview' => [
            'text' => __('projects.navigation.preview.text'),
            'title' => __('projects.navigation.preview.title').__('global.projects.libro.name'),
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
        'main-title' => __('global.projects.libro.name'),
        'content' => __('global.projects.libro.description')
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.libro.name'),
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
                        'src' => asset('images').'/libro-device-1-phone.png',
                        'alt' => 'Libro Mortgage Calculator introduction page represented on an iPhone'
                    ],
                    'tablet' => [
                        'src' => asset('images').'/libro-device-2-tablet.png',
                        'alt' => 'Libro Mortgage Calculator step 1 page represented on an iPad'
                    ],
                    'laptop' => [
                        'src' => asset('images').'/libro-device-3-laptop.png',
                        'alt' => 'Libro Mortgage Calculator summary page represented on a Macbook Pro'
                    ],
                    'desktop' => [
                        'src' => asset('images').'/libro-device-4-desktop.png',
                        'alt' => 'Libro Mortgage Calculator contact form represented on an iMac'
                    ]
                ],
                'cta' => [
                    'text' => __('projects.main-content.preview-slider-cta').__('global.projects.libro.name'),
                    'title' => __('projects.main-content.preview-slider-cta').__('global.projects.libro.name'),
                    'link' => __('global.projects.libro.website')
                ],
            ],
            'option-list' => [
                'title' => __('projects.main-content.option-list-title'),
                'list' => [
                    'whats-my' => __('global.projects.whats-my'),
                    'zucora' => __('global.projects.zucora'),
                    'pink-precast' => __('global.projects.pink-precast')
                ],
                'toggle' => false
            ]
        ]
    ]
];
