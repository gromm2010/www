<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 01.02.2017
 * Time: 11:47
 */

namespace app\modules\admin\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;

class AppAdminController extends Controller
{
    public function behaviors(){
        return [
            'acces' =>[
                'class' => AccessControl::className(),
                'rules' => [
                    [
                    'allow' => true,
                    'roles' => ['@']
                    ]
                ]
            ]
        ];
    }
}