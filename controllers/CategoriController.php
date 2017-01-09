<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 09.01.2017
 * Time: 22:02
 */

namespace app\controllers;


use yii\web\Controller;

class CategoriController extends Controller
{
    public function actionAutokran()
    {
        return $this->render('Autokran');
    }

    public function actionEkskavator()
    {
        return $this->render('Ekskavator');
    }

    public function actionKompressor()
    {
        return $this->render('Kompressor');
    }

    public function actionSamosval()
    {
        return $this->render('Samosval');
    }

    public function actionAvtovyshka()
    {
        return $this->render('Avtovyshka');
    }
}