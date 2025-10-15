<section class="sc_thanhtuu">
    <div class="fixwidth">
        <div class="row">
            <?php foreach ($thanhtuu as $key => $value) { ?>
                <div class="col-md-3 pl-2 pr-2 mb-3 col-6">
                    <div class="item_tieuchi">
                        <div class="img_tieuchi">
                            <img src="<?= UPLOAD_PHOTO_L . $value['photo'] ?>" alt="<?= $value['tenvi'] ?>">
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

<section class="sc_batdongsan py-4">
    <div class="fixwidth">
        <div class="title"><span>Bất Động Sản Theo Khu Vực</span></div>
        <ul class="nav navs_tab1 nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Mua bán</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cho thuê</button>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="box_tinhthanh_tin">
                    <?php foreach ($tinhthanh as $key => $value) { ?>
                        <div class="item_tinhthanh_tin tinhthanh<?= $key ?>">
                            <div class="img_tinhthanh_tin scale-img">
                                <img src="<?= UPLOAD_PHOTO_L . $value['photo'] ?>" alt="">
                            </div>
                            <div class="title_tinhthanh_tin"><?= $value['ten'] ?></div>
                            <div class="thongke_tin"><?= $func->digitalRandom(1, 4, 4) ?> tin đăng</div>
                        </div>
                    <?php if ($key == 4) break;
                    } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            </div>
        </div>
    </div>
</section>


<section class="tindangmoi py-4">
    <div class="fixwidth">
        <div class="title"><span>Mua Bán Bất Động Sản</span></div>
        <div class="items_sanpham">
            <?php foreach ($batdongsan as $key => $value) { ?>
                <a href="<?= $value['tenkhongdauvi'] ?>" class="item_sanpham">
                    <div class="img_sanpham scale-img">
                        <img class="skeleton mm-lazyload" data-src="<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" alt="<?= $value['tenvi'] ?>" srcset="">
                    </div>
                    <div class="content_sanpham">
                        <div class="title_sanpham">
                            <?= $value['tenvi'] ?>
                        </div>
                        <div class="gia_sanpham">
                        1.8 ~ 3 tỷ
                        </div>
                        <div class="tinhthanh_sanpham">
                            <i class="fas fa-map-marker-alt"></i> TP.Hồ Chí Minh
                        </div>
                        <div class="thongtin_sanpham">
                            <div class="time_sanpham">
                                <img src="assets/images/product-user.svg" alt=""> <?= $func->getTime($value['ngaytao']) ?>
                            </div>
                            <div class="qt_sanpham">
                                <?php if ($key % 2 == 0) { ?>
                                    <i class="fas fa-heart"></i>
                                <?php } else { ?>
                                    <i class="fal fa-heart"></i>
                                <?php   } ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
        <div class="readmore text-center">
            <a href="">Xem thêm <i class="fal fa-arrow-right"></i></a>
        </div>
    </div>
</section>
