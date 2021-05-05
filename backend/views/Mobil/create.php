<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mobil */

$this->title = 'Tambah Data Mobil';
$this->params['breadcrumbs'][] = ['label' => 'Mobils', 'url' => ['index']];

?>
<div class="mobil-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
