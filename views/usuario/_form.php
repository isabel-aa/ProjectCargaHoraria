<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'LOGIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SENHA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUCLEO_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
