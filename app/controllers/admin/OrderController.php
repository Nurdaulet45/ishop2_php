<?php


namespace app\controllers\admin;


class OrderController extends AppController
{
    public function indexAction(){
        $this->setMeta('Список заказов');
        $orders = \R::findAll('order');
        $this->set(compact('orders'));
    }

}