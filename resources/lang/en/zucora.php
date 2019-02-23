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
        'showcase' => [
            'text' => __('projects.navigation.showcase.text'),
            'title' => __('projects.navigation.showcase.title').__('global.projects.zucora.name'),
            'link' => __('projects.navigation.showcase.link'),
            'icon' => __('projects.navigation.showcase.icon')
        ],
        'contact' => __('projects.navigation.contact')
    ],
    'hero' => [
        'id' => __('projects.hero.id'),
        'main-title' => __('global.projects.zucora.name'),
        'content' => __('global.projects.zucora.description'),
        'button' => [
            'text' => __('projects.hero.button.text'),
            'title' => __('projects.hero.button.title').__('global.projects.zucora.name'),
            'link' => __('projects.hero.button.link')
        ]
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.zucora.name'),
            'content' => [
                'Zucora wanted us to create a fresh new look for their website. The purpose of the website was to inform the user about their brand as well as offer an e-commerce platform to showcase their product lines.',
                '<strong>Note:</strong> Zucora has since updated their website, but the <a class="animated-hover" href="'.__('global.projects.zucora.website').'" target="_blank" rel="noopener" title="Zucora website">e-commerce website</a> we built is still accessible.',
                __('projects.disclaimer.arcane')
            ]
        ],
        'work' => [
            'title' => __('projects.tab-content.work.title'),
            'content' => [
                'I worked on this project with another front-end developer, a designer and two back-end developers. The website was built using the <a class="animated-hover" href="https://laravel.com/" target="_blank" rel="noopener" title="Laravel website">Laravel</a> framework with the <a class="animated-hover" href="https://www.shopify.ca/" target="_blank" rel="noopener" title="Shopify website">Shopify</a> API to manage the product data. We used <a class="animated-hover" href="https://reactjs.org/" target="_blank" rel="noopener" title="React website">React</a> on the product details page to add the product to the user\'s cart, the header to show how many items are in the cart and the cart page to show changes to the user\'s cart in real time. I worked on all the React components myself, while also working with the other front-end developer on the components for rest of the website.',
                'On the product details page I collected the product data from the API and passed it to the React app on the page. Some products have one or two options the user can specify (such as size and length on mattress protectors). I created logic to check if the option selected is in stock and in the case of multiple options I had to check if the specific variant existed with the combined options selected. The quantity selector checked the remaining stock of the selected product and set a max quantity to make sure the user did not try to buy more than was available in stock. When the user added the product to the cart I created a loading state, as well as success and error messages based on the response from the API that animated in below the button to confirm the product was added to the cart or to inform the user there was a problem adding the product to the cart.',
                'On the cart page I loop through all the products stored in the user\'s cart. The user can adjust quantities for each product and when they do their total will be adjusted to account for the change in quantity. The user has the option to remove a product from their cart and if they remove an item the totals as well as the number of products in the cart shown in the header will be adjusted.'
            ]
        ]
    ],
    'main-content' => [
        'id' => __('projects.main-content.id'),
        'main-title' => __('projects.main-content.main-title'),
        'components' => [
            'showcase-slider' => [
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
                    'text' => __('projects.main-content.showcase-slider-cta').__('global.projects.zucora.name'),
                    'title' => __('projects.main-content.showcase-slider-cta').__('global.projects.zucora.name'),
                    'link' => __('global.projects.zucora.website')
                ],
            ],
            'option-list' => [
                'title' => __('projects.main-content.option-list-title'),
                'list' => [
                    'libro' => __('global.projects.libro'),
                    'pink-precast' => __('global.projects.pink-precast'),
                    'whats-my' => __('global.projects.whats-my')
                ],
                'toggle' => false,
                'disabled-text' => __('projects.main-content.option-disabled')
            ]
        ]
    ]
];
