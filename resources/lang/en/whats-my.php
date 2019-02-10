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
        'home' => __('projects.navigation.home'),
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
        'contact' => __('projects.navigation.contact')
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
                '<a class="animated-hover" href="https://mobials.com/" target="_blank" rel="noopener" title="Mobials website">Mobials</a> wanted a promotional website to introduce their new product, WhatsMy. I was brought onto the project to do the front-end for the preliminary prototype of the website.',
                'The idea behind WhatsMy is to inform users about the value of their vehicle(s) and real estate. The current problem that WhatsMy has identified is the lack of transparency in both the shopping process and ownership of a person’s two largest assets: their home and vehicle. It seeks to help users keep track of the value of these assets as they appreciate or depreciate over time.'
            ]
        ],
        'work' => [
            'title' => __('projects.tab-content.work.title'),
            'content' => [
                'The <a class="animated-hover" href="https://mobials.com/" target="_blank" rel="noopener" title="Mobials website">Mobials</a> development team wanted me to use <a class="animated-hover" href="https://vuejs.org/" target="_blank" rel="noopener" title="Vue.js">Vue.js</a> for the project, which was new to me. I did some research on Vue, reviewed the documentation and followed a few <a class="animated-hover" href="https://www.vuemastery.com/" target="_blank" rel="noopener" title="Vue Mastery website">Vue Mastery</a> tutorials before setting up the base project.',
                'While setting up the base project I reviewed the styleguide and the designs to compile a list of common styles and components in the designs that I knew I would be reusing. I built out the common design elements first so I could just drop them in while I was building the page specific components. I organized all the page sections into separate components to keep components simple and reusable. The design pushed me to elevate the animations for user interactions, like button hover states and opening the navigation, to enhance the user experience.',
                'The main reason we decided to use a single-page application (Vue.js) for the project was because we wanted to create a transition when the user navigated to a new page. The page transitions were a welcome challenge. I quickly discovered that Vue has a built in transition component that would handle a lot of the logic I thought I was going to have to do to make the page transitions seamless. The transition component was a bit of a learning curve for me to get use to because I had not used anything like it before. At first I did not understand how to set it up with my pages, but after some troubleshooting I created my first page transition. Once I got a simple element to animate across the screen to introduce the next page I was able to make it a bit more complicated and incorporate the 3 coloured gradient lines from the logo to stagger across the screen.',
                '<a class="animated-hover" href="http://kristianavellucci.com/" target="_blank" rel="noopener" title="Kristiana\'s website">Kristiana</a> was my point of contact on the project as she took on the project management role as well as being the designer for the project. She continued the front-end after I completed the base prototype of the website.'
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
                        'src' => asset('images').'/whats-my-device-1-phone.png',
                        'alt' => 'The WhatsMy home page Use Cases section represented on an iPhone'
                    ],
                    'tablet' => [
                        'src' => asset('images').'/whats-my-device-2-tablet.png',
                        'alt' => 'The WhatsMy how it works page What you must do section represented on an iPad'
                    ],
                    'laptop' => [
                        'src' => asset('images').'/whats-my-device-3-laptop.png',
                        'alt' => 'The WhatsMy contact page represented on a Macbook Pro'
                    ],
                    'desktop' => [
                        'src' => asset('images').'/whats-my-device-4-desktop.png',
                        'alt' => 'The WhatsMy about us page Leadership Team section represented on an iMac'
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
