<?php


namespace App\Controllers\User\API;

use App\App;
use App\Controllers\Base\UserController;
use App\Views\BasePage;
use App\Views\Forms\Admin\Order\OrderCreateForm;
use App\Views\Forms\Admin\Pizza\PizzaCreateForm;
use App\Views\Forms\User\Feedback\FeedbackCreateForm;
use Core\Api\Response;

class FeedbacksApiController extends UserController
{
    public function index(): string
    {
        $response = new Response();

        $user = App::$session->getUser();

        $feedbacks = App::$db->getRowsWhere('feedbacks' ?? null, ['email' => $user['email']]);
        foreach ($feedbacks as $id => &$row) {


            $row = [

                'Vardas' => $user['name'],
                'Atsiliepimas' => $row['text'],
                'data' => $row['date'],
            ];
        }


        // Setting "what" to json-encode
        $response->setData($feedbacks);

        // Returns json-encoded response

        return $response->toJson();
    }

    public function create(): string
    {
        // This is a helper class to make sure
        // we use the same API json response structure
        $response = new Response();
        $id = $_POST['id'] ?? null;

        $user = App::$session->getUser();

        $form = new FeedbackCreateForm();

        if ($form->validate()) {
            $feedback = $form->values();
            $date = date("Y/m/d");
            $feedback['id'] = App::$db->insertRow('feedbacks', $form->values(), $date);
            $response->setData($feedback);
        } else {
            $response->setErrors($form->getErrors());
        }


        // Returns json-encoded response
        return $response->toJson();
//        if ($id === null || $id == 'undefined') {
//            $response->appendError('ApiController could not create, since ID is not provided! Check JS!');
//        } else {
//            $response->setData([
//                'id' => $id
//            ]);
//
//            App::$db->insertRow('feedbacks', [
//                'id' => $id,
//                'name' => $user['name'],
//                'feedback' => $row['messages']
//            ]);
//        }
        return $response->toJson();
    }
}
