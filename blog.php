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
                    <h2 class="m0">TIN TỨC</h2>
                </div>
                <ul class="va-flex all-item">
                    <li><a href="" title="">Trang chủ</a></li>
                    <li><a href="" title="">Tin tức</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="attention pt20">
        <div class="container-center container">
            
            <section class="attention-panel">
                <ul class="attention-list va-grid-large clearfix va-grid  va-grid-large-1-3 va-grid-small-1-1 va-grid-medium-1-2">
                <?php 
                    $attention = array(
                        0 => array(
                            'head' => 'Làm mới nội thất xe ô tô giá siêu hấp dẫn ',
                            'text' => ' Hưởng ứng ngày Quốc tế phụ nữ 8/3, Gara Ô tô Hà Thành xin gửi đến khách hàng chương trình ưu đãi đặc biệt dành cho vợ Hai . Theo đó...'
                        ),
                        1 => array(
                            'head' => '4 Chú ý khi thay dầu máy xe ô tô bao dưỡng định kỳ ',
                            'text' => ' Hưởng ứng ngày Quốc tế phụ nữ 8/3, Gara Ô tô Hà Thành xin gửi đến khách hàng chương trình ưu đãi đặc biệt dành cho vợ Hai . Theo đó...'
                        
                        ),
                        2 => array(
                            'head' => 'Lịch bảo dưỡng ô tô và thay thế phụ tùng tại Garage ',
                            'text' => ' Hưởng ứng ngày Quốc tế phụ nữ 8/3, Gara Ô tô Hà Thành xin gửi đến khách hàng chương trình ưu đãi đặc biệt dành cho vợ Hai . Theo đó...'
                        )

                    )
                ?>
                    <?php for($i=0;$i<=3;$i++){?>
                    <?php $l=0;for($m = 1; $m <=3  ; $m++){?>
                    <li>
                        <div class="attention-panel ">
                            <a href="" title="" class="img-cover attention-img">
                                <img src="resource/img/work/work-<?php echo $m;?>.gif" alt="">
                            </a>
                            <div class="attention-text">
                                <div class="attention-head mb20 va-flex va-flex-middle ">
                                    <div class="date mr20">
                                        <span>23</span>
                                        <p class="m0">FEB</p>
                                    </div>
                                    <h3 class="attention-title m0">
                                        <?php echo $attention[$l]['head']?> 
                                    </h3>
                                </div>
                                <div class="attention-info mb20 line-height-20">
                                    <?php echo $attention[$l]['text']?> 
                                </div>
                                <div class="attention-submit">
                                    <a href="" title="">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $l++; }} ?>
                </ul>
            </section>
        </div>
    </section>

    <?php require_once('common/footer.php') ?>
</body>
</html>