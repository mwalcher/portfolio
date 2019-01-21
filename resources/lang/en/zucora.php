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
        'home' => __('projects.navigation.home'),
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
        'contact' => __('projects.navigation.contact')
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
                'Zucora wanted us to create an e-commerce website to showcase their product lines.',
                __('projects.disclaimer.arcane'),
                '<strong>Note:</strong> Zucora has since updated their website, but the <a class="animated-hover" href="'.__('global.projects.zucora.website').'" target="_blank" rel="noopener" title="Zucora website">e-commerce website</a> we built is still accessible.'
            ]
        ],
        'work' => [
            'title' => __('projects.tab-content.work.title'),
            'content' => [
                'I worked on this project with another front-end developer, a designer and two back-end developers. The website was build using the <a class="animated-hover" href="https://laravel.com/" target="_blank" rel="noopener" title="Laravel website">Laravel</a> framework with the <a class="animated-hover" href="https://www.shopify.ca/" target="_blank" rel="noopener" title="Shopify website">Shopify</a> API for the product data. We used <a class="animated-hover" href="https://reactjs.org/" target="_blank" rel="noopener" title="React website">React</a> on the product details page to add the product to the user\'s cart, the header to show how many items are in the cart and the cart page to show changes to the user\'s cart in real time.',
                'I worked on all the React components myself, while also working with the other front-end developer on the components for the website.'
            ]
        ]
    ],
    'main-content' => [
        'id' => __('projects.main-content.id'),
        'main-title' => __('projects.main-content.main-title'),
        'components' => [
            'preview-slider' => [
                'list' => [
                    'desktop' => [
                        'src' => asset('images').'/zucora-device-4-desktop.png',
                        'alt' => 'The Zucora home page represented on an iMac'
                    ],
                    'phone' => [
                        'src' => asset('images').'/zucora-device-1-phone.png',
                        'alt' => 'A list of Zucora products to buy represented on an iPhone'
                    ],
                    'laptop' => [
                        'src' => asset('images').'/zucora-device-3-laptop.png',
                        'alt' => 'A Zucora product details page adding the product to the cart represented on a Macbook Pro'
                    ],
                    'tablet' => [
                        'src' => asset('images').'/zucora-device-2-tablet.png',
                        'alt' => 'The Zucora cart page represented on an iPad'
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
