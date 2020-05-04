<?php

return [
    'title' => __('meta.title'),
    'description' => __('meta.description'),
    'meta-image' => __('meta.image'),
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
        'contact' => __('footer.navigation')
    ],
    'hero' => [
        'id' => 'about',
        'main-title' => 'Matthew Walcher',
        'sub-title' => 'Front-end Web Developer',
        'content' => 'Experienced and passionate about front-end web development. I am a detail-oriented problem solver with&nbsp;an&nbsp;eye&nbsp;for&nbsp;design.',
        'button' => [
            'text' => 'Get in touch',
            'title' => __('footer.navigation.title'),
            'link' => __('footer.navigation.link')
        ]
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
                'Welcome! I appreciate your interest, so allow me to introduce myself, I am Matthew Walcher and I am working as an intermediate front-end web developer at <a class="animated-hover" href="https://thearcane.com/" target="_blank" rel="noopener" title="Arcane website">Arcane</a>. Please enjoy this website that I designed to showcase my experience in front-end web development.',
                'At Arcane I have a reputation for the highest quality product because of my strong work ethic and attention to detail. From the beginning of a project I think through the desired outcome first before I start to build to ensure I have the optimal solution the first time. I love to collaborate and bounce ideas off my peers when working through tasks because I know I can benefit from other perspectives on how to create the best products for our team and clients.',
                'I stumbled into my passion for front-end web development through my love for art and design. Art was always my favourite subject and in my teens I began to dabble in photography and photoshop, which lead to an interest in graphic design. I taught myself basic HTML and CSS because I wanted to design my own custom layouts on Neopets, a popular virtual pets site. I went on to study graphic design and web development as part of a collaborative diploma and degree program between Western University and Fanshawe College. Going into the program I wanted to be a graphic designer, but quickly realized my natural talent and passion was in web development. I excelled in our coding courses and was often helping my peers with the assignments (and they would give me new ideas for my designs).',
                'I hope you enjoy the examples of my front-end in my portfolio plus the design of this website. I enjoyed designing this website because I get to practice design and highlight some of my proudest front-end achievements. I would love to hear what you think, and talk to you more about web development. You can contact me through the <a class="animated-hover" href="'.__('footer.navigation.link').'" title="'.__('footer.navigation.title').'">form</a> below.'
            ]
        ]
    ],
    'main-content' => [
        'id' => 'work',
        'main-title' => 'Projects',
        'components' => [
            'featured-content' => [
                'list' => __('global.projects'),
                'cta' => 'View Project',
                'cta-disabled' => __('global.disabled-title')
            ]
        ]
    ]
];
