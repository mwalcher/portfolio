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
        'content' => __('global.projects.pink-precast.description'),
        'button' => [
            'text' => __('projects.hero.button.text'),
            'title' => __('global.projects.pink-precast.name').__('projects.hero.button.title'),
            'link' => __('projects.hero.button.link')
        ]
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.pink-precast.name'),
            'content' => [
                '<a class="animated-hover" href="'.__('global.projects.pink-precast.website').'" target="_blank" rel="noopener" title="Pink Precast website">Pink Precast</a> wanted us to update their old website with a more modern design. They wanted a simple informational website with the ability to add new projects with a content management system (CMS).',
                __('projects.disclaimer.arcane')
            ]
        ],
        'work' => [
            'title' => __('projects.tab-content.work.title'),
            'content' => [
                'The website was built using the <a class="animated-hover" href="https://laravel.com/" target="_blank" rel="noopener" title="Laravel website">Laravel</a> framework. I worked on this project with a designer and a back-end developer. The back-end developer setup the content management system (CMS) and I built all of the front-end for the website.',
                'I had introduced myself to Laravel during my last year of school and then worked on a Laravel project with <a class="animated-hover" href="https://thearcane.com/" target="_blank" rel="noopener" title="Arcane website">Arcane</a> prior to building this website. I was able to set this project up by applying what I had learned from the other projects. Two of the things I became more comfortable using during this project was Laravel\'s Blade templates and the language files to store content. I built all my Blade files to be dynamic and reserved all content for the language files, so they can be reused on any page. Blade makes it easy to loop through sections of content from the array provided by the language files to prevent me from duplicating markup. The language files helped me organize and centralize content so I didn\'t have to store duplicate content.'
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
                    'zucora' => __('global.projects.zucora'),
                    'whats-my' => __('global.projects.whats-my')
                ],
                'toggle' => false,
                'disabled-text' => __('projects.main-content.option-disabled')
            ]
        ]
    ]
];
