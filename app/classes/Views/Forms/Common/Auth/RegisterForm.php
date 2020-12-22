<?php

namespace App\Views\Forms\Common\Auth;

use Core\Views\Form;

class RegisterForm extends Form
{
    public function __construct()
    {
        parent::__construct([
                'fields' => [
                    'name' => [
                        'label' => 'Vardas',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_symbols_and_numbers',
                            'validate_number_of_symbols' => [
                                'max' => 40
                            ]
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Įrašykite savo vardą',
                            ]
                        ]
                    ],
                    'last_name' => [
                        'label' => 'Pavardė',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_symbols_and_numbers',
                            'validate_number_of_symbols' => [
                                'max' => 40
                            ]
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Įrašykite savo pavardę',
                            ]
                        ]
                    ],
                    'email' => [
                        'label' => 'El. paštas',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_email',
                            'validate_user_unique',
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Įrašykite savo el.paštą',
                            ]
                        ]
                    ],
                    'password' => [
                        'label' => 'Slaptažodis',
                        'type' => 'password',
                        'validators' => [
                            'validate_field_not_empty',
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Įveskite slaptažodį',
                            ]
                        ]
                    ],
                    'telephone_number' => [
                        'label' => 'Telefono numeris',
                        'type' => 'tel',
                        'validators' => [
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Įveskite savo telefono numerį',
                            ]
                        ]
                    ],
                    'home_adress' => [
                        'label' => 'Namų adresas',
                        'type' => 'text',
                        'validators' => [
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Įveskite savo namų adresą',
                            ]
                        ]
                    ],
                ],
                'buttons' => [
                    'register' => [
                        'title' => 'Registracija',
                    ]
                ],
                'validators' => [
                    'validate_fields_match' => [
                    ]
                ]
            ]
        );
    }
}