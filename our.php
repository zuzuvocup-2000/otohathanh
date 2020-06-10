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
                    ĐỘI NGŨ CỦA CHÚNG TÔI
                </h2>
                
                <ul class="lib-list va-grid-large clearfix va-grid  va-grid-small-1-1 va-grid-medium-1-2 va-grid-large-1-4 ">
                <?php 
                    $lib = array(
                        0 => array(
                            'head' => 'Maria Anderson    ',
                            'text' => 'Kinh nghiệm chăm sóc và bảo dưỡng xe ô tô định ky'
                            
                        ),
                        1 => array(
                            'head' => 'Maria Anderson    ',
                            'text' => 'Kinh nghiệm chăm sóc và bảo dưỡng xe ô tô định ky'
                            
                        
                        ),
                        2 => array(
                            'head' => 'Maria Anderson    ',
                            'text' => 'Kinh nghiệm chăm sóc và bảo dưỡng xe ô tô định ky'
                            
                        ),
                        3 => array(
                            'head' => 'Maria Anderson    ',
                            'text' => 'Kinh nghiệm chăm sóc và bảo dưỡng xe ô tô định ky'
                            
                        ),
                        

                    )
                ?>
                    <?php $g=0;for($b = 1; $b <=4  ; $b++){?>
                    <li>
                        <div class="lib-panel ">
                            <a href="" title="" class="img-cover lib-img">
                                <img src="resource/img/our/our-<?php echo $b;?>.png" alt="">
                            </a>
                            <div class="our-name align-center ">
                                <?php echo $lib[$g]['head']?> 
                            </div>
                            <div class="our-heading ">
                                
                                <div class="our-info align-center  mb20" >
                                    <?php echo $lib[$g]['text']?> 
                                </div>
                                <ul class="social-list va-flex m0 va-flex-middle va-flex-space-between">
                                    <li><a href="" title="" class="phone">
                                        <i class="fas fa-phone "></i>
                                    </a></li>
                                    <li><a href="" title="" class="skype">
                                        <i class="fab fa-skype "></i>
                                    </a></li>
                                    <li><a href="" title="" class="fb">
                                        <i class="fab fa-facebook-f "></i>
                                    </a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </li>
                    <?php $g++; } ?>
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
    <div class="our-banner">
        <div class="container-center container">
            <div class="va-flex va-justify-center va-flex-middle va-grid clearfix va-grid-1-2 va-grid-x-large">
                <div class="our-banner-text">
                    <div class="wrap-genaral">
                        <h2 class="uppercase">
                            nhận dịch vụ miễn phí ngay
                        </h2>
                        <div class="free-name">
                            <input type="text" placeholder="Nhập họ và tên">
                        </div>
                        <div class="va-grid va-grid-x-large va-grid-large-1-2 clearfix"> 
                            <div class="free-email">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="free-phone">
                                <input type="text" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="btn btn-register">
                            <button>Đăng ký</button>
                        </div>
                    </div>
                </div>
                <div class="our-banner-img img-scaledown">
                    <img src="resource/img/banner/our-banner.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container container-center">
        <section class="type-car img-cover">
            <img src="resource/img/banner/banner-logo-car.png" alt="">
        </section>
    </div>
    <?php require_once('common/footer.php') ?>
</body>
</html>