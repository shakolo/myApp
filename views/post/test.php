<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Test Action</h1>
<?php

//\app\controllers\debug(Yii::$app);
//debug(Yii::$app);
//debug($model);
?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?php $form = ActiveForm::end(); ?>
