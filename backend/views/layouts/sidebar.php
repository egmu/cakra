<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <style type="text/css">
        .normal { font-weight: normal; }
   .bold { font-weight: bold; }
   .bolder { font-weight: bolder; }
   .lighter { font-weight: lighter; }
   .bold-100 { font-weight: 100; }
   .bold-200 { font-weight: 200; }
   .bold-300 { font-weight: 300; }
   .bold-400 { font-weight: 400; }
   .bold-500 { font-weight: 500; }
   .bold-600 { font-weight: 600; }
   .bold-700 { font-weight: 700; }
   .bold-800 { font-weight: 800; }
   .bold-900 { font-weight: 900; }
   .sidebar {
    a {
      color: pink;

      &:hover,
      &:focus {
        text-decoration: none;
      }
    }
  }

    </style>
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light" style="color: black; "><div class="bolt"><?= Yii::$app->name  ?></div></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->identity->username ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <div class="ba">
            <?php
            echo \hail812\adminlte3\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'User',
                        'icon' => 'address-book',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                           ['label' => 'Penyewa',  'icon' => 'user', 'url' => ['penyewa/index']],
                             ['label' => 'Sewa',  'icon' => 'archive', 'url' => ['sewa/index']],
                        ]
                    ],
                    [
                        'label' => 'Detail',
                        'icon' => 'address-book',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                           ['label' => 'Detail Fasilitas',  'icon' => 'user', 'url' => ['detail-fasilitas/index']],
                             ['label' => 'Detail Sewa',  'icon' => 'archive', 'url' => ['detail-sewa/index']],
                        ]
                    ],
                    [
                        'label' => 'Mobil',
                        'icon' => 'car',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                           ['label' => 'Mobil',  'icon' => 'car', 'url' => ['mobil/index']],
                             ['label' => 'Driver',  'icon' => 'archive', 'url' => ['driver/index']],
                        ]
                    ],
                    
                    ['label' => 'Testimoni',  'icon' => 'archive    ', 'url' => ['testimoni/index']],
                    ['label' => 'Fasilitas',  'icon' => 'archive    ', 'url' => ['fasilitas/index']],
                    // ['label' => 'Simple Link', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">New</span>'],
                    // ['label' => 'Yii2 PROVIDED', 'header' => true],
                    // ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    // ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    // ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    // ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                    // ['label' => 'Level1'],
                    // [
                    //     'label' => 'Level1',
                    //     'items' => [
                    //         ['label' => 'Level2', 'iconStyle' => 'far'],
                    //         [
                    //             'label' => 'Level2',
                    //             'iconStyle' => 'far',
                    //             'items' => [
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                    //             ]
                    //         ],
                    //         ['label' => 'Level2', 'iconStyle' => 'far']
                    //     ]
                    // ],
                    // ['label' => 'Level1'],
                    // ['label' => 'LABELS', 'header' => true],
                    // ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    // ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    // ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </div>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>