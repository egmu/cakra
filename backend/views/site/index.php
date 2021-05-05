<?php
use yii\helpers\Url;

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>


<div class="site-index text-capitalize">
        <div class="row justify-content-center">
     
            <div class="col-md-3 mb-3 m-2 shadow">
                <div class="row">
                    <div class="col-md-5 bg-yellow align-self-center text-white rounded p-4">
                        <i class="fa fa-car fa-4x"></i>
                    </div>
                    
                    <a href="<?= Url::to(['/mobil'])?>">
                        <div class="col-md-7" style="color: black;">
                            <h2>Mobil</h2>
                            <h5><?= $Mobil ?></h5>
                        </div>
                    </a>
                </div>
            </div>
             <div class="col-md-3 mb-3 m-2 shadow">
                <div class="row">
                    
                    <div class="col-md-5 bg-green align-self-center text-white rounded p-4">
                        <i class="fas fa-users fa-4x"></i>
                    </div>
                    
                    <a href="<?= Url::to(['/driver'])?>">
                        <div class="col-md-7" style="color: black;">
                            <h2>Driver</h2>
                            <h5><?= $Driver ?></h5>
                        </div>
                    </a>
                </div>
            </div>
   
            <div class="col-md-3 mb-3 m-2 shadow">
                <div class="row">
                    <div class="col-md-5 bg-blue align-self-center text-white rounded p-4">
                        <i class="fas fa-street-view fa-4x"></i>
                    </div>
    
                    <a href="<?= Url::to(['/penyewa'])?>">
                        <div class="col-md-7" style="color: black;">
                            <h2>Penyewa</h2>
                            <h5><?= $Penyewa ?></h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

        <div class="col-md-5  m-3 shadow">
            <h3 class="text-center">Sewa</h3>
        <div class="table-responsive table-stripped shadow text-capitalize mt-5 p-3" style="background-color: #6f42c169;">
            
            <table class="table">
                <thead>
                    <!--  <th>No</th>
                    <th>Penyewa</th>
                    <th>Tanggal Sewa</th>
                    <th>Jaminan</th> -->
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dataSewa as $item) { ?>
                        <!-- <tr>
                           <th>
                                <?= Html::a($i, $item['no_nota']) ?>
                            </th>
                            <td><?= $item['id_penyewa'] ?></td>
                            <td><?= $item['tgl_sewa'] ?></td>
                            <td><?= $item['jamnan'] ?></td>
                        </tr> -->

                        <div class="row" style="box-shadow: 0 4px 8px 0 rgb(144, 237, 125);">
                            <tr><?= Html::a($i, $item['no_nota']) ?></tr><br>
                            <tr>Penyewa: <?= $item['id_penyewa'] ?></tr><br>
                            <tr>Tanggal Sewa: <?= $item['tgl_sewa'] ?></tr><br>
                            <tr>Jaminan: <?= $item['jamnan'] ?></tr>
                            
                        </div>
                    <?php $i++; ?>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
</div>
