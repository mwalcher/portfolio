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
        'zucora' => [
            'name' => 'Zucora',
            'link' => route('zucora'),
            'website' => 'https://zucorahome.com/',
            'image' => asset('images').'/zucora-hero.jpg',
            'description' => 'An E-Commerce store for a local retailer'
        ]
    ]
];
