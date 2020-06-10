<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('common/head.php') ?>
</head>
<body>
    <?php ?>
    <?php require_once('common/header.php') ?>
    <div class="bg-all">
        <div class="container container-center">
            <div class="all-menu va-flex va-flex-middle va-flex-space-between align-center">
                <div class="name-item">
                    <h2 class="m0">THƯ VIỆN ẢNH - VIDEO</h2>
                </div>
                <ul class="va-flex all-item">
                    <li><a href="" title="">Trang chủ</a></li>
                    <li><a href="" title="">Thư viện ảnh - video</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="lib pt20">
        <div class="container-center container">
        <section class="heading  mb30">
            <h2 class="hello align-center mb20 ">
                THƯ VIỆN ẢNH - VIDEO
            </h2>
            <ul class="heading-menu va-flex va-flex-middle ">
                <li class="active"><a href="" title="">
                    Tất cả
                </a></li>
                <li><a href="" title="">
                    Sửa chữa
                </a></li>
                <li><a href="" title="">
                    Chăm sóc
                </a></li>
                <li><a href="" title="">
                    Đồng sơn
                </a></li>
            </ul>
        </section>
            <section class="lib-panel">
                <ul class="lib-list va-grid-large clearfix va-grid  va-grid-small-1-1 va-grid-medium-1-2 va-grid-large-1-3 ">
                <?php 
                    $lib = array(
                        0 => array(
                            'head' => 'Bảo dưỡng xe định kỳ ',
                            
                        ),
                        1 => array(
                            'head' => 'Thay bánh xe trọn gói ',
                            
                        
                        ),
                        2 => array(
                            'head' => 'Rửa dọn vệ sinh xe',
                            
                        ),
                        3 => array(
                            'head' => 'Bảo dưỡng xe định kỳ ',
                            
                        ),
                        4 => array(
                            'head' => 'Thay bánh xe trọn gói ',
                            
                        ),
                        5 => array(
                            'head' => 'Rửa dọn vệ sinh xe ',
                            
                        ),
                        6 => array(
                            'head' => 'Bảo dưỡng xe định kỳ ',
                            
                        ),
                        7 => array(
                            'head' => 'Thay bánh xe trọn gói ',
                            
                        ),
                        8 => array(
                            'head' => 'Rửa dọn vệ sinh xe ',
                            
                        ),

                    )
                ?>
                    <?php $g=0;for($b = 1; $b <=9  ; $b++){?>
                    <li>
                        <div class="lib-panel ">
                            <a href="" title="" class="img-cover lib-img">
                                <img src="resource/img/work/lib-<?php echo $b;?>.gif" alt="">
                            </a>
                            <div class="lib-heading ">
                                
                                <div class="lib-info  ">
                                    <?php echo $lib[$g]['head']?> 
                                </div>
                                
                            </div>
                        </div>
                    </li>
                    <?php $g++; } ?>
                </ul>
            </section>
        </div>
    </section>

    <?php require_once('common/footer.php') ?>
</body>
</html>