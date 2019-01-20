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
        'preview' => [
            'text' => 'Preview',
            'title' => 'Preview of ',
            'link' => '#preview',
            'icon' => 'fa-mobile'
        ],
        'contact' => __('footer.navigation')
    ],
    'disclaimer' => [
        'arcane' => '<strong>Note:</strong> I worked on this project as a member of the <a class="animated-hover" href="https://thearcane.com/" target="_blank" rel="noopener" title="Arcane website">Arcane</a> Development team.',
        'whatsmy' => '<strong>Note:</strong> I worked on this project with <a class="animated-hover" href="http://kristianavellucci.com/" target="_blank" rel="noopener" title="Kristiana\'s website">Kristiana</a> for her client <a class="animated-hover" href="http://mobials.com/" target="_blank" rel="noopener" title="Mobials website">Mobials</a>.'
    ],
    'hero' => [
        'id' => 'overview'
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
        'id' => 'preview',
        'main-title' => 'Preview',
        'preview-slider-cta' => 'View ',
        'option-list-title' => 'Other Projects'
    ]
];
