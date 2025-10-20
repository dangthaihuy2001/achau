<?php
    /* dịch vụ */
    $nametype = "tin-dang";
    $config['news'][$nametype]['title_main'] = "Dịch vụ";
    $config['news'][$nametype]['check'] = array('noibat'=> 'Nổi bật');
    $config['news'][$nametype]['dropdown'] = true;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['icon'] = false;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 240;
    $config['news'][$nametype]['height'] = 200;
    $config['news'][$nametype]['width_icon'] = 80;
    $config['news'][$nametype]['height_icon'] = 80;
    $config['news'][$nametype]['thumb'] = '240x200x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Công trình (List) */
    $config['news'][$nametype]['title_main_list'] = "Danh mục cấp 1";
    $config['news'][$nametype]['images_list'] = false;
    $config['news'][$nametype]['show_images_list'] = false;
    $config['news'][$nametype]['slug_list'] = true;
    $config['news'][$nametype]['check_list'] = array();
    $config['news'][$nametype]['gallery_list'] = array();
    $config['news'][$nametype]['mota_list'] = false;
    $config['news'][$nametype]['mota_cke_list'] = false;
    $config['news'][$nametype]['noidung_list'] = false;
    $config['news'][$nametype]['noidung_cke_list'] = false;
    $config['news'][$nametype]['seo_list'] = false;
    $config['news'][$nametype]['width_list'] = 380;
    $config['news'][$nametype]['height_list'] = 270;
    $config['news'][$nametype]['thumb_list'] = '100x100x1';
    $config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    $nametype = "tien-ich";
    $config['news'][$nametype]['title_main'] = "Tiện ích";
    $config['news'][$nametype]['check'] = array('noibat'=> 'Nổi bật');
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['icon'] = false;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 240;
    $config['news'][$nametype]['height'] = 200;
    $config['news'][$nametype]['width_icon'] = 80;
    $config['news'][$nametype]['height_icon'] = 80;
    $config['news'][$nametype]['thumb'] = '240x200x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|webp|WEBP';


    $nametype = "nganh-nghe";
    $config['news'][$nametype]['title_main'] = "Ngành nghề";
    $config['news'][$nametype]['check'] = array();
    $config['news'][$nametype]['dropdown'] = true;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['icon'] = false;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['mota'] = false;
    $config['news'][$nametype]['noidung'] = false;
    $config['news'][$nametype]['noidung_cke'] = false;
    $config['news'][$nametype]['seo'] = false;
    $config['news'][$nametype]['width'] = 240;
    $config['news'][$nametype]['height'] = 200;
    $config['news'][$nametype]['width_icon'] = 80;
    $config['news'][$nametype]['height_icon'] = 80;
    $config['news'][$nametype]['thumb'] = '240x200x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|webp|WEBP';

    // $nametype = "tinh-thanh";
    // $config['news'][$nametype]['title_main'] = "Tỉnh thành";
    // $config['news'][$nametype]['check'] = array();
    // $config['news'][$nametype]['dropdown'] = false;
    // $config['news'][$nametype]['list'] = false;
    // $config['news'][$nametype]['view'] = true;
    // $config['news'][$nametype]['slug'] = true;
    // $config['news'][$nametype]['copy'] = true;
    // $config['news'][$nametype]['images'] = true;
    // $config['news'][$nametype]['icon'] = false;
    // $config['news'][$nametype]['show_images'] = true;
    // $config['news'][$nametype]['mota'] = true;
    // $config['news'][$nametype]['noidung'] = true;
    // $config['news'][$nametype]['noidung_cke'] = true;
    // $config['news'][$nametype]['seo'] = true;
    // $config['news'][$nametype]['width'] = 240;
    // $config['news'][$nametype]['height'] = 200;
    // $config['news'][$nametype]['width_icon'] = 80;
    // $config['news'][$nametype]['height_icon'] = 80;
    // $config['news'][$nametype]['thumb'] = '240x200x1';
    // $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|webp|WEBP';

    $nametype = "dich-vu-moi-gioi";
    $config['news'][$nametype]['title_main'] = "Dịch vụ môi giới";
    $config['news'][$nametype]['check'] = array('noibat'=> 'Nổi bật');
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['icon'] = false;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 240;
    $config['news'][$nametype]['height'] = 200;
    $config['news'][$nametype]['width_icon'] = 80;
    $config['news'][$nametype]['height_icon'] = 80;
    $config['news'][$nametype]['thumb'] = '240x200x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* tin tức */
    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['check'] = array('noibat'=> 'Nổi bật');
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['bando'] = false;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 240;
    $config['news'][$nametype]['height'] = 200;
    $config['news'][$nametype]['thumb'] = '240x200x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
  
    /* Công trình (List) */
    $config['news'][$nametype]['title_main_list'] = "Danh mục cấp 1";
    $config['news'][$nametype]['images_list'] = false;
    $config['news'][$nametype]['show_images_list'] = false;
    $config['news'][$nametype]['slug_list'] = true;
    $config['news'][$nametype]['check_list'] = array();
    $config['news'][$nametype]['gallery_list'] = array();
    $config['news'][$nametype]['mota_list'] = false;
    $config['news'][$nametype]['mota_cke_list'] = false;
    $config['news'][$nametype]['noidung_list'] = false;
    $config['news'][$nametype]['noidung_cke_list'] = false;
    $config['news'][$nametype]['seo_list'] = false;
    $config['news'][$nametype]['width_list'] = 380;
    $config['news'][$nametype]['height_list'] = 270;
    $config['news'][$nametype]['thumb_list'] = '100x100x1';
    $config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    $nametype = "thong-bao";
    $config['news'][$nametype]['title_main'] = "Thông báo";
    $config['news'][$nametype]['check'] = array();
    $config['news'][$nametype]['dropdown'] = true;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['bando'] = false;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['mota'] = false;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 300;
    $config['news'][$nametype]['height'] = 160;
    $config['news'][$nametype]['thumb'] = '300x160x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    $nametype = "thong-bao-user";
    $config['news'][$nametype]['title_main'] = "Thông báo tài khoản";
    $config['news'][$nametype]['check'] = array();
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['link'] = true;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['view'] = false;
    $config['news'][$nametype]['slug'] = false;
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['bando'] = false;
    $config['news'][$nametype]['images'] = false;
    $config['news'][$nametype]['show_images'] = false;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['thongbao'] = true;
    $config['news'][$nametype]['luachon'] = true;
    $config['news'][$nametype]['noidung'] = false;
    $config['news'][$nametype]['noidung_cke'] = false;
    $config['news'][$nametype]['seo'] = false;
    $config['news'][$nametype]['width'] = 300;
    $config['news'][$nametype]['height'] = 160;
    $config['news'][$nametype]['thumb'] = '300x160x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    
    $nametype = "thong-bao-admin";
    $config['news'][$nametype]['title_main'] = "Thông báo admin";
    $config['news'][$nametype]['check'] = array();
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['link'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['view'] = false;
    $config['news'][$nametype]['slug'] = false;
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['bando'] = false;
    $config['news'][$nametype]['images'] = false;
    $config['news'][$nametype]['show_images'] = false;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['thongbao_admin'] = true;
    $config['news'][$nametype]['luachon2'] = true;
    $config['news'][$nametype]['noidung'] = false;
    $config['news'][$nametype]['noidung_cke'] = false;
    $config['news'][$nametype]['seo'] = false;
    $config['news'][$nametype]['width'] = 300;
    $config['news'][$nametype]['height'] = 160;
    $config['news'][$nametype]['thumb'] = '300x160x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    
    /* tin tức */
    $nametype = "video";
    $config['news'][$nametype]['title_main'] = "Video";
    $config['news'][$nametype]['check'] = array('noibat'=> 'Nổi bật');
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = false;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['video'] = true;
    $config['news'][$nametype]['bando'] = false;
    $config['news'][$nametype]['images'] = false;
    $config['news'][$nametype]['show_images'] = false;
    $config['news'][$nametype]['mota'] = false;
    $config['news'][$nametype]['noidung'] = false;
    $config['news'][$nametype]['noidung_cke'] = false;
    $config['news'][$nametype]['seo'] = false;
    $config['news'][$nametype]['width'] = 240;
    $config['news'][$nametype]['height'] = 200;
    $config['news'][$nametype]['thumb'] = '240x200x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
  


    /* Đánh giá khách hàng */
    $nametype = "feedback";
    $config['news'][$nametype]['title_main'] = "Đánh giá khách hàng";
    $config['news'][$nametype]['check'] = array();
    $config['news'][$nametype]['view'] = false;
    $config['news'][$nametype]['slug'] = false;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['nghenghiep'] = true;
    $config['news'][$nametype]['diachi'] = true;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['mota_cke'] = false;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = false;
    $config['news'][$nametype]['seo'] = false;
    $config['news'][$nametype]['width'] = 195;
    $config['news'][$nametype]['height'] = 195;
    $config['news'][$nametype]['thumb'] = '195x195x2';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Công trình (List) */
    $nametype = "khuyen-mai";
    $config['news'][$nametype]['title_main'] = "Khuyến mãi";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['cat'] = false;
    $config['news'][$nametype]['item'] = false;
    $config['news'][$nametype]['sub'] = false;
    $config['news'][$nametype]['tags'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array('noibat' => 'Nổi bật');
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 380;
    $config['news'][$nametype]['height'] = 270;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    $nametype = "bang-gia";
    $config['news'][$nametype]['title_main'] = "Bảng giá";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['cat'] = false;
    $config['news'][$nametype]['item'] = false;
    $config['news'][$nametype]['sub'] = false;
    $config['news'][$nametype]['tags'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array('noibat' => 'Nổi bật');
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 380;
    $config['news'][$nametype]['height'] = 270;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Công trình (List) */
    $config['news'][$nametype]['title_main_list'] = "Danh mục cấp 1";
    $config['news'][$nametype]['images_list'] = false;
    $config['news'][$nametype]['show_images_list'] = false;
    $config['news'][$nametype]['slug_list'] = true;
    $config['news'][$nametype]['check_list'] = array();
    $config['news'][$nametype]['gallery_list'] = array();
    $config['news'][$nametype]['mota_list'] = false;
    $config['news'][$nametype]['mota_cke_list'] = false;
    $config['news'][$nametype]['noidung_list'] = false;
    $config['news'][$nametype]['noidung_cke_list'] = false;
    $config['news'][$nametype]['seo_list'] = false;
    $config['news'][$nametype]['width_list'] = 380;
    $config['news'][$nametype]['height_list'] = 270;
    $config['news'][$nametype]['thumb_list'] = '100x100x1';
    $config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Tin tức */
    /*$nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['dropdown'] = true;
    $config['news'][$nametype]['list'] = true;
    $config['news'][$nametype]['cat'] = false;
    $config['news'][$nametype]['item'] = false;
    $config['news'][$nametype]['sub'] = false;
    $config['news'][$nametype]['tags'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array('noibat' => 'Nổi bật');
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 547;
    $config['news'][$nametype]['height'] = 241;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Tin tức (List) * /
    $config['news'][$nametype]['title_main_list'] = "Danh mục cấp 1";
    $config['news'][$nametype]['images_list'] = true;
    $config['news'][$nametype]['show_images_list'] = true;
    $config['news'][$nametype]['slug_list'] = true;
    $config['news'][$nametype]['check_list'] = array();
    $config['news'][$nametype]['gallery_list'] = array();
    $config['news'][$nametype]['mota_list'] = false;
    $config['news'][$nametype]['mota_cke_list'] = false;
    $config['news'][$nametype]['noidung_list'] = false;
    $config['news'][$nametype]['noidung_cke_list'] = false;
    $config['news'][$nametype]['seo_list'] = true;
    $config['news'][$nametype]['width_list'] = 320;
    $config['news'][$nametype]['height_list'] = 240;
    $config['news'][$nametype]['thumb_list'] = '100x100x1';
    $config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';*/

    

    /* Hình thức thanh toán *-/
    $nametype = "hinh-thuc-thanh-toan";
    $config['news']['hinh-thuc-thanh-toan']['title_main'] = "Hình thức thanh toán";
    $config['news']['hinh-thuc-thanh-toan']['check'] = array();
    $config['news']['hinh-thuc-thanh-toan']['mota'] = true;

    /* Quản lý mục (Không cấp) */
    if(isset($config['news']))
    {
        foreach($config['news'] as $key => $value)
        {
            if(!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false))
            { 
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>