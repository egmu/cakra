<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Fasilitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-fasilitas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Fasilitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_mobil',
            'kode_fasilitas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
