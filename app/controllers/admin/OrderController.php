<?php


namespace app\controllers\admin;


class OrderController extends AppController
{
    public function indexAction(){
        $this->setMeta('Список заказов');
    }

}