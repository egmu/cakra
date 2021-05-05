<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailFasilitas */

$this->title = 'Create Detail Fasilitas';
$this->params['breadcrumbs'][] = ['label' => 'Detail Fasilitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-fasilitas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
