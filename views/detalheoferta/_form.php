<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detalheoferta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalheoferta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ANOSEMESTRE')->textInput() ?>

    <?= $form->field($model, 'DISCIPLINA_ID')->textInput() ?>

    <?= $form->field($model, 'OFERTA_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
