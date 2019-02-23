<?php

return [
    'fields' => [
        'name' => [
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            'required' => true,
            'autocomplete' => 'name'
        ],
        'email' => [
            'name' => 'email',
            'label' => 'Email',
            'type' => 'email',
            'required' => true,
            'autocomplete' => 'email',
            'disclaimer' => 'I will not use your email for anything other than to respond to your message.'
        ],
        'message' => [
            'name' => 'message',
            'label' => 'Message',
            'type' => 'textarea',
            'required' => true
        ]
    ],
    'actions' => [
        'submit' => 'Send Message'
    ]
];
