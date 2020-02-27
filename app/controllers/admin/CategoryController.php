<?php


namespace app\controllers\admin;


use app\models\AppModel;
use app\models\Category;
use ishop\App;

class CategoryController extends AppController
{
    public function indexAction(){
        $this->setMeta('Список категорий');
    }

    public function deleteAction(){
        $id = $this->getRequestId();
        $children = \R::count('category', 'parent_id = ?', [$id]);
        $errors = '';
        if ($children){
            $errors = '<li>Удаления невозможно, в категории есть вложенных категории</li>';
        }

        $products = \R::count('product','category_id = ?', [$id]);
        if ($products){
            $errors = '<li>Удаление невозможно, в категории есть товары</li>';
        }

        if ($errors){
            $_SESSION['error'] = "<ul>$errors</ul>";
            redirect();
        }
        /*debug($id, 1);*/

        $category = \R::load('category', $id);
        \R::trash($category);
        $_SESSION['success'] = 'Категория удалена';
        redirect();
    }

    public function addAction(){
        if (!empty($_POST)){
            // Создаем обьект категории
            $category = new Category();
            // Возмем данные из поста
            $data = $_POST;
            // Загрузим их в модель
            $category->load($data);
            // Если не проидена валидация тогда запишем ошибку
            if (!$category->validate($data)){
                $category->getErrors();
                redirect();
            }
            // Если проидена валидация сохраняем данные в таблицу
            // и получаем ид сохр записи
            if ($id = $category->save('category')){
                $alias = AppModel::createAlias('category','alias', $data['title'], $id);
                $cat = \R::load('category', $id);
                $cat->alias = $alias;
                \R::store($cat);
                $_SESSION['success'] = 'Категория добавлена';
            }
            redirect();
        }


        $this->setMeta('Новая категория');
    }

    public function editAction(){
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $category = new Category();
            $data = $_POST;
            $category->load($data);
            if (!$category->validate($data)){
                $category->getErrors();
                redirect();
            }
            if ($id = $category->update('category', $id)){
                $alias = AppModel::createAlias('category','alias', $data['title'], $id);
                $category = \R::load('category', $id);
                $category->alias = $alias;
                \R::store($category);
                $_SESSION['success'] = 'Изменение сохранено';
            }
            redirect();
        }
        $id = $this->getRequestId();

        $category = \R::load('category', $id);
        App::$app->setProperty('parent_id', $category->parent_id);

        $this->setMeta('Редактирование категории');
        $this->set(compact('category'));
    }

}