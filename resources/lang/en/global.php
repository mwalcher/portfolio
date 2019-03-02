<?php

return [
    'home' => [
        'name' => 'Home',
        'text' => 'Back to Home',
        'title' => 'Homepage',
        'link' => route('home'),
        'icon' => 'hidden'
    ],
    'email' => [
        'text' => 'Email Me',
        'title' => 'Email Matthew Walcher',
        'link' => 'mailto:matt@mwalcher.com'
    ],
    'contact-links' => [
        'github' => [
            'text' => 'Github',
            'title' => 'Matthew Walcher on Github',
            'link' => 'https://github.com/mwalcher',
            'icon' => 'fa-github'
        ],
        'linkedin' => [
            'text' => 'LinkedIn',
            'title' => 'Matthew Walcher on LinkedIn',
            'link' => 'https://www.linkedin.com/in/mwalcher/',
            'icon' => 'fa-linkedin'
        ],
        'resume' => [
            'text' => 'Resume',
            'title' => 'Matthew Walcher\'s Resume',
            'link' => __('meta.image.src'),
            'icon' => 'fa-file-text',
            'disabled' => true
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
        'zucora' => [
            'name' => 'Zucora',
            'link' => route('zucora'),
            'website' => 'http://prod-webstore-v00-1032646173.us-east-1.elb.amazonaws.com/',
            'image' => asset('images').'/zucora-hero.jpg',
            'description' => 'An e-commerce store for a local retailer'
        ],
        'pink-precast' => [
            'name' => 'Pink Precast',
            'link' => route('pink-precast'),
            'website' => 'https://www.pinkprecast.com/',
            'image' => asset('images').'/pink-precast-hero.jpg',
            'description' => 'An informational website for a concrete manufacturer'
        ],
        'whats-my' => [
            'name' => 'WhatsMy',
            'link' => route('home'),
            'website' => 'https://mwalcher.github.io/',
            'image' => asset('images').'/whats-my-hero.jpg',
            'description' => 'A promotional website to introduce a product',
            'disabled' => true
        ]
    ],
    'disabled-title' => 'Coming Soon'
];
