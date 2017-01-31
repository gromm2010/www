<?php


namespace app\controllers;
use app\controllers\AppController;
use app\models\Category;
use app\models\Products;
use Yii;


class ProductController extends AppController{
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $products = Products::findOne($id);
        return $this -> render('view', compact('products'));
    }

}


