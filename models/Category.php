<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 15.01.2017
 * Time: 14:14
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    /**
     * Обьявляем название таблицы
     */
    public static function tableName()
    {
        return 'category';
    }

    public function getProducts ()
    {
        return $this -> hasManu(Products::className(), [`id_category` => `id`]);
    }
//    public function Random(){
//        $random = array();
//        for
//    }
}