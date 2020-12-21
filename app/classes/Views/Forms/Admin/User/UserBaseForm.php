<?php


namespace App\Views\Forms\Admin\User;


use Core\Views\Form;

class UserBaseForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'fields' => [
                'role' => [
                    'type' => 'select',
                    'options' => [
                        'user' => 'User',
                        'admin' => 'Admin',
                    ],
                    'validators' => [
                        'validate_select',
                    ],

                ]
            ]
        ]);
    }
}