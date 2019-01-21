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
        'home' => __('projects.navigation.home'),
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
        'contact' => __('projects.navigation.contact')
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
                'The <a class="animated-hover" href="https://libro.ca/" target="_blank" rel="noopener" title="Libro Credit Union website">Libro Credit Union</a> wanted us to create a series of financial calculators to help potential customers better understand their finances while also giving them the opportunity to see what Libro has to offer. The goal for these calculators was to break down intimidating financial unknowns into manageable steps. The calculators are structured to ask the user one question at a time, while educating them about financial jargon and providing tips to help coach the user through financial decisions.',
                'Right now there is a <a class="animated-hover" href="https://libro.ca/calculators/mortgage" target="_blank" rel="noopener" title="Libro\'s Mortgage Calculator">Mortgage Calculator</a> and a <a class="animated-hover" href="https://libro.ca/calculators/budget-planner" target="_blank" rel="noopener" title="Libro\'s Budget Planner">Budget Planner</a> with plans for more calculators to be introduced into the series later.',
                __('projects.disclaimer.arcane')
            ]
        ],
        'work' => [
            'title' => __('projects.tab-content.work.title'),
            'content' => [
                'I was the only front-end developer on this project and I worked with a designer, an intermediate back-end developer and I had the support of one of the senior back-end developers. The intermediate back-end developer set up API routes for me to access and pass data to. The senior back-end developer helped me build the scaffold for the calculators. The calculators are built in <a class="animated-hover" href="https://reactjs.org/" target="_blank" rel="noopener" title="React website">React</a> using the <a class="animated-hover" href="https://facebook.github.io/create-react-app/" target="_blank" rel="noopener" title="Create React App website">Create React App</a> framework from Facebook.',
                'While building the scaffold for the calculators our goal was for the components to be dynamic and scalable so that it would be easy to set up new calculators. We did this by setting up configuration files for each calculator that would set up each step of the calculator. The config is where we could define the core set up of each page: the route, the content container, and any adjustments from the default behaviour of the progress bar and pagination on the page. All of the components were built to be generic and customizable because they couldn\'t be too specific to one calculator, they needed to be able to work for any calculator.'
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
