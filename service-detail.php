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
    <div class="bg-all mb30">
        <div class="container container-center">
            <div class="all-menu va-flex va-flex-middle va-flex-space-between align-center">
                <div class="name-item">
                    <h2 class="m0">DỊCH VỤ CHĂM SÓC XE</h2>
                </div>
                <ul class="va-flex all-item">
                    <li><a href="" title="">Trang chủ</a></li>
                    <li><a href="" title="">Dịch vụ</a></li>
                    <li><a href="" title="">Dịch vụ chăm sóc xe</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="lib pt20 pb20">
        <div class="container-center container">
            <section class="sd-all  ">
                <div class="va-grid clearfix va-grid-x-large">
                    <div class="wrap-sd va-col-2-3">
                        <ul class="sd-row m0">
                            <li>
                                <div class="img-cover">
                                    <img src="resource/img/banner/banner-service.png">
                                </div>
                            </li>
                            <li>
                                <h3>
                                    Bảo dưỡng xe ô tô định kỳ tại gara ô tô Hà Thành   
                                </h3>
                                <h4 class="uppercase">
                                    Mục đích của  bảo dưỡng địng kì
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobisLorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobisLorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobisLorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis
                                </p>
                            </li>
                            <li>
                                <h4 class="uppercase">
                                    Sự cần thiết của bảo dưỡng địng kì
                                </h4>
                                <p>Giảm các sự cố xảy ra ngoài ý muốn</p>
                                <p>Xe luôn được duy trì ở trạng thái hoạt động tốt</p>
                                <p>Tăng tuổi thọ của xe</p>
                                <p>Gia tăng sự an toàn khi điều khiển xe</p>
                                <p>Chấp hành các quy định của nhà nước</p>
                                <p>Lịch bảo dưỡng định kì được xác định bởi quãng đường xe đã đi được hoặc thời gian xe đã hoạt động</p>
                                

                            </li>
                        </ul>
                    </div>
                    <div class="sd-menu va-col-1-3">
                        <section class="wrap-sd-menu">
                            <section class="sd-menu-head mb20" >
                            <h2 class="uppercase">
                                danh mục dịch vụ
                            </h2>
                            <ul class="sd-list m0">
                                <li> <a href="">Chăm sóc và làm đẹp xe</a></li> 
                                <li> <a href="">Phủ Ceramic ô tô ( phủ bóng xe hơi )</a></li> 
                                <li> <a href="">Dọn nột thất ô tô</a></li> 
                                <li> <a href="">Vệ sinh khoang máy ô tô</a></li> 
                                <li> <a href="">Sơn phủ gầm chống ồn    </a></li> 
                                <li> <a href="">Đánh bóng sơn xe</a></li> 
                            </ul>
                        </section>
                        
                        <section class="time-work mb20">
                            <h2 class="uppercase">
                                thời gian làm việc
                            </h2>
                            <ul class="time-work-list m0">
                                <li class="va-flex va-flex-middle va-flex-space-between">
                                    <div class="text-tw">
                                        Thứ 2 - Thứ 6
                                    </div>
                                    <div class="text-tw">
                                        6.00 am - 20.00 pm
                                    </div>
                                </li>
                                <li class="va-flex va-flex-middle va-flex-space-between">
                                    <div class="text-tw">
                                        Thứ 7
                                    </div>
                                    <div class="text-tw">
                                        8.00 am - 21.00 pm
                                    </div>
                                </li>
                                <li class="va-flex va-flex-middle va-flex-space-between">
                                    <div class="text-tw">
                                        Chủ nhật
                                    </div>
                                    <div class="text-tw">
                                        8.00 am - 21.30 pm
                                    </div>
                                </li>
                            </ul>
                        </section>

                        <section class="sd-contact">
                            <h2 class="uppercase">
                                Liên hệ
                            </h2>
                            <ul class="sd-list-input">
                                <li>
                                    <div class="input-email-sd">
                                        <input type="text" name="" placeholder="Email...">
                                    </div>
                                </li>
                                <li>
                                    <div class="input-content">
                                        <input type="text" name="" placeholder="Nội dung...">
                                    </div>
                                </li>
                                <li>
                                    <button class="btn btn-content">
                                        Gửi
                                    </button>
                                </li>
                            </ul>
                        </section>
                        </section>
                        
                    </div>
                </div>
            </section>
            <section class="home-product">
                <h2 class="uppercase underlined">
                    Sản phẩm liên quan 
                </h2>
                <ul class="product-list va-grid-large clearfix va-grid va-grid-large-1-4 va-grid-large-1-3 va-grid-small-1-1 va-grid-medium-1-2">
                <?php 
                    $product = array(
                        0 => array(
                            'head' => 'SỬA CHỮA CHUNG',
                            'text' => 'Kinh nghiệm chăm sóc và bảo dưỡng xe ô tô định kỳ'
                        ),
                        1 => array(
                            'head' => 'ĐỒNG - SƠN',
                            'text' => 'Kinh nghiệm chăm sóc và bảo dưỡng xe ô tô định kì.'
                        
                        ),
                        2 => array(
                            'head' => 'NỘI - NGOẠI THẤT',
                            'text' => 'Kinh nghiệm chăm sóc và bảo dưỡng xe ô tô định kì.'
                        ),
                        3 => array(
                            'head' => 'CHO THUÊ XE  ',
                            'text' => 'Kinh nghiệm chăm sóc và bảo dưỡng xe ô tô định kì.'
                        ),
                    )
                ?>
                    
                    <?php $h=0;for($n = 1; $n <=4  ; $n++){?>
                    <li class="align-center">
                        <div class="product-panel ">
                            <a href="" title="" class="img-cover product-img">
                                <img src="resource/img/work/work-<?php echo $n;?>.gif" alt="">
                            </a>
                            <div class="product-text">
                                <h3 class="product-title">
                                    <?php echo $product[$h]['head']?> 
                                </h3>
                                <div class="product-info mb20">
                                    <?php echo $product[$h]['text']?> 
                                </div>
                                <div class="product-submit">
                                    <a href="" title="">Nhận dịch vụ</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $h++; } ?>
                </ul>
            </section>
        </div>
    </section>
    <?php require_once('common/footer.php') ?>
</body>
</html>