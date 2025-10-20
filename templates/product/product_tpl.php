<div class="title"><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?></div>
<div class="content-main w-clear">
    <?php if (isset($product) && count($product) > 0) { ?>
        <div class="items_sanpham">
            <?php foreach ($product as $key => $value) { ?>
                <a href="<?= $value['tenkhongdauvi'] ?>-<?= $value['id'] ?>" class="item_sanpham">
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
                            <i class="fas fa-map-marker-alt"></i> <?= $func->getTable($value['id_city'], 'city')['ten'] ?>
                        </div>
                        <div class="thongtin_sanpham">
                            <div class="time_sanpham">
                                <img src="assets/images/product-user.svg" alt=""> <?= $func->getTime($value['ngaytao']) ?>
                            </div>
                            <div class="qt_sanpham">
                                <i class="fal fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
</div>
<?php if ($noidung_page != '') { ?>
    <div class="noidung_page_product">
        <div class="meta-toc">
            <div class="box-readmore">
                <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
            </div>
        </div>
        <div id="toc-content"><?= htmlspecialchars_decode($noidung_page) ?></div>
    </div>
<?php } ?>