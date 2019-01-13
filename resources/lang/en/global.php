<?php

return [
    'home' => [
        'name' => 'Home',
        'text' => 'Back to Home',
        'title' => 'Homepage',
        'link' => route('home')
    ],
    'email' => [
        'text' => 'Email Me',
        'title' => 'Email Matthew Walcher',
        'link' => 'mailto:matt@mwalcher.com'
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
        'libro' => [
            'name' => 'Libro Calculators',
            'link' => route('libro'),
            'website' => 'https://libro.ca/calculators/',
            'image' => asset('images').'/libro-hero.jpg',
            'description' => 'Step by step financial calculators'
        ],
        'whats-my' => [
            'name' => 'WhatsMy',
            'link' => route('whats-my'),
            'website' => 'https://mwalcher.github.io/',
            'image' => asset('images').'/whats-my-hero.jpg',
            'description' => 'A fun website to introduce a new product'
        ],
        'zucora' => [
            'name' => 'Zucora',
            'link' => route('zucora'),
            'website' => 'https://zucorahome.com/',
            'image' => asset('images').'/zucora-hero.jpg',
            'description' => 'An e-commerce store for a local retailer'
        ],
        'pink-precast' => [
            'name' => 'Pink Precast',
            'link' => route('pink-precast'),
            'website' => 'https://www.pinkprecast.com/',
            'image' => asset('images').'/pink-precast-hero.jpg',
            'description' => 'An informational website for a concrete manufacturer'
        ]
    ]
];
