<?php


namespace App\Controllers\Common;


use App\App;
use App\Views\BasePage;
use App\Views\Forms\User\Feedback\FeedbackCreateForm;
use App\Views\Tables\User\FeedbackTable;
use Core\View;
use Core\Views\Link;

class FeedbackController
{
    protected BasePage $page;

    public function __construct()
    {
        $this->page = new BasePage([
            'title' => 'Feedback',
            'js' => ['/media/js/user/feedback.js']
        ]);
    }

    public function index(): ?string
    {
        $user = App::$session->getUser();

        if ($user) {
            $forms = [
                'create' => (new FeedbackCreateForm())->render(),
            ];
            $text = 'Sportas sveikata';
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
                    'text' => 'Register'
                ]))->render()
            ];
        }

        $table = new FeedbackTable();

        $content = (new View([
            'title' => 'Atsiliepimai:',
            'table' => $table->render(),
            'forms' => $forms ?? [],
            'message' => $text?? [],
            'links' => $links ?? []
        ]))->render(ROOT . '/app/templates/content/feedback.tpl.php');

        $this->page->setContent($content);
        return $this->page->render();
    }
}