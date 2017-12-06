<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 06.12.2017
 * Time: 11:38
 */

namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
{
    public function  actionIndex($id = null) {
        $hi = 'Hello, world!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
//        return $this->render('index', ['helllo' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }
}