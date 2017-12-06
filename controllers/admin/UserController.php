<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 06.12.2017
 * Time: 12:06
 */

namespace app\controllers\admin;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}