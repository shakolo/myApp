<?php
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
?>
<h1>Test Action</h1>
<?php

//\app\controllers\debug(Yii::$app);
//debug(Yii::$app);
//debug($model);
?>

<?php if(Yii::$app->session->hasFlash('success')): ?>
<!--    --><?php //echo  Yii::$app->session->getFlash('success');?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo  Yii::$app->session->getFlash('success');?>
    </div>
<?php endif;?>

<?php //if(Yii::$app->session->hasFlash('error')): ?>
<!--    --><?php //echo  Yii::$app->session->getFlash('error');?>
<?php //endif;?>

<?php if(Yii::$app->session->hasFlash('error')): ?>
    <!--    --><?php //echo  Yii::$app->session->getFlash('success');?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo  Yii::$app->session->getFlash('error');?>
    </div>
<?php endif;?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
<?//= $form->field($model, 'text')->textarea(['rows' => 5])
echo $form->field($model, 'text')->widget(CKEditor::className(),[
'editorOptions' => [
'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
'inline' => false, //по умолчанию false
],
]);?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?php $form = ActiveForm::end(); ?>
