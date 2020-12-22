<?php

namespace App\Views\Tables\User;


use Core\Views\Table;



class FeedbackTable extends Table
{
    public function __construct($feedback = [])
    {
        parent::__construct([
            'headers' => [
                'ID',
                'Vardas',
                'Atiliepimas',
                'Data',
            ],
            'rows' => $feedback
        ]);
    }
}