<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 21.03.2017
 * Time: 8:46
 */

namespace app\modules\admin\controllers;


use app\models\Category;
use app\models\Products;
use app\modules\admin\controllers\AppAdminController;
use app\modules\admin\models\AddProducts;
use Yii;


class CategoryController extends AppAdminController
{
    /**
     * Обьявляем название таблицы
     */
    public static function tableName()
    {
        return 'category';
    }
    public function actionIndex()
    {
        $category = Category::find()->all();
        return $this -> render('index', compact('category'));
    }
    public function actionView ($id){
        $id = Yii::$app->request->get('id');
        $products = Products::find()->where(['id_category' => $id])->all();
        return $this->render('view', compact('products'));
    }
    public function actionAdd(){
        $model = new AddProducts();
        if ($model->load(Yii::$app->request->post())) {
            if ($product = $model->Add()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

}