<?php 
	include "ajax_config.php";

    $p = (isset($_POST['p'])) ? htmlspecialchars($_POST['p']) : 1;
    $get_page = $p;
    $curPage = $get_page;
	$per_page = 12;
	$startpoint = ($curPage * $per_page) - $per_page;
	$limit = " limit ". $startpoint . "," . $per_page;

    $html = '';

    $sanpham_moi = $d->rawQuery("select * from #_product where noibat>0 and hienthi>0 and type='san-pham' and luotxem < 50 order by stt,id desc $limit");

    if(isset($_COOKIE['location'])){
        $sanpham_moi = $d->rawQuery("select * from #_product where id_city = ? and noibat>0 and luotxem < 50 and  hienthi>0 and type='san-pham' order by stt,id desc $limit",array($_COOKIE['location']));
    }

    foreach ($sanpham_moi as $key => $value) {
        $html .= '
            <a href="'. $value['tenkhongdauvi'] .'-'. $value['id'] .'" class="item_sanpham">
                    <div class="img_sanpham scale-img">
                        <img class="" src="'.UPLOAD_PRODUCT_L . $value['photo'] .'" alt="'. $value['tenvi'] .'" title="'. $value['tenvi'] .'">
                    </div>
                    <div class="content_sanpham">
                        <div class="title_sanpham">
                            '. $value['tenvi'] .'
                        </div>
                        <div class="gia_sanpham">
                            Giá: '. $func->format_money($value['gia']) .'
                        </div>
                        <div class="tinhthanh_sanpham">
                            <i class="fas fa-map-marker-alt"></i> '.$func->getTable($value['id_city'], 'city')['ten'].'
                        </div>
                        <div class="thongtin_sanpham">
                            <div class="time_sanpham">
                                <img src="assets/images/product-user.svg" alt=""> '. $func->getTime($value['ngaytao']) .'
                            </div>
                            <div class="qt_sanpham">
                                <i class="fal fa-heart"></i>                         
                            </div>
                        </div>
                    </div>
                </a>
        ';
    }

    echo $html;