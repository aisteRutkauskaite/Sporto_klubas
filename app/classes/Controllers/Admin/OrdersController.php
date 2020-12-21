<?php

namespace App\Controllers\Admin;

use App\App;
use App\Controllers\Base\AdminController;
use App\Views\BasePage;
use App\Views\Forms\Admin\Order\OrderStatusForm;
use App\Views\Forms\Admin\Order\OrderUpdateForm;
use App\Views\Tables\Admin\OrdersTable;
use App\Views\Tables\User\OrderTable;
use Core\View;

/**
 * Class AdminOrders
 * TODO Make an API approach of this shit
 *
 * @package App\Controllers\Admin
 * @author  Dainius Vaičiulis   <denncath@gmail.com>
 */
class OrdersController extends AdminController
{
    protected BasePage $page;
    protected OrderStatusForm $form;

    public function __construct()
    {
        parent::__construct();
        $this->page = new BasePage([
            'title' => 'Orders',
             'js' => ['/media/js/admin/orders.js']
        ]);

    }

    public function index()
    {

        $rows = App::$db->getRowsWhere('orders');

        $forms = [
            'update' => (new OrderUpdateForm())->render()
        ];


        $table = new View([
            'headers' => [
                'ID',
                'Status',
                'Pizza name',
                'Time Ago',
                "Edit"
            ],
            'forms' => $forms ?? []
        ]);

        $this->page->setContent($table->render(ROOT . '/app/templates/content/table.tpl.php'));
        return $this->page->render();
    }
}
