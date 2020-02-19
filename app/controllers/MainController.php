<?php


namespace app\controllers;


use ishop\App;
use ishop\base\Controller;
use ishop\Cache;

class MainController extends AppController
{
    public function indexAction(){


        //$posts = \R::findAll('test');
        //$posts = \R::findOne('test', 'id = ?', [2]);
        //debug($posts);
        $brands = \R::find('brand','LIMIT 3');
        //debug($brands);
        $this->setMeta('Главная', 'Описание', 'Ключи');
        $this->set(compact('brands'));
//        $name = 'Andrey';
//        $names = ['Andrey', 'John', 'Mali'];
//        $age = 32;
//        $cache = Cache::instance();
        //$cache->delete('test');
        //$cache->set('test', $names);
//        $data = $cache->get('test');
//        if (!$data){
//            $cache->set('test', $names);
//        }
//        //debug($data);
//        $this->set(compact('name', 'age', 'posts'));
        /*        echo __METHOD__;
        var_dump($this->route);*/

    }

}