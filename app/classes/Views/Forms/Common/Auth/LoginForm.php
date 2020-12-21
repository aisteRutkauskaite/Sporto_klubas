<?php

namespace App\Views\Forms\Common\Auth;

use Core\Views\Form;

class LoginForm extends Form
{
public function __construct()
{
    parent::__construct([
        'fields' => [
            'email' => [
                'label' => 'El. paštas',
                'type' => 'text',
                'validators' => [
                    'validate_field_not_empty',
                    'validate_email',
                    'validate_user_exists'
                ],
                'extra' => [
                    'attr' => [
                        'placeholder' => 'Įveskite el. paštą',
                    ],
                ],
            ],
            'password' => [
                'label' => 'Slaptažodis',
                'type' => 'password',
                'validators' => [
                    'validate_field_not_empty',
                    'validate_password_ok'
                ],
                'extra' => [
                    'attr' => [
                        'placeholder' => 'Įveskite slaptažodį',
                    ],
                ],
            ],
        ],
        'buttons' => [
            'login' => [
                'title' => 'Prisijunkite',
            ],
        ],
        'validators' => [
            ]
    ]);
}
}