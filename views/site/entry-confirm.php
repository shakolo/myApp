<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 01.12.2017
 * Time: 17:10
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>