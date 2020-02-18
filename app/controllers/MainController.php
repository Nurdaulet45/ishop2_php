<?php


namespace app\controllers;


use ishop\base\Controller;

class MainController extends AppController
{
    public function indexAction(){

        $this->setMeta('Главная', 'Описание', 'Ключи');
        $name = 'Andrey';
        $age = 32;
        $this->set(compact('name', 'age'));
        /*        echo __METHOD__;
        var_dump($this->route);*/

    }

}