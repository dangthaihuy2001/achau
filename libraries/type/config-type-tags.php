<?php


    $nametype = "tu-khoa";
    $config['tags'][$nametype]['title_main'] = "Từ khóa";
    $config['tags'][$nametype]['slug'] = false;
    $config['tags'][$nametype]['images'] = false;
    $config['tags'][$nametype]['show_images'] = false;
    $config['tags'][$nametype]['check'] = array();
    $config['tags'][$nametype]['seo'] = false;
    $config['tags'][$nametype]['width'] = 300;
    $config['tags'][$nametype]['height'] = 200;
    $config['tags'][$nametype]['thumb'] = '100x100x1';
    $config['tags'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Tags Sản phẩm */
    $nametype = "san-pham";
    $config['tags'][$nametype]['title_main'] = "Tags mua bán";
    $config['tags'][$nametype]['slug'] = true;
    $config['tags'][$nametype]['images'] = false;
    $config['tags'][$nametype]['show_images'] = false;
    $config['tags'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['tags'][$nametype]['seo'] = false;
    $config['tags'][$nametype]['width'] = 300;
    $config['tags'][$nametype]['height'] = 200;
    $config['tags'][$nametype]['thumb'] = '100x100x1';
    $config['tags'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    $nametype = "cho-thue";
    $config['tags'][$nametype]['title_main'] = "Tags cho thuê";
    $config['tags'][$nametype]['slug'] = true;
    $config['tags'][$nametype]['images'] = false;
    $config['tags'][$nametype]['show_images'] = false;
    $config['tags'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['tags'][$nametype]['seo'] = false;
    $config['tags'][$nametype]['width'] = 300;
    $config['tags'][$nametype]['height'] = 200;
    $config['tags'][$nametype]['thumb'] = '100x100x1';
    $config['tags'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    /* Tags tin tức */
    $nametype = "tin-tuc";
    $config['tags'][$nametype]['title_main'] = "Tags tin tức";
    $config['tags'][$nametype]['slug'] = true;
    $config['tags'][$nametype]['images'] = true;
    $config['tags'][$nametype]['show_images'] = true;
    $config['tags'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['tags'][$nametype]['seo'] = true;
    $config['tags'][$nametype]['width'] = 300;
    $config['tags'][$nametype]['height'] = 200;
    $config['tags'][$nametype]['thumb'] = '100x100x1';
    $config['tags'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    // $nametype = "tag-tim-kiem";
    // $config['tags'][$nametype]['title_main'] = "Tags tin tức";
    // $config['tags'][$nametype]['slug'] = true;
    // $config['tags'][$nametype]['images'] = true;
    // $config['tags'][$nametype]['show_images'] = true;
    // $config['tags'][$nametype]['check'] = array("noibat" => "Nổi bật");
    // $config['tags'][$nametype]['seo'] = true;
    // $config['tags'][$nametype]['width'] = 300;
    // $config['tags'][$nametype]['height'] = 200;
    // $config['tags'][$nametype]['thumb'] = '100x100x1';
    // $config['tags'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
?>