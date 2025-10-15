<?php if ($com != 'index2') { ?>
    <section class="sc_doitac pb-4">
        <div class="fixwidth">
            <div class="title"><span>Trở Thành Đối Tác</span></div>
            <div class="row">
                <?php foreach ($tieuchi as $key => $value) { ?>
                    <div class="col-md-3 pl-2 pr-2 mb-3 col-12">
                        <div class="item_tieuchi">
                            <div class="img_tieuchi">
                                <img class="skeleton mm-lazyload" data-src="<?= UPLOAD_PHOTO_L . $value['photo'] ?>" alt="<?= $value['tenvi'] ?>">
                            </div>
                            <div class="content_tieuchi">
                                <div class="title_tieuchi"><?= $value['tenvi'] ?></div>
                                <div class="des_tieuchi"><?= $value['motavi'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="sc_uudai pb-4">
        <div class="fixwidth">
            <div class="title"><span>Ưu Đãi Chương Trình</span></div>
            <div class="row">
                <?php foreach ($banner as $key => $value) { ?>
                    <div class="col-md-6 pl-2 pr-2 mb-3 col-12">
                        <div class="item_banner sacle-img">
                            <img class="skeleton mm-lazyload" data-src="<?= UPLOAD_PHOTO_L . $value['photo'] ?>" alt="">
                            <div class="timhieu">Tìm hiểu ngay</div>
                        </div>
                    </div>
                <?php   } ?>
            </div>
        </div>
    </section>

    <section class="sc_intro py-4">
        <div class="fixwidth">
            <div class="row">
                <div class="col-md-8 pl-2 pr-2 mb-3 col-12">
                    <div class="title2"><span>ALOCHOVIET.COM</span></div>
                    <div class="des_intro"><?= htmlspecialchars_decode($gioithieu['motavi']) ?></div>
                </div>
                <div class="col-md-4 pl-2 pr-2 mb-3 col-12">
                    <div class="img_intro scale-img">
                        <img src="<?= UPLOAD_NEWS_L . $gioithieu['photo'] ?>" alt="" srcset="">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="sc_tag pb-4">
        <div class="fixwidth">
            <div class="box_tag">
                <div class="items_tag">
                    <div class="title_tag"><i class="fad fa-ellipsis-v-alt"></i> Từ khóa phổ biến</div>
                    <?php foreach ($tagsProduct as $key => $value) { ?>
                        <a href="<?= $value['tenkhongdauvi'] ?>" class="item_tag">
                            <i class="fas fa-circle"></i> <?= $value['tenvi'] ?>
                        </a>
                    <?php  } ?>
                </div>
                <div class="items_tag">
                    <div class="title_tag"><i class="fad fa-ellipsis-v-alt"></i> Danh mục mua bán</div>
                    <?php foreach ($tagsProduct as $key => $value) { ?>
                        <a href="<?= $value['tenkhongdauvi'] ?>" class="item_tag">
                            <i class="fas fa-circle"></i> <?= $value['tenvi'] ?>
                        </a>
                    <?php  } ?>
                </div>
                <div class="items_tag">
                    <div class="title_tag"><i class="fad fa-ellipsis-v-alt"></i> Danh mục cho thuê</div>
                    <?php foreach ($tagsProduct as $key => $value) { ?>
                        <a href="<?= $value['tenkhongdauvi'] ?>" class="item_tag">
                            <i class="fas fa-circle"></i> <?= $value['tenvi'] ?>
                        </a>
                    <?php  } ?>
                </div>
                <div class="items_tag">
                    <div class="title_tag"><i class="fad fa-ellipsis-v-alt"></i> Danh mục cho thuê</div>
                    <?php foreach ($tagsProduct as $key => $value) { ?>
                        <a href="<?= $value['tenkhongdauvi'] ?>" class="item_tag">
                            <i class="fas fa-circle"></i> <?= $value['tenvi'] ?>
                        </a>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


<div class="boxfooter_container ">
    <div class="fixwidth">
        <div class="row justify-content-between">
            <div class="col-md-3 pl-2 pr-4 mb-3 col-12">
                <div class="tit_ft">TÌM SẢN PHẨM TRÊN WEB ALOCHOVIET</div>
                <div class="items_qr">
                    <div class="item_qr">
                        <img width="150" src="assets/images/ban-lam-viec-athena.png" alt="" srcset="">
                    </div>
                    <div class="item_qr2">
                        <img src="assets/images/images.jpg" alt="" srcset="">
                        <img src="assets/images/496806219_3936468913282255_5199087902148876381_n.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="col-md-3 pl-4 pr-4 mb-3 col-12">
                <div class="box_cs">
                    <div class="tit_ft">VỀ ALOCHOVIET</div>
                    <p>
                        <a href="#">- Về AlochoViet</a>
                    </p>
                    <p>
                        <a href="#">- Quy chế hoạt động sàn</a>
                    </p>
                    <p>
                        <a href="#">- Chính sách hoạt động</a>
                    </p>
                    <p>
                        <a href="#">- Điều khoản</a>
                    </p>

                </div>
            </div>
            <div class="col-md-3 pl-4 pr-4 mb-3 col-12">
                <div class="box_cs">
                    <div class="tit_ft">HỖ TRỢ KHÁCH HÀNG</div>
                    <p>
                        <a href="#">- Trung tâm trợ giúp</a>
                    </p>
                    <p>
                        <a href="#">- An toàn mua bán</a>
                    </p>
                    <p>
                        <a href="#">- Liên hệ hỗ trợ</a>
                    </p>
                    <p>
                        <a href="#">- Blog</a>
                    </p>

                </div>
            </div>
            <div class="col-md-3 pl-4 pr-2 mb-3 col-12">
                <div class="tit_ft">LIÊN KẾT MXH</div>
                <div>
                    <?php foreach ($social1 as $v) { ?>
                        <a href="<?= $v['link'] ?>" class="ftmxh mr-2" target="_blank" title="<?= $v['ten' . $lang] ?>"><img width="30" onerror="this.src='<?= THUMBS ?>/30x30x2/assets/images/noimage.png';" src="<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" /></a>
                    <?php } ?>
                </div>
                <div class="tit_ft mt-4 mb-0">CHỨNG NHẬN</div>
                <div>
                    <img width="150" src="assets/images/logoSaleNoti.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="boxfooter_bottom ">
        <hr>
        <div class="fixwidth d-flex justify-content-between flex-wrap">
            <div><?= $optsetting['copyright'] ?>. All rights reserved. Design by sotagroup.vn </div>
            <div>Online: <?= $online ?> | Hôm nay: <?= $counter['today'] ?> | Tổng: <?= $counter['total'] ?></div>
        </div>
    </div>
</div>