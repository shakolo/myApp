<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 06.12.2017
 * Time: 12:06
 */

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex(){
        return $this->render('index');
    }
}