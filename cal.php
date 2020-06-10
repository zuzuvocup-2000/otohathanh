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
                    <h2 class="m0">BẢNG TÍNH GIÁ XE LĂN BÁNH</h2>
                </div>
                <ul class="va-flex all-item">
                    <li><a href="" title="">Trang chủ</a></li>
                    <li><a href="" title="">Bảng tính giá xe lăn bánh</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="cal-panel">
        <div class="container container-center">

            <h2 class="hello align-center mb20 ">
                BẢNG TÍNH GIÁ XE LĂN BÁNH
            </h2>
            <div class="payment-infor">
                <div class="va-grid va-grid-x-large va-grid-large-1-2 clearfix">
                    <div class="cal-cost">
                        <h3 class="uppercase">
                            chi phí lăn bánh
                        </h3>
                        <?php $cost = array(
                            0 => array(
                                'head' => 'Mục đích dùng',
                                
                                'text' =>  array(
                                    1 => 'Cá nhân',
                                    2 => 'Doanh nghiệp',
                                    3 => 'Công ty',
                                ) 
                            ),
                            1 => array(
                                'head' => 'Nơi đăng ký',
                                
                                'text' => array(
                                    1 => 'Hà Nội',
                                    2 => 'Hưng Yên',
                                    3 => 'Bắc Giang'
                                ) 
                            
                            ),
                            2 => array(
                                'head' => 'Hãng xe',
                                
                                'text' => array(
                                    1 => 'Toyota',
                                    2 => 'Vinfast',
                                    3 => 'Honda'
                                ) 
                            ),
                            3 => array(
                                'head' => 'Kiểu dáng * ',
                                
                                'text' => array(
                                    1 => 'Thể thao',
                                    2 => 'Bán tải',
                                    3 => 'Limo'
                                ) 
                                
                            ),
                            4 => array(
                                'head' => 'Phiên bản* ',
                                    
                                'text' => array(
                                    1 => '2018',
                                    2 => '2019',
                                    3 => 'Mới nhất'
                                ) 
                            )
                        )

                        ?>
                        <ul class="cost-list">
                            <?php $m=0;for($i=1;$i<=5;$i++){?>
                            <li class="va-grid clearfix ">
                                <div class="va-col-1-4 cal-content">
                                    <?php echo $cost[$m]['head']?> 
                                </div>
                                <div class="va-col-3-4 ">
                                    <form class="menu-drop">
                                        <select  id="selected">
                                            <?php for($j=1;$j<=3;$j++){?>
                                                <?php echo "<option>". $cost[$m]['text'][$j]    ."</option>"?>
                                            
                                            <?php } ?>
                                        </select>
                                    </form>
                                    
                                    
                                    
                                </div>
                            </li>
                            <?php $m++;}?>
                            <li class="va-grid clearfix ">
                                <div class="va-col-1-4">
                                    
                                </div>
                                <div class="va-col-3-4 btn-cal">
                                    <button value="tính" class="mb10"> Tính toán</button>
                                    <div class="note">*Công tụ tính toán chỉ mang tính chất tham khảo</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="cal-quote">
                        <h3 class="uppercase">
                            báo giá mới nhất
                        </h3>
                        <?php $quote = array(
                            0 => array(
                                'head' => 'Họ và tên',

                                
                            ),
                            1 => array(
                                'head' => 'Số điện thoại',
                                
                            
                            ),
                            2 => array(
                                'head' => 'Khu vực',
                                'text' => array(
                                    1 => 'Hoàn Kiếm',
                                    2 => 'Hai Bà Trưng',
                                    3 => 'Hoàng Mai'
                                ),
                            ),
                            3 => array(
                                'head' => 'Hãng xe ',
                                'text' => array(
                                    1 => 'Toyota',
                                    2 => 'Vinfast',
                                    3 => 'Honda'
                                
                                )
                            ) 
                                );   
                        // Kiem tra mang
                        // print_r($quote);die();
                        ?>
                            <div class="quote-text pt10 pb10">Chỉ mất 1 phút nhập thông tin để <span>CÓ NGAY</span>  báo giá lăn bánh chiếc xe anh chị đang quan tâm</div>
                            <ul class="quote-list">
                                <?php $l=0;for($i=1;$i<=4;$i++){?>
                                <li class="va-grid clearfix ">
                                    <div class="va-col-1-4 cal-content">
                                        <?php echo $quote[$l]['head'];?> 
                                    </div>
                                    <div class="va-col-3-4 ">
                                        <form class="menu-drop">
                                            <?php
                                                if($i==1){
                                            ?>
                                                <input type="text" id="name" name="name" placeholder="Họ và tên của bạn">
                                            <?php } ?>
                                            <?php
                                                if($i==2){
                                            ?>
                                                <input type="text" id="phone" name="phone" placeholder="Số điện thoại">
                                            <?php } ?>
                                            <?php 
                                            if($i>=3){?>
                                            <select  id="selected">
                                                

                                                    <?php for($j=1;$j<=3;$j++){?>
                                                        <?php echo "<option>". $cost[$l]['text'][$j]    ."</option>"?>
                                                    
                                                <?php } ?>
                                            </select>
                                            <?php }?>
                                        </form>
                                    </div>
                                    
                                </li>
                                <?php $l++;}?>
                                <li class="va-grid clearfix ">
                                    <div class="va-col-1-4">
                                        
                                    </div>
                                    <div class="va-col-3-4 btn-send-request">
                                        <button value="tính"> Tính toán</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="attention-text">
                        <p>Giá lăn bánh Ô tô là giá đã bao gôm VAT và Chi phí đăng ký tại địa phương. Chi phí đăng ký lăn bánh ra biển tại Hà Nội, HCM
                            và các tỉnh thành khác nhau. Dưới đây là Công cụ tính chi phí  ô tô lăn bánh mới nhất tại Việt Nam:
                        </p>
                        <p>Chi phí bắt buộc và theo quy định, barem của nhà nước:</p>
                        <ul class="attention-list"> 
                            <li class="attention-item">Chi phí thuế trước bạ từ 10% - 12% tùy theo địa phương.</li>
                            <li class="attention-item">Biển số xe 200.000vnd - 1.000.000vnd  các tỉnh thành riêng Hà Nội, HCM 20tr</li>
                            <li class="attention-item">Bảo hiểm trách nhiệm dân sự tùy theo chỗ ngồi và mục đích sử dụng 480.000vnd - 873.000vnd</li>
                            <li class="attention-item">Phí đăng kiểm 340.000vnd</li>
                            <li class="attention-item">Phí đường bộ 130.000vnd/tháng -  đăng ký cá nhân: 180.000vnd/tháng - đăng kí doanh nghiệp</li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    
    <?php require_once('common/footer.php') ?>
</body>
</html>