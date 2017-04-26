<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 21.03.2017
 * Time: 20:50
 */

namespace app\modules\admin\models;
use yii\base\Model;
use yii\web\UploadedFile;


class UploadForm extends Model
{

    public $img;

    public function rules()
    {
        return [
            [['img'], 'file',
                'skipOnEmpty' => false,
                'extensions'=> 'png, jpg'
            ],
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $this->img->saveAs('uploads/' . $this->img->baseName . '.' . $this->img->extension);
            return true;
        } else {
            return false;
        }
    }
}