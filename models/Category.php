<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 08.12.2017
 * Time: 11:33
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends  ActiveRecord
{
    public static function tableName() {
        return 'categories';
    }
}