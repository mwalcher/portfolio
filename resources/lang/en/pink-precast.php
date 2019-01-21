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
        'home' => __('projects.navigation.home'),
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
        'contact' => __('projects.navigation.contact')
    ],
    'hero' => [
        'id' => __('projects.hero.id'),
        'main-title' => __('global.projects.pink-precast.name'),
        'content' => __('global.projects.pink-precast.description')
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.pink-precast.name'),
            'content' => [
                '<a class="animated-hover" href="'.__('global.projects.pink-precast.website').'" target="_blank" rel="noopener" title="Pink Precast website">Pink Precast</a> wanted us to update their old website with a fresh new look. They wanted a simple informational website with the ability to add new projects with a content management system (CMS).',
                __('projects.disclaimer.arcane')
            ]
        ],
        'work' => [
            'title' => __('projects.tab-content.work.title'),
            'content' => [
                'I worked on this project with a designer and a back-end developer. The back-end developer setup the content management system (CMS) and I built all the front-end for the website. We used the <a class="animated-hover" href="https://laravel.com/" target="_blank" rel="noopener" title="Laravel website">Laravel</a> framework for this website. I had a lot of fun working on this project because I really liked the design of it.'
            ]
        ]
    ],
    'main-content' => [
        'id' => __('projects.main-content.id'),
        'main-title' => __('projects.main-content.main-title'),
        'components' => [
            'preview-slider' => [
                'list' => [
                    'phone' => [
                        'src' => asset('images').'/pink-precast-device-1-phone.png',
                        'alt' => 'The Pink Precast home page represented on an iPhone'
                    ],
                    'tablet' => [
                        'src' => asset('images').'/pink-precast-device-2-tablet.png',
                        'alt' => 'The Pink Precast contact page represented on an iPad'
                    ],
                    'laptop' => [
                        'src' => asset('images').'/pink-precast-device-3-laptop.png',
                        'alt' => 'A Pink Precast product page features section represented on a Macbook Pro'
                    ],
                    'desktop' => [
                        'src' => asset('images').'/pink-precast-device-4-desktop.png',
                        'alt' => 'A Pink Precast featured project page represented on an iMac'
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
                    'whats-my' => __('global.projects.whats-my'),
                    'zucora' => __('global.projects.zucora')
                ],
                'toggle' => false
            ]
        ]
    ]
];
