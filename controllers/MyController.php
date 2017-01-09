<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 15.12.2016
 * Time: 15:51
 */

namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
    {
        public function actionIndex() {
           return $this->render('index');
        }
    }