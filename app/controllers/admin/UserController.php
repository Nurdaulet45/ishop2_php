<?php


namespace app\controllers\admin;


use app\models\User;

class UserController extends AppController
{
    public function loginAdminAction()
    {
        if (!empty($_POST)) {
            $user = new User();
            if ($user->login(true)) {
                $_SESSION['success'] = 'Успешно авторизованы';
            } else {
                $_SESSION['error'] = 'Логин или пароль введено неправильно';
            }
            if (User::isAdmin()) {
                redirect(ADMIN);
            } else {
                redirect();
            }

        }
        $this->layout = 'login';


    }

}