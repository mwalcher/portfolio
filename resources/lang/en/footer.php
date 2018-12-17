<?php

return [
    'id' => 'contact',
    'title' => 'Get in Touch',
    'description' => 'Let me know if you have any questions or if you\'re interested in working together.',
    'form' => [
        'name' => 'contact-form',
        'fields' => [
            __('form.fields.name'),
            __('form.fields.email'),
            __('form.fields.message')
        ]
    ],
    'navigation' => [
        'text' => 'Contact',
        'title' => 'Contact Matthew Walcher',
        'link' => '#contact',
        'icon' => 'fa-envelope'
    ]
];
