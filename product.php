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
    <div class="    bg-all-product">
        <div class="container container-center">
            <div class="all-menu-product  align-center">
                <h2 class="uppercase white">new product collection</h2>
                <p class="white">
                    NextEvent is a library of corporate and business templates with predefined web element which helps you to
                    build your own site.
                </p>
            </div>
        </div>
    </div>
    <section class="lib pt20">
        <div class="container-center container">
            <section class="heading  mb30">
                <h2 class="hello align-center mb20 ">
                    Sản phẩm
                </h2>
                <div class="align-center">See what new products are available in online shop</div>
            </section>
            <section class="lib-panel">
                <ul class="lib-list va-grid-large clearfix va-grid  va-grid-small-1-1 va-grid-medium-1-2 va-grid-large-1-4 ">
                <?php 
                    $lib = array(
                        0 => array(
                            'head' => 'Dầu máy Mobil Super   ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        1 => array(
                            'head' => 'Phanh đĩa Mobil Super   ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        
                        ),
                        2 => array(
                            'head' => 'Gương ô tô Mobil Super   ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        3 => array(
                            'head' => 'Tay lái ô tô Mobil Super   ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        4 => array(
                            'head' => 'Dầu máy Mobil Super   ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        5 => array(
                            'head' => 'Phanh đĩa Mobil Super  ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        6 => array(
                            'head' => 'Gương ô tô Mobil Super    ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        7 => array(
                            'head' => 'Tay lái ô tô Mobil Super  ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        

                    )
                ?>
                    <?php $g=0;for($b = 1; $b <=8  ; $b++){?>
                    <li>
                        <div class="lib-panel ">
                            <a href="" title="" class="img-scaledown lib-img">
                                <img src="resource/img/product/product-<?php echo $b;?>.png" alt="">
                            </a>
                            <div class="lib-heading ">
                                
                                <div class="lib-info  ">
                                    <?php echo $lib[$g]['head']?> 
                                </div>
                                <div class="product-price align-center" >
                                    <span class="old-price mr10"><?php echo $lib[$g]['old-price']?>  </span>
                                    <span><?php echo $lib[$g]['new-price']?> </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $g++; } ?>
                </ul>
            </section>
        </div>
        <div class="product-banner">
            <div class="container-center container">
                <div class="va-flex va-justify-center va-flex-middle va-grid clearfix va-grid-1-2 va-grid-x-large">
                    <div class="product-banner-img img-scaledown">
                        <img src="resource/img/banner/banner-product.png" alt="">
                    </div>
                    <div class="product-banner-text">
                        <span>Big discout!</span>
                        <div class="banner-product-slogan">New Trendy Products</div>
                        <div class="product-sale">
                             Up to 21% off on all product!
                        </div>
                        <button value="see">Shop now</button>
                    </div>
                </div>
            </div>
        </div>
        <section class="heading  mb30">
                <h2 class="hello align-center mb20 ">
                    Sản phẩm khuyến mãi  
                </h2>
                <div class="align-center">See what new products are available in online shop</div>
            </section>
        <section class="lib-panel">
                <ul class="lib-list va-grid-large clearfix va-grid  va-grid-small-1-1 va-grid-medium-1-2 va-grid-large-1-4 ">
                <?php 
                    $lib = array(
                        0 => array(
                            'head' => 'Dầu máy Mobil Super   ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        1 => array(
                            'head' => 'Phanh đĩa Mobil Super   ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        
                        ),
                        2 => array(
                            'head' => 'Gương ô tô Mobil Super   ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        3 => array(
                            'head' => 'Tay lái ô tô Mobil Super   ',
                            'old-price' => '299.000 đ',
                            'new-price' => ' 199.000đ '
                            
                        ),
                        
                        

                    )
                ?>
                    <?php $g=0;for($b = 1; $b <=4  ; $b++){?>
                    <li>
                        <div class="lib-panel ">
                            <a href="" title="" class="img-scaledown lib-img">
                                <img src="resource/img/product/product-<?php echo $b;?>.png" alt="">
                            </a>
                            <div class="lib-heading ">
                                
                                <div class="lib-info  ">
                                    <?php echo $lib[$g]['head']?> 
                                </div>
                                <div class="product-price align-center" >
                                    <span class="old-price mr10"><?php echo $lib[$g]['old-price']?>  </span>
                                    <span><?php echo $lib[$g]['new-price']?> </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $g++; } ?>
                </ul>
            </section>
    </section>

    <?php require_once('common/footer.php') ?>
</body>
</html>