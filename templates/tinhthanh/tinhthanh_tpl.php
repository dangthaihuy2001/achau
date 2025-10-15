<section class="list_tinhthanh py-4">
    <div class="fixwidth">
        <div class="title"><span>Danh Sách Nhóm Mặt Hàng</span></div>
        <div class="box_nhommathang">
            <?php foreach ($nhommathang as $key => $value) { ?>
                <a href="<?= $value['tenkhongdauvi'] ?>" class="item_nhommathang  mb-3">
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
