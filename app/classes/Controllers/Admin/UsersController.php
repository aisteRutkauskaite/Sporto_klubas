<?php

namespace App\Controllers\Admin;

use App\App;
use App\Controllers\Base\AdminController;
use App\Views\BasePage;
use App\Views\Forms\Admin\Order\OrderUpdateForm;
use App\Views\Forms\Admin\User\UserRoleForm;
use App\Views\Forms\Admin\User\UserUpdateForm;
use App\Views\Tables\Admin\UsersTable;
use Core\View;

/**
 * Class AdminUsers
 *
 * TODO Make an API appraach to this shit
 * @package App\Controllers\Admin
 * @author  Dainius Vaičiulis   <denncath@gmail.com>
 */
class UsersController extends AdminController
{
    protected BasePage $page;
    protected UserRoleForm $form;

    public function __construct()
    {
        parent::__construct();
        $this->page = new BasePage([
            'title' => 'Users',
            'js' => ['/media/js/admin/users.js']
        ]);

    }

    public function index()
    {

        $forms = [
            'update' => (new UserUpdateForm())->render()
        ];


        $table = new View([
            'headers' => [
                'ID',
                'User name',
                'Role',
                'Set',

            ],
            'forms' => $forms ?? []
        ]);

        $this->page->setContent($table->render(ROOT . '/app/templates/content/table.tpl.php'));
        return $this->page->render();

//        if ($this->form->validate()) {
//            $id = $this->form->value('row_id');
//
//            $user = App::$db->getRowById('users', $id);
//            $user['role'] = $this->form->value('role');
//
//            App::$db->updateRow('users', $id, $user);
//        }
//
//        $table = new UsersTable();
//        $this->page->setContent($table->render());
//
//        return $this->page->render();
    }
}