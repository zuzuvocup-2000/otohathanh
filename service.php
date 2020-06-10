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
                    <h2 class="m0">DỊCH VỤ</h2>
                </div>
                <ul class="va-flex all-item">
                    <li><a href="" title="">Trang chủ</a></li>
                    <li><a href="" title="">Dịch vụ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="lib pt20 pb20">
        <div class="container-center container">
            <section class="heading  mb30">
                <h2 class="hello align-center mb20 ">
                    DỊCH VỤ
                    <span class="red-text">
                        NỔI BẬT
                    </span>
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
            <section class="home-product">
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
                    <?php for($m=1;$m<=2;$m++){?>
                    <?php $h=0;for($n = 1; $n <=4  ; $n++){?>
                    <li class="align-center pb20">
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
                    <?php $h++; }} ?>
                </ul>
            </section>
        </div>
    <section class="banner-cup " style="background-image: url(resource/img/bg/bg-1.gif);">
        <div class="container container-center">

            <div class="cup-text ">
                <h3>GIẢI THƯỞNG</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobisLorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobisLorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobisLorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
            </div>
            <a class="img-cup">
                <img src=" resource/img/icon/cup.png">
            </a>
        </div>
    </section>
    <section class="color-service">
        <div class="container container-center">

            <ul class="feel-panel va-grid va-grid-1-2 va-grid-large clearfix">
                <li>
                    <h2 class="align-center m0">
                        TẠI SAO CHỌN CHÚNG TÔI
                    </h2>
                </li>
                <li>
                    <h2 class="hello align-center  m0">
                        CẢM NHẬN KHÁCH HÀNG
                    </h2>
                </li>
                <li>
                    <div class="answer-text va-grid va-grid-large-1-2 va-grid-small-1-1">
                        <div class="answer-item ">
                            <div class="item-text">Tư vấn mua bán, sửa chữa ô tô cho khách hàng từ A - Z , chăm sóc khách hàng, hậu mãi tận tình chu đáo</div>
                        </div>
                        <div class="answer-item ">
                            <div class="item-text">Garage ô tô Hà Thành luôn luôn cố gắng để trở thành nơi cung cấp hàng đầu các dịch vụ "chăm sco xe toàn diện"</div>
                        </div>
                        <div class="answer-item ">
                            <div class="item-text">Được thành lập vào năm 2011, chúng tôi đã có nhiều năm Kinh nghiệm trong việc cung ứng dịch vụ cho các loại xe</div>
                        </div>
                        <div class="answer-item ">
                            <div class="item-text">Garage Hà Thành cam kết sử dụng những sản phẩm chính hãng, đảm bảo lợi ích của khách hàng</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wrap-customer">

                        <div class="customer-cmt relative">
                            <p class="comment">
                            “Mình chuyên buôn bán xe ô tô cữ mới, có những chiếc xe màu sơn đã phai màu hẳn, rất cũ, nhưng khi sử dụng dịch vụ sơn tại Hà Thành xe sáng bóng như mới thực sự rất mãn nhãn."  
                            </p>
                            <div class="info-customer va-flex va-flex-middle">
                                <div class="img-customer img-cover">
                                    <img src="resource/img/customer/vanh.jpg" alt="">
                                </div>
                                <div class="text-customer">
                                    <div class="mb5 name-customer">Lê Việt Anh</div>
                                    <div>Chủ tịch hội đồng quản trị ^-^</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-customer">

                        <div class="customer-cmt relative">
                            <p class="comment">
                            “Mình chuyên buôn bán xe ô tô cữ mới, có những chiếc xe màu sơn đã phai màu hẳn, rất cũ, nhưng khi sử dụng dịch vụ sơn tại Hà Thành xe sáng bóng như mới thực sự rất mãn nhãn."  
                            </p>
                            <div class="info-customer va-flex va-flex-middle">
                                <div class="img-customer img-cover">
                                    <img src="resource/img/customer/vanh.jpg" alt="">
                                </div>
                                <div class="text-customer">
                                    <div class="mb5 name-customer">Lê Việt Anh</div>
                                    <div>Chủ tịch hội đồng quản trị ^-^</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    <div class="container container-center">
        <section class="type-car img-cover">
            <img src="resource/img/banner/banner-logo-car.png" alt="">
        </section>
    </div>
    <?php require_once('common/footer.php') ?>
</body>
</html>