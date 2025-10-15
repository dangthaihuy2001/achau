<?php
if (!defined('SOURCES')) die("Error");

   
    $slider = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc", array('slide'));
    $slider2 = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc", array('slide2'));

    $kh = $d->rawQuery("select ten$lang, mota$lang, photo,diachi,nghenghiep, noidung$lang from #_news where type = ? and hienthi > 0 order by stt,id desc ", array('feedback'));

    $pronb_list = $d->rawQueryOne("select count(id) as numb from #_product where noibat>0 and hienthi>0 and type='san-pham'");
    $danhmuc_list = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao, id from #_product_list where hienthi>0 and type='san-pham' order by stt,id desc");
    $danhmucnb_list = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao, id from #_product_list where noibat>0 and hienthi>0 and type='san-pham' order by stt,id desc limit 0,3");
    $danhmucnb_list2 = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao, id from #_product_list where noibat>0 and hienthi>0 and type='san-pham' order by stt,id desc limit 3,5");

    $sanpham_moi = $d->rawQuery("select * from #_product where noibat>0 and hienthi>0 and type='san-pham' order by stt,id desc limit 12");
    
    $ct_list = $d->rawQueryOne("select count(id) as numb from #_news where noibat>0 and hienthi>0 and type='dich-vu'");



    $tintuc = $d->rawQuery("select ten$lang, tenkhongdau$lang, mota$lang, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc ", array('tin-tuc'));

    $thongbao = $d->rawQuery("select ten$lang, tenkhongdau$lang, id, photo,mota$lang from #_news where type = ? and hienthi > 0 order by stt,id desc ", array('thong-bao'));

    $video = $d->rawQuery("select ten$lang, id, video from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc ", array('video'));

    $nhommathang = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_list where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc", array('san-pham'));

    //
    $tienich = $d->rawQuery("select ten$lang, photo,tenkhongdauvi from #_news where type = ? and hienthi > 0 order by stt,id desc", array('tien-ich'));
    $dichvumoigioi = $d->rawQuery("select ten$lang, photo,tenkhongdauvi from #_news where type = ? and hienthi > 0 order by stt,id desc", array('dich-vu-moi-gioi'));
    $thanhtuu = $d->rawQuery("select photo, tenvi,motavi from #_photo where type = ? and hienthi > 0 order by stt,id desc", array('thanh-tuu'));
    $batdongsan = $d->rawQuery("select * from #_product where hienthi>0 and type='bat-dong-san' order by stt,id desc limit 6");
    //$tinhthanh = $d->rawQuery("select ten$lang, photo,tenkhongdauvi,motavi from #_news where type = ? and hienthi > 0 order by stt,id desc", array('tinh-thanh'));
  
    
    if(isset($_COOKIE['location'])){
        $sanpham_moi = $d->rawQuery("select * from #_product where id_city = ? and noibat>0 and hienthi>0 and type='san-pham' order by stt,id desc limit 12",array($_COOKIE['location']));
    }

/* SEO */
$seoDB = $seo->getSeoDB(0, 'setting', 'capnhat', 'setting');
if (!empty($seoDB['title' . $seolang])) $seo->setSeo('h1', $seoDB['title' . $seolang]);
if (!empty($seoDB['title' . $seolang])) $seo->setSeo('title', $seoDB['title' . $seolang]);
if (!empty($seoDB['keywords' . $seolang])) $seo->setSeo('keywords', $seoDB['keywords' . $seolang]);
if (!empty($seoDB['description' . $seolang])) $seo->setSeo('description', $seoDB['description' . $seolang]);
$seo->setSeo('url', $func->getPageURL());
$img_json_bar = (isset($logo['options']) && $logo['options'] != '') ? json_decode($logo['options'], true) : null;
if ($img_json_bar == null || ($img_json_bar['p'] != $logo['photo'])) {
    $img_json_bar = $func->getImgSize($logo['photo'], UPLOAD_PHOTO_L . $logo['photo']);
    $seo->updateSeoDB(json_encode($img_json_bar), 'photo', $logo['id']);
}
if (count($img_json_bar) > 0) {
    $seo->setSeo('photo', $config_base . THUMBS . '/' . $img_json_bar['w'] . 'x' . $img_json_bar['h'] . 'x2/' . UPLOAD_PHOTO_L . $logo['photo']);
    $seo->setSeo('photo:width', $img_json_bar['w']);
    $seo->setSeo('photo:height', $img_json_bar['h']);
    $seo->setSeo('photo:type', $img_json_bar['m']);
}
