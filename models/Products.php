<?php

namespace app\models;

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
            'id_category' => 'Id Category',
            'name' => 'Name',
            'content' => 'Content',
            'price' => 'Price',
            'payment_form' => 'Payment Form',
            'provider' => 'Provider',
            'data' => 'Data',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'img' => 'Img',
            'new' => 'New',
            'hit' => 'Hit',
            'sale' => 'Sale',
        ];
    }
}
