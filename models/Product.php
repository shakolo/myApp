<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 08.12.2017
 * Time: 11:33
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends  ActiveRecord
{
    public static function tableName() {
        return 'products';
    }
    public function getCategories(){
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }
}