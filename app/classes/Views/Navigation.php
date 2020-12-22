<?php
//
//namespace App\Views;
//
//use App\App;
//use Core\View;
//
//class Navigation extends View
//{
//
//    public function __construct()
//    {
//        parent::__construct($this->generate());
//    }
//
//    public function generate()
//    {
//        $nav = [App::$router::getUrl('index') => 'Titulinis',
//            App::$router::getUrl('feedback') => 'Atsiliepimai'];
//
//        if (App::$session->getUser()) {
//            return $nav + [
//                    App::$router::getUrl('logout') => 'Atsijungti',
//                ];
//        } else {
//            return $nav + [
//                    App::$router::getUrl('register') => 'Registruotis',
//                    App::$router::getUrl('login') => 'Prisijungti',
//                ];
//        }
//    }
//
//    public function render($template_path = ROOT . '/app/templates/nav.php')
//    {
//        return parent::render($template_path);
//    }
//}
namespace App\Views;

use App\App;
use Core\View;

class Navigation extends View
{

    public function __construct()
    {
        parent::__construct($this->generate());
    }

    public function generate()
    {
        $nav = [
            'left' => [
                App::$router::getUrl('index') => 'Titulinis',
                App::$router::getUrl('feedback') => 'Atsiliepimai',
            ]];

        if (App::$session->getUser()) {
            return $nav + [
                    'right' => [
                        App::$router::getUrl('logout') => 'Atsijungti'
                    ]
                ];
        } else {
            return $nav + [
                    'right' => [
                        App::$router::getUrl('register') => 'Registruotis',
                        App::$router::getUrl('login') => 'Prisijungti'
                    ]
                ];
        }
    }

    public function render($template_path = ROOT . '/app/templates/nav.php')
    {
        return parent::render($template_path);
    }
}

