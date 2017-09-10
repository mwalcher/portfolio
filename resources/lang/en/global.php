<?php

return [
    'home' => [
        'text' => 'Back to Home',
        'title' => 'Homepage',
        'link' => route('home')
    ],
    'contact-links' => [
        'linkedin' => [
            'text' => 'LinkedIn',
            'title' => 'Matthew Walcher on LinkedIn',
            'link' => 'https://www.linkedin.com/in/mwalcher/',
            'icon' => 'fa-linkedin'
        ],
        'github' => [
            'text' => 'Github',
            'title' => 'Matthew Walcher on Github',
            'link' => 'https://github.com/mwalcher',
            'icon' => 'fa-github'
        ],
        'resume' => [
            'text' => 'Resume',
            'title' => 'Matthew Walcher\'s Resume',
            'link' => asset('images').'/mwalcher-resume.pdf',
            'icon' => 'fa-file-text'
        ]
    ],
    'projects' => [
        'musicbook' => [
            'name' => __('musicbook.hero.main-title'),
            'link' => route('musicbook'),
            'image' => __('musicbook.background'),
            'description' => __('musicbook.hero.content')
        ],
        'sex-ed' => [
            'name' => __('sex-ed.hero.main-title'),
            'link' => route('sex-ed'),
            'image' => __('sex-ed.background'),
            'description' => __('sex-ed.hero.content')
        ],
        'smart-fridge' => [
            'name' => __('smart-fridge.hero.main-title'),
            'link' => route('smart-fridge'),
            'image' => __('smart-fridge.background'),
            'description' => __('smart-fridge.hero.content')
        ],
        'truckladders' => [
            'name' => __('truckladders.hero.main-title'),
            'link' => route('truckladders'),
            'image' => __('truckladders.background'),
            'description' => __('truckladders.hero.content')
        ]
    ]
];
