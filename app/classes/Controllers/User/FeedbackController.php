<?php

namespace App\Controllers\User;

use App\App;
use App\Controllers\Base\UserController;
use App\Views\BasePage;
use App\Controllers\User\API\FeedbacksApiController;
use App\Views\Forms\Admin\Order\OrderUpdateForm;
use App\Views\Forms\User\Feedback\FeedbackCreateForm;
use App\Views\Tables\User\FeedbackTable;
use Core\View;
use Core\Views\Link;

class FeedbackController extends UserController
{
    protected BasePage $page;

    public function __construct()
    {
        parent::__construct();
        $this->page = new BasePage([
            'title' => 'Feedback',
            'js' => ['/media/js/user/feedback.js']
        ]);
    }

    public function index(): ?string
    {
        $user = App::$session->getUser();

        if ($user) {
            $form = [
                'create' => (new FeedbackCreateForm())->render(),
            ];

            $links = [
                'register' => (new Link([
                    'url' => App::$router::getUrl('logout'),
                    'text' => 'Logout'
                ]))->render()
            ];
        } else {
            $text = 'Jei nori parašyti komentarą. prisijunk :)';
            $links = [
                'register' => (new Link([
                    'url' => App::$router::getUrl('register'),
                    'text' => 'Registracija'
                ]))->render()
            ];
        }

        $table = new FeedbackTable();

        $content = (new View([
            'title' => 'Atsiliepimai:',
            'table' => $table->render(),
            'forms' => $form ?? [],
            'message' => $text ?? [],
            'links' => $links ?? []
        ]))->render(ROOT . '/app/templates/content/feedback.tpl.php');

        $this->page->setContent($content);

        return $this->page->render();
    }
}

