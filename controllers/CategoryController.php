<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 09.01.2017
 * Time: 22:02
 */

namespace app\controllers;
use app\controllers\AppController;
use app\models\Category;
use app\models\Products;
use Yii;

class CategoryController extends AppController{
    public function actionIndex ()
    {
        $popular = Yii::$app->request->get('popular');
        $category = Category::find()->where(['popular'=> '1'])->all();
        return $this->render('index', compact('category'));
    }
    public function actionView ($id){
       $id = Yii::$app->request->get('id');
        $products = Products::find()->where(['id_category' => $id])->all();
        return $this->render('view', compact('products'));

    }
}