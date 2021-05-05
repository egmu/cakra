<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mobil */

$this->title = $model->nama_mobil;
$this->params['breadcrumbs'][] = ['label' => 'Mobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mobil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_mobil' => $model->no_mobil, 'nopol' => $model->nopol], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_mobil' => $model->no_mobil, 'nopol' => $model->nopol], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_mobil',
            'nopol',
            'nama_mobil',
            'jenis_mobil',
            'tahun_pembuatan',
            'harga_sewa',
            'kapasitas_penumpang',
            'status_mobil',
        ],
    ]) ?>

</div>
