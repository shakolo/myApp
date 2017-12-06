<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 06.12.2017
 * Time: 12:24
 */

namespace app\controllers;
use Yii;

class PostController extends AppController
{

    public $layout = 'basic';
    public function actionIndex(){
//        $names = ['Ivanov', 'Petrov', 'Sidorov'];

//        var_dump(Yii::$app);
//        $this->debug(Yii::$app);
//        $this->debug($names);
        return $this->render('test');
    }
    public function actionShow(){
//        $this->layout = 'basic';
        return $this->render('show');
    }
}