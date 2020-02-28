<?php


namespace app\models\admin;


use app\models\AppModel;
use ishop\libs\Pagination;

class Product extends AppModel
{
    public $attributes = [
        'title' => '',
        'category_id' => '',
        'keywords' => '',
        'description' => '',
        'price' => '',
        'old_price' => '',
        'content' => '',
        'status' => '',
        'hit' => '',
        'alias' => '',
    ];

    public $rules = [
        'required' => [
            'title',
            'category_id',
            'price',
        ],
        'integer' => [
            'category_id',
        ],
    ];

    public function editFilter($id, $data){
        $filter = \R::getCol("SELECT attr_id FROM attribute_product WHERE product_id =?", [$id]);
        // если менеджер удалял фильтры- удаляем их
        if (empty($data['attrs']) && !empty($filter)) {
            \R::exec('DELETE FROM attribute_product WHERE product_id = ', [$id]);
        }
        // если фильтры добавляются
        if (empty($filter) && !empty($data)){
            $sql_part = '';
            foreach ($data['attrs'] as $v) {
                $sql_part = "($v, $id),";
            }
            $sql_part = rtrim($sql_part, ',');
            \R::exec("INSERT INTO attribute_product (attr_id, product_id) VALUES $sql_part");
            return;
        }
        // Если изменились фильтры - удалим и запишем новые
        if (!empty($data['attrs'])){
            $result = array_diff($filter, $data['attrs']);
            if (!$result){
                \R::exec('DELETE FROM attribute_product WHERE product_id = ', [$id]);
                $sql_part = '';
                foreach ($data['attrs'] as $v) {
                    $sql_part = "($v, $id),";
                }
                $sql_part = rtrim($sql_part, ',');
                \R::exec("INSERT INTO attribute_product (attr_id, product_id) VALUES $sql_part");


            }
        }

    }


}