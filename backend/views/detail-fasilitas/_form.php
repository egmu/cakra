<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailFasilitas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-fasilitas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_mobil')->textInput() ?>

    <?= $form->field($model, 'kode_fasilitas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
