<div id="menu_topp">
    <div class="header-cachtop">
        <div class="header-top">
            <div class="fixwidth d-flex justify-content-between align-self-center flex-wrap">
                <div class="menu_mobi align-self-center">
                    <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                    <a href="" class="home_mobi">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="header_left_mobile align-self-center">
                    <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x200x1/assets/images/noimage.png';" src="<?= THUMBS ?>/0x200x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
                </div>
                <div class="menu_mobi_add">
                    <div class="frm_timkiem">
                        <input type="text" class="input" id="keyword" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword');">
                        <button type="submit" class="nut_tim" onclick="onSearch('keyword');"><i class="far fa-search"></i></button>
                    </div>
                </div>
                <!-- <div class="diachi-top"><?= $optsetting['diachi'] ?></div>
                <div>
                    <?php foreach ($social1 as $v) { ?>
                        <a href="<?= $v['link'] ?>" class="ftmxh" target="_blank" title="<?= $v['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/30x30x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" /></a>
                    <?php } ?>
                </div> -->
                <div class="box_menu_top">
                    <div class="menu_left">
                        <a href="">Chợ Việt</a>
                        <a href="">Nhà Việt</a>
                        <a href="">Việc làm</a>
                    </div>
                    <div class="menu_right">
                        <a href="">Trang chủ</a>
                        <a href="">Giới thiệu</a>
                        <a href="">Liên hệ</a>
                        <a href="">Đóng góp ý kiến</a>
                        <a href="">Tải ứng dụng</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="fixwidth d-flex justify-content-between flex-wrap align-items-center">
                <div class="header_left align-self-center">
                    <a class="header_logo" href=""><img class="skeleton mm-lazyload" data-src="<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" id="logo-img" /></a>
                </div>
                <div class="header_right">
                    <div class="danhmuc__list">
                        <div class="title_danhmuc"><i class="fal fa-list-ul"></i> <span>Danh mục</span> <i class="far fa-chevron-down"></i></div>
                        <div class="items_danhmuc--menu">
                            <?php foreach ($splistmenu as $key => $value) { ?>
                                <a href="<?= $value['tenkhongdauvi'] ?>" class="item_danhmuc--menu">
                                    <i class="far fa-angle-right"></i> <?= $value['tenvi'] ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="menu_timkiem">
                        <div class="title_vitri" style="<?= $id_city_current > 0 ? 'width: 40%;' : '' ?>">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>
                                <?= $id_city_current > 0 ? $func->getTable($id_city_current, "city")['ten'] : 'Chọn tỉnh thành' ?>

                            </span>
                            <i class="far fa-chevron-down ml-3"></i>
                        </div>
                        <div class="items_vitri--menu">
                            <?php foreach ($tinhthanh as $key => $value) { ?>
                                <a class="item_vitri--menu <?= $func->checkLocation($value['id'], $_GET['id_city']) > 0 ? 'active' : '' ?>" id="<?= $value['id'] ?>">
                                    <i class="far fa-angle-right"></i> <span><?= $value['ten'] ?></span>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="frm_timkiem">
                            <input type="text" class="input" id="keyword1" placeholder="Tìm kiếm" value="<?= isset($_GET['keyword']) && $_GET['keyword'] != '' ? $_GET['keyword'] : '' ?>" onkeypress="doEnter(event,'keyword1');">
                            <button type="submit" class="nut_tim" onclick="onSearch('keyword1');"><i class="far fa-search"></i></button>
                        </div>
                    </div>
                    <div class="box_other">
                        <a class="menu_noti">
                            <i class="far fa-bell"></i>
                            <span><?= $countThongbao ?></span>
                        </a>
                        <div class="modal_noti">
                            <div class="title_modal_noti">
                                Thông báo
                            </div>
                            <div class="items_noti_modal">
                                <?php foreach ($thongbaoUser as $key => $value) {
                                    if ($value['luachon'] == 'user' && isset($_SESSION[$login_member]['active'])) { ?>
                                        <a href="<?= $value['link'] ?>" class="item_noti_modal <?= $value['hienthi'] == 0 ? 'noread' : '' ?>" data-id="<?= $value['id'] ?>" target="_blank">
                                            <div class="title__modal_noti">
                                                <span><i class="far fa-bell"></i></span>
                                                <span><?= $value['tenvi'] ?></span>
                                                <span><?= $func->timeAgo($value['ngaytao']) ?></span>
                                            </div>
                                            <div class="des_modal_noti">
                                                <span><?= $value['motavi'] ?></span>
                                            </div>
                                        </a>
                                    <?php } elseif ($value['luachon'] == 'all') {  ?>
                                        <a href="<?= $value['link'] ?>" class="item_noti_modal <?= $value['hienthi'] == 0 ? 'noread' : '' ?>" target="_blank" data-id="<?= $value['id'] ?>">
                                            <div class="title__modal_noti">
                                                <span><i class="far fa-bell"></i></span>
                                                <span><?= $value['tenvi'] ?></span>
                                                <span><?= $func->timeAgo($value['ngaytao']) ?></span>
                                            </div>
                                            <div class="des_modal_noti">
                                                <span><?= $value['motavi'] ?></span>
                                            </div>
                                        </a>
                                    <?php  }  ?>

                                <?php } ?>
                            </div>
                        </div>
                        <?php if (isset($_SESSION[$login_member]['active']) && $_SESSION[$login_member]['active'] == true) { ?>
                            <div class="menu_chat">
                                <i class="fal fa-comment-alt-lines"></i>
                                <span>1</span>
                            </div>
                        <?php } ?>
                        <a href="quan-ly-tin" class="menu_post">
                            <i class="fal fa-list-alt"></i> Quản lý tin
                        </a>
                    </div>
                    <div class="menu_account">
                        <?php if (isset($_SESSION[$login_member]['active'])) { ?>
                            <a href="account/dang-xuat" class="menu_login">
                                <i class="far fa-user"></i> <?= $_SESSION[$login_member]['ten'] ?>
                            </a>
                        <?php } else { ?>
                            <a href="account/dang-nhap" class="menu_login">
                                <i class="fal fa-sign-in"></i> Đăng nhập
                            </a>
                        <?php } ?>
                        <a href="dang-tin" class="menu_logout">
                            <i class="fal fa-edit"></i> Đăng tin
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-height d-none">
        <div id="menu_top">
            <div class="fixwidth clearfix">
                <div class="menu">
                    <ul class="menu_cap_cha d-flex">
                        <li class="menulicha <?= $source == 'index' ? 'trangchu active' : '' ?>"><a href="" title="TRANG CHỦ">TRANG CHỦ</a></li>
                        <li class="menulicha <?= $com == 'gioi-thieu' ? 'trangchu active' : '' ?>"><a href="gioi-thieu" title="GIỚI THIỆU">GIỚI THIỆU</a></li>
                        <li class="menulicha <?= $com == 'san-pham' ? 'trangchu active' : '' ?>"><a href="san-pham" title="SẢN PHẨM">SẢN PHẨM</a>
                            <?php if ($splistmenu) { ?>
                                <ul class="menu_cap_con">
                                    <?php foreach ($splistmenu as $c => $cat) { ?>
                                        <li><a title="<?= $cat['ten' . $lang] ?>" href="<?= $cat[$sluglang] ?>"><?= $cat['ten' . $lang] ?></a>
                                            <?php
                                            $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat['id']));
                                            if (count($spcatmenu) > 0) { ?>
                                                <ul class="menu_cap_2">
                                                    <?php foreach ($spcatmenu as $c1 => $cat1) {
                                                        $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_item where type = ? and id_cat = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat1['id']));
                                                    ?>
                                                        <li><a title="<?= $cat1['ten' . $lang] ?>" href="<?= $cat1[$sluglang] ?>"><?= $cat1['ten' . $lang] ?></a>
                                                            <?php if (count($spitemmenu) > 0) { ?>
                                                                <ul class="menu_cap_3">
                                                                    <?php foreach ($spitemmenu as $c1 => $cat2) { ?>
                                                                        <li><a title="<?= $cat2['ten' . $lang] ?>" href="<?= $cat2[$sluglang] ?>"><?= $cat2['ten' . $lang] ?></a></li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php } ?>

                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                        <li class="menulicha <?= $com == 'khuyen-mai' ? 'trangchu active' : '' ?>"><a href="khuyen-mai" title="KHUYẾN MÃI">KHUYẾN MÃI</a></li>
                        <li class="menulicha <?= $com == 'dich-vu' ? 'trangchu active' : '' ?>"><a href="dich-vu" title="DỊCH VỤ">DỊCH VỤ</a></li>
                        <li class="menulicha <?= $com == 'bang-gia' ? 'trangchu active' : '' ?>"><a href="bang-gia" title="BẢNG GIÁ">BẢNG GIÁ</a></li>
                        <li class="menulicha <?= $com == 'tin-tuc' ? 'trangchu active' : '' ?>"><a href="tin-tuc" title="TIN TỨC">TIN TỨC</a></li>
                        <li class="menulicha <?= $com == 'lien-he' ? 'trangchu active' : '' ?>"><a href="lien-he" title="LIÊN HỆ">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>