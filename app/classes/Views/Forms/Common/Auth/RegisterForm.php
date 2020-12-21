<?php

namespace App\Views\Forms\Common\Auth;

use Core\Views\Form;

class RegisterForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'fields' => [
                'email' => [
                    'label' => 'EMAIL',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_email',
                        'validate_user_unique',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter email',
                        ]
                    ]
                ],
                'user_name' => [
                    'label' => 'NAME',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your full name',
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'PASSWORD',
                    'type' => 'password',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter password',
                         ]
                    ]
                ],
                'password_repeat' => [
                    'label' => 'PASSWORD REPEAT',
                    'type' => 'password',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Repeat password',
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'register' => [
                    'title' => 'REGISTER',
                ]
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ]
            ]
        ]
    );

    }
}