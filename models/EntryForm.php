<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 01.12.2017
 * Time: 17:31
 */

namespace app\models;
use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}