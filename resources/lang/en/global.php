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
            'website' => 'https://libro.ca/calculators/mortgage',
            'image' => asset('images').'/libro-hero.jpg',
            'description' => 'A step by step mortgage calculator'
        ],
        'zucora' => [
            'name' => 'Zucora',
            'link' => route('zucora'),
            'website' => 'https://zucorahome.com/',
            'image' => asset('images').'/zucora-hero.jpg',
            'description' => 'An E-Commerce store for a local retailer'
        ],
        'pink-precast' => [
            'name' => 'Pink Precast',
            'link' => route('pink-precast'),
            'website' => 'https://www.pinkprecast.com/',
            'image' => asset('images').'/pink-precast-hero.jpg',
            'description' => 'An informational website for a concrete manufacturer'
        ],
        'mortgage-teacher' => [
            'name' => 'Mortgage Teacher',
            'link' => route('mortgage-teacher'),
            'website' => 'https://mortgageteacher.com/',
            'image' => asset('images').'/mortgage-teacher-hero.jpg',
            'description' => 'An informational website for a mortgage broker'
        ]
    ]
];
