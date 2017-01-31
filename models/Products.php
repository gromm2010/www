<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 15.01.2017
 * Time: 14:14
 */

namespace app\models;
use yii\db\ActiveRecord;


class Products extends ActiveRecord
{
    public static function tableName()
    {
        return 'Products';
    }

    public function getCategory ()
    {
        return $this -> hasOne(Category::className(), [`id` => `id_category`]);
    }
}