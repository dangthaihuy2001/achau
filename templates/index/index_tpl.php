<div class="tinhthanh_aj">

</div>

<?php if ($com == 'tinh-thanh') { ?>
    <section class="list_tinhthanh py-4">
        <div class="fixwidth">
            <div class="title"><span>Danh Sách Nhóm Mặt Hàng</span></div>
            <div class="box_nhommathang">
                <?php foreach ($nhommathang as $key => $value) { ?>
                    <a href="<?= $value['tenkhongdauvi'] ?>" class="item_nhommathang mb-3">
                        <div class="img_nhommathang scale-img">
                            <img class="skeleton mm-lazyload" onerror="this.src='<?= THUMBS ?>/200x200x1/assets/images/noimage.png';" data-src="<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" alt="<?= $value['tenvi'] ?>" title="<?= $value['tenvi'] ?>">
                        </div>
                        <div class="content_nhommathang">
                            <?= $value['tenvi'] ?>
                        </div>
                    </a>
            <?php } ?>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="list_tinhthanh py-4">
        <div class="fixwidth">
            <div class="title"><span>Danh Sách Tỉnh Thành Phố</span></div>
            <div class="owl-carousel owl-theme owl-tinhthanh">
                <?php for ($i = 0; $i < count($tinhthanh); $i += 2) {  ?>
                    <div class="items_tinhthanh">
                        <a href="<?= $tinhthanh[$i]['tenkhongdau'] ?>" class="item_tinhthanh mb-3">
                            <div class="img_tinhthanh scale-img">
                                <img class="skeleton mm-lazyload" data-src="<?= UPLOAD_PHOTO_L . $tinhthanh[$i]['photo'] ?>" alt="<?= $tinhthanh[$i]['ten'] ?>" title="<?= $tinhthanh[$i]['ten'] ?>">
                            </div>
                            <div class="content_tinhthanh">
                                <?= $tinhthanh[$i]['ten'] ?>
                            </div>
                        </a>
                        <?php if ($tinhthanh[$i + 1]) { ?>
                            <a href="<?= $tinhthanh[$i + 1]['tenkhongdau'] ?>" class="item_tinhthanh">
                                <div class="img_tinhthanh scale-img">
                                    <img class="skeleton mm-lazyload" data-src="<?= UPLOAD_PHOTO_L . $tinhthanh[$i + 1]['photo'] ?>" alt=" <?= $tinhthanh[$i + 1]['ten'] ?>" title="<?= $tinhthanh[$i + 1]['ten'] ?>">
                                </div>
                                <div class="content_tinhthanh">
                                    <?= $tinhthanh[$i + 1]['ten'] ?>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<section class="tindangmoi py-4">
    <div class="fixwidth">
        <div class="title"><span>Tin Đăng Mới Nhất</span></div>
        <div class="items_sanpham">
            <?php foreach ($sanpham_moi as $key => $value) { ?>
                <a href="<?= $value['tenkhongdauvi'] ?>" class="item_sanpham">
                    <div class="img_sanpham scale-img">
                        <img class="skeleton mm-lazyload" data-src="<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" alt="<?= $value['tenvi'] ?>" title="<?= $value['tenvi'] ?>">
                    </div>
                    <div class="content_sanpham">
                        <div class="title_sanpham">
                            <?= $value['tenvi'] ?>
                        </div>
                        <div class="gia_sanpham">
                            Giá: <?= $func->format_money($value['gia']) ?>
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