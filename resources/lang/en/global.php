<?php

return [
    'projects' => [
        'musicbook' => [
            'name' => 'Musicbook',
            'link' => '/musicbook',
            'image' => asset('images').'/musicbook-hero.jpg',
            'description' => 'A fictional social media website for music'
        ],
        'sex-ed' => [
            'name' => 'SEX-ED',
            'link' => '/sex-ed',
            'image' => asset('images').'/sex-ed-hero.jpg',
            'description' => 'A fictional web service to educate teens about sex'
        ],
        'smart-fridge' => [
            'name' => 'Smart Fridge',
            'link' => '/smart-fridge',
            'image' => asset('images').'/smart-fridge-hero.jpg',
            'description' => 'A fictional touchscreen interface for a fridge'
        ],
        'truckladders' => [
            'name' => 'Truckladders',
            'link' => '/truckladders',
            'image' => asset('images').'/truckladders-hero.jpg',
            'description' => 'A marketing website for a new safety product'
        ]
    ],
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
];
