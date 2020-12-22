<?php

namespace App\Controllers\Common;

use App\Views\BasePage;
use Core\View;

class HomeController
{
    protected $page;

    /**
     * Controller constructor.
     *
     * We can write logic common for all
     * other methods
     *
     * For example, create $page object,
     * set it's header/navigation
     * or check if user has a proper role
     *
     * Goal is to prepare $page
     */
    public function __construct()
    {
        $this->page = new BasePage([
            'title' => 'Sporto klubas',
        ]);
    }

    /**
     * Home Controller Index
     *
     * @return string|null
     * @throws \Exception
     */
    public function index(): ?string
    {
        $content = (new View([
            "services" => [
                [
                    "service_name" => "Sporto įranga",
                    "service_image" => "https://image.freepik.com/free-vector/sporty-man-doing-ring-dips-exercises-with-gymnastic-rings-guy-training-gym-cardio-crossfit-workout-healthy-lifestyle-concept-white-background-full-length_48369-26825.jpg",
                    "service_description" => "Įvairi sporto įranga sportuojantiems klubo lankytojams"
                ],
                [
                    "service_name" => "Treniruotes",
                    "service_image" => "https://image.freepik.com/free-vector/women-working-out_18591-46304.jpg",
                    "service_description" => "Įvairios sporto treniruotes sportuojantiems"
                ],
                [
                    "service_name" => "Treniruotes lauke",
                    "service_image" => "https://image.freepik.com/free-vector/couple-working-out_18591-46305.jpg",
                    "service_description" => "Įvairios sporto treniruotes sportuojantiems lauke"
                ],
            ]
            ]))->render(ROOT . '/app/templates/content/index.tpl.php');

        $this->page->setContent($content);

        return $this->page->render();
    }
}

