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
            'autocomplete' => 'email'
        ],
        'message' => [
            'name' => 'message',
            'label' => 'Message',
            'type' => 'textarea',
            'required' => true,
            'autocomplete' => false
        ]
    ],
    'actions' => [
        'submit' => 'Send Message'
    ]
];
