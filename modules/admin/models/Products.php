<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property integer $id_category
 * @property string $name
 * @property string $content
 * @property integer $price
 * @property string $payment_form
 * @property integer $provider
 * @property string $data
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property integer $new
 * @property integer $hit
 * @property integer $sale
 */
class Products extends \yii\db\ActiveRecord
{

    public $img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'name', 'price', 'payment_form'], 'required'],
            [['id_category', 'price', 'provider', 'new', 'hit', 'sale'], 'integer'],
            [['data'], 'safe'],
            [['img'], 'file', 'extensions' => 'png, jpg'],
                                [ 'skipOnEmpty' => false],
            [['name', 'content', 'payment_form', 'keywords', 'description', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Выберите категорию',
            'name' => 'Название',
            'content' => 'Тех описание',
            'price' => 'Цена',
            'payment_form' => 'Способы оплаты',
            'min_order' => 'Мин заказ',
            'provider' => 'Организация',
            'data' => 'Дата публикации',
            'keywords' => 'Ключевые слова',
            'description' => 'Сео описание',
            'img' => 'Изображение',
            'new' => 'New',
            'hit' => 'Популярный',
            'sale' => 'Скидка',
        ];
    }
}
