<?php

return [
    'title' => __('meta.title'),
    'description' => __('meta.description'),
    'meta-image' => [
        'src' => __('meta.image.src'),
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('meta.background'),
    'navigation' => [
        'about' => [
            'text' => 'About',
            'title' => 'About Matthew Walcher',
            'link' => '#about',
            'icon' => 'fa-user'
        ],
        'work' => [
            'text' => 'Work',
            'title' => 'Matthew Walcher\'s Work',
            'link' => '#work',
            'icon' => 'fa-desktop'
        ],
        'contact' => [
            'text' => __('footer.navigation.text'),
            'title' => __('footer.navigation.title'),
            'link' => __('footer.navigation.link'),
            'icon' => __('footer.navigation.icon')
        ]
    ],
    'hero' => [
        'id' => 'about',
        'main-title' => 'Matthew Walcher',
        'sub-title' => 'Front-end Web Developer',
        'content' => 'I am a detail oriented problem solver who is determined to find a solution even if it does not come easily.'
    ],
    'tab-content' => [
        'tools' => [
            'title' => 'What I Use',
            'list' => [
                'git' => [
                    'label' => 'Git',
                    'link' => 'https://git-scm.com/'
                ],
                'laravel' => [
                    'label' => 'Laravel',
                    'link' => 'https://laravel.com/'
                ],
                'react' => [
                    'label' => 'React',
                    'link' => 'https://reactjs.org/'
                ],
                'vue-js' => [
                    'label' => 'Vue.js',
                    'link' => 'https://vuejs.org/'
                ]
            ]
        ],
        'about' => [
            'title' => 'About Me',
            'content' => [
                'Welcome! I appreciate your interest, so allow me to introduce myself. I am Matthew Walcher and I am currently working as an intermediate front-end web developer at <a class="animated-hover" href="https://thearcane.com/" target="_blank" rel="noopener" title="Arcane website">Arcane</a>.',
                'During my time at Arcane I have earned my reputation for quality because of my strong work ethic. When I am given a task, I start by thinking through the problem first before I start to build to ensure I have the right solution the first time. I love to collaborate and bounce ideas off my peers when working through a problem because I know I can benefit from other perspectives on how to solve the problem.',
                'I stumbled into my passion for front-end web development through my love for art and design. Art was always my favourite subject when I was growing up, even though I eventually realized I wasn\'t a naturally gifted artist. In my early to mid teens I began to dabble in photography and photoshop, which lead to an interest in graphic design. I taught myself basic HTML and CSS because I wanted to design my own custom layouts on Neopets, a popular virtual pet site. After high school, I decided to study graphic design and web development as part of a collaborative diploma and degree program between Western University and Fanshawe College. When I was going into the program I wanted to be a graphic designer, but quickly realized my natural talent and passion was in web development. I excelled in our coding courses and was often helping my peers with the assignments (and they would help me with my designs).'
            ]
        ]
    ],
    'main-content' => [
        'id' => 'work',
        'main-title' => 'Projects',
        'components' => [
            'featured-content' => [
                'list' => __('global.projects'),
                'cta' => 'View Project'
            ]
        ]
    ]
];
