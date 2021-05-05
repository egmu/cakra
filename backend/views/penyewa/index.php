<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penyewas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyewa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penyewa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <div class="table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_penyewa',
            'nama_lengkap',
            // 'password',
            'email:email',
            // 'jenkel',
            'pekerjaan',
            'alamat:ntext',
            'kota',
            'provinsi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?></div>


</div>
