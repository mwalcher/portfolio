<?php

return [
    'navigation' => [
        'home' => [
            'text' => __('global.home.name'),
            'title' => __('global.home.title'),
            'link' => __('global.home.link'),
            'icon' => __('global.home.icon')
        ],
        'overview' => [
            'text' => 'Overview',
            'title' => 'Overview of ',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        'showcase' => [
            'text' => 'Showcase',
            'title' => 'Showcase for ',
            'link' => '#showcase',
            'icon' => 'fa-mobile'
        ],
        'contact' => __('footer.navigation')
    ],
    'disclaimer' => [
        'arcane' => '<strong>Note:</strong> I worked on this project as a member of the <a class="animated-hover" href="https://thearcane.com/" target="_blank" rel="noopener" title="Arcane website">Arcane</a> development team.'
    ],
    'hero' => [
        'id' => 'overview',
        'button' => [
            'text' => 'Explore Project',
            'title' => 'Showcase for ',
            'link' => '#showcase'
        ]
    ],
    'tab-content' => [
        'about' => [
            'title' => 'About '
        ],
        'work' => [
            'title' => 'What I Did'
        ]
    ],
    'main-content' => [
        'id' => 'showcase',
        'main-title' => 'Showcase',
        'showcase-slider-cta' => 'View ',
        'option-list-title' => 'Other Projects',
        'option-disabled' => __('global.disabled-title')
    ]
];
