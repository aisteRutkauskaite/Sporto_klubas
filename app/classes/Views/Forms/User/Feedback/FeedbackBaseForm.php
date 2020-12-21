<?php


namespace App\Views\Forms\User\Feedback;


use Core\Views\Form;

class FeedbackBaseForm extends Form
{
    public function __construct() {
        parent::__construct([
            'fields' => [
                'feedback' => [
                    'label' => 'Atsiliepimas',
                    'type' => 'textarea',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_number_of_symbols' => [
                            'max' => 500
                        ]
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įrašykite savo atsiliepimą',
                        ],
                    ],
                ],
            ],
            // No buttons since they will be defined in Extends
        ]);
    }
}