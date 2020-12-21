<?php

namespace App\Views\Tables\User;

use App\App;
use Core\Views\Table;



class FeedbackTable extends Table
{
    public function __construct($feedbacks = [])
    {
        parent::__construct([
            'headers' => [
                'Vardas',
                'Atiliepimas',
                'Data',
            ],
            'rows' => $feedbacks
        ]);
    }
}