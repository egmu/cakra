<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Testimoni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testimoni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
