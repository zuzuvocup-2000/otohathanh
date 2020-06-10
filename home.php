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
    <div class="banner va-visible-large">
        <div class="container container-center">
            <div class="banner-info align-center">
                <div>

                    <h2 class="banner-heading p10 pl20 pr20">NHƯỢNG QUYỀN</h2>
                </div>
                <div>
                    <h1 class="banner-key p5 pl20 pr20">THƯƠNG HIỆU</h1>
                </div>
                <h3 class="banner-slogan mb10 mt10">Cùng Hà Thành Garage hợp tác kinh doanh!</h3>
                <h3 class="banner-contact mb10 mt10 p10">LIÊN HỆ NGAY: 0945 860505</h3>
            </div>
        </div>
    </div>
    <div class="container container-center">
        <section class="section-upper ">
            <?php 
                $array = array(
                    0 => array(
                        'head' => 'SỬA CHỮA',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.'
                    ),
                    1 => array(
                        'head' => 'CHĂM SÓC',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.'
                    
                    ),
                    2 => array(
                        'head' => 'ĐỒNG SƠN',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.'
                    ),
                    
                )
            ?>
            <ul class="service va-grid va-grid-large-1-3 va-grid-small-1-1 va-grid-large clearfix">
                <?php $k=0;for($i = 1; $i <= 3 ; $i++){?>    
                <li class="align-center">
                    <div class="commit-item">
                        <div class="service-icon img-scaledown align-center">
                            <img src="resource/img/icon/icon-<?php echo $i; ?>.png" alt="">
                        </div>
                        <h3 class="service-head">
                            <?php echo $array[$k]['head']?>
                        </h3>
                        <p class="mb20">
                            <?php echo $array[$k]['text']?>
                        </p>
                        <div class="btn-watch mb10">
                            <button class="btn btn-see-now" value="see" type="see" name="see">XEM NGAY</button>
                        </div>
                    </div>
                </li>
                <?php $k++; } ?>
            </ul>
        </section>
        <section class="content mb20">
            <div class="content-intro va-grid va-grid-medium va-grid-large-1-2 va-grid-small-1-1 clearfix">
                <div class="wrap-content">
                    <div class="wrap-text mb20">
                        <h2 class="hello align-center mb20">
                            CHÀO MỪNG ĐẾN VỚI
                            <span class="red-text">
                                HÀ THÀNH GARAGE
                            </span>
                        </h2>
                        <p class="content-info m0">
                            Chúng tôi tin rằng nguồn nhân lực là một chìa khóa để xây dựng một
                            mối quan hệ vững chắc với khách hàng của chúng tôi. Vì vậy, đội ngũ nhân
                            viên của chúng tôi luôn luôn cải thiện bản thân không ngừng để đạt được
                            3 giá trị cốt lõi: kĩ năng, kĩ thuật, phong cách chuyên nghiệp và thái độ
                            chuyên tâm để cung cấp những gía trị tốt nhất có thể cho khách hàng trong
                            bất kì trường hợp nào.
                        </p>
                    </div>
                    <div class="wrap-img mb20">
                        <a href="" title="" class="image-news img-cover">
                            <img src="resource/img/work/work.gif" alt="">
                        </a>
                    </div>
                    <div class="more ">
                        <a href="" class="more-link">XEM THÊM</a>
                    </div>
                </div>
                <div class="wrap-video">
                <iframe width="100%" height="407" src="https://www.youtube.com/embed/xXrWPWM9cAg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section class="home-product">
            <section class="heading mb20">
                <h2 class="hello align-center mb20 ">
                    DỊCH VỤ
                    <span class="red-text">
                        NỔI BẬT
                    </span>
                </h2>
                <ul class="heading-menu va-flex va-flex-middle align-center va-justify-center">
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
            <ul class="product-list va-grid-small clearfix va-grid va-grid-large-1-4 va-grid-large-1-3 va-grid-small-1-1 va-grid-medium-1-2">
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
    <section class="wrap-info va-visible-medium">
        <div class="info container container-center ">
            <div class="info-address ">
                <div class="va-grid va-grid-medium  va-visible-large clearfix">

                    <div class="info-address-row va-col-2-3">
                        
                            <ul class="row va-grid va-grid-large-1-2 va-grid-medium clearfix">
                                <li>
                                    <h3 class="address-head mb20">HỆ THỐNG
                                        <span>CHI NHÁNH</span>
                                    </h3>
                                </li>
                                <li>
                                    <div class="address">
                                        <div class="address-text">
                                            <i class="fas fa-map-marker-alt"></i>   
                                            CS 2: 685 Lạc Long Quân, Tây Hồ, HN 
                                        </div>
                                        <div class="phone">
                                            <i class="fas fa-phone"></i>
                                            0907 860505 - 0936 860505
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="address">
                                        <div class="address-text">
                                            <i class="fas fa-map-marker-alt"></i>   
                                            CS 4: 140 Tố Hữu, Hà Đông, HN 
                                        </div>
                                        <div class="phone">
                                            <i class="fas fa-phone"></i>
                                            0907 860505 - 0936 860505
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="address">
                                        <div class="address-text">
                                            <i class="fas fa-map-marker-alt"></i>   
                                            CS 1: 500 Võ Chí Công, Tây Hồ, HN 
                                        </div>
                                        <div class="phone">
                                            <i class="fas fa-phone"></i>
                                            0907 860505 - 0936 860505
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="address">
                                        <div class="address-text">
                                            <i class="fas fa-map-marker-alt"></i>   
                                            CS 3: 300 Trần Điền, Hoàng Mai, HN 
                                        </div>
                                        <div class="phone">
                                            <i class="fas fa-phone"></i>
                                            0907 860505 - 0936 860505
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="address">
                                        <div class="address-text">
                                            <i class="fas fa-map-marker-alt"></i>   
                                            CS 5: 400 Vũ Quỳnh, Nam Tư Liêm, HN 
                                        </div>
                                        <div class="phone">
                                            <i class="fas fa-phone"></i>
                                            0907 860505 - 0936 860505
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            
                        
                    </div>
                    <div class="info-wrap  align-center va-col-1-3 clearfix">
    
                        <div class="info-book ">
                            
                            <h3 class="book-me">
                                ĐẶT LỊCH
                            </h3>
                            <div class="input">
            
                                <input type="text" class="input-text" placeholder="Họ và tên">
                            </div>
                            <div class="input">
            
                                <input type="text" class="input-text" placeholder="Số điện thoại">
                            </div>
                            <div class="input">
            
                                <input type="text" class="input-text" placeholder="Email">
                            </div>
                            <div class="input">
                                <input type="text" class="input-text" placeholder="Nội dung">
                            </div>
                            <button class="btn btn-book">
                                Đặt lịch
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="why-choose-me">
        <div class="answer va-grid va-grid-medium-1-1 va-grid-large-1-2">
            <div class="answer-banner img-cover">
                <img src="resource/img/banner/banner.png" alt="">
            </div>
            <div class="answer-table">
                <h3 class="align-center ">
                    TẠI SAO CHỌN CHÚNG TÔI
                </h3>
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
            </div>
        </div>
    </section>
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
    <section class="wrap-cmt pt20">

        <div class="container container-center">
            <section class="heading mb30">
                    <h2 class="hello align-center  ">
                        CẢM NHẬN KHÁCH HÀNG
                    </h2>
            </section>
    
            <section class="customer va-grid va-grid-small-1-1 va-grid-medium-1-2 va-grid-large-1-3 va-grid-large clearfix">
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
                <div class="wrap-customer">

                    <div class="customer-cmt relative">
                        <p class="comment">
                        “Mình chuyên buôn bán xe ô tô cữ mới, có những chiếc xe màu sơn đã phai màu hẳn, rất cũ, nhưng khi sử dụng dịch vụ sơn tại Hà Thành xe sáng bóng như mới thực sự rất mãn nhãn."  
                        </p>
                        <div class="info-customer va-flex va-flex-middle ">
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
            </section>
        </div>
    </section>
    <section class="attention pt20">
        <div class="container-center container">
            <section class="heading mb30">
                <h2 class="hello align-center  ">
                    KIẾN THỨC - KINH NGHIỆM
                </h2>
            </section>
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
                    <?php $l++; } ?>
                </ul>
            </section>
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