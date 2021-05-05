<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailFasilitas */

$this->title = 'Update Detail Fasilitas: ' . $model->no_mobil;
$this->params['breadcrumbs'][] = ['label' => 'Detail Fasilitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_mobil, 'url' => ['view', 'id' => $model->no_mobil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-fasilitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
