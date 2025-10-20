<div class="clearfix">
    <div class="wrap_right_detail">
        <div class="grid-pro-detail w-clear">
            <div class="left-pro-detail w-clear">
                <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/500x500x3/assets/images/noimage.png';" src="<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>
                <?php if ($hinhanhsp) {
                    if (count($hinhanhsp) > 0) { ?>
                        <div class="gallery-thumb-pro">
                            <p class="control-carousel prev-carousel prev-thumb-pro transition"><i class="fas fa-chevron-left"></i></p>
                            <div class="owl-carousel owl-theme owl-thumb-pro">
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/500x500x3/assets/images/noimage.png';" src="<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>
                                <?php foreach ($hinhanhsp as $v) { ?>
                                    <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>">
                                        <img onerror="this.src='<?= THUMBS ?>/500x500x3/assets/images/noimage.png';" src="<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <p class="control-carousel next-carousel next-thumb-pro transition"><i class="fas fa-chevron-right"></i></p>
                        </div>
                <?php }
                } ?>

                <div class="description_detail mt-3">
                    <div class="title text-left"><span>Mô tả chi tiết sản phẩm</span></div>
                    <div><?= htmlspecialchars_decode($row_detail['noidung' . $lang]) ?></div>
                </div>

                <div class="title text-left mx-3"><span>Bạn cần tư vấn</span></div>
                <form class="validation-contact form_contact_detail" action="" method="post">
                    <div class="row">
                        <div class="col-md-6 pl-2 pr-2 mb-3 col-12">
                            <div class="input-contact">
                                <input type="text" placeholder="Họ & tên" id="name-newsletter" name="name-newsletter" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 pl-2 pr-2 mb-3 col-12">
                            <div class="input-contact">
                                <input type="number" placeholder="Số điện thoại" id="phone-newsletter" name="phone-newsletter" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 pl-2 pr-2 col-12">
                        <button type="submit" name="submit-newsletter">Gửi thông tin <i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>

            </div>
            <div class="right-pro-detail w-clear">
                <div class="box_infor_detail">
                    <p class="title-pro-detail"><?= $row_detail['ten' . $lang] ?></p>
                    <hr>
                    <ul class="attr-pro-detail">
                        <?php
                        if (isset($config['product'][$type]['qr']) && $config['product'][$type]['qr'] == true) { ?>
                            <li class="show_code_qr w-clear">
                                <a class="" data-fancybox="album1" data-src="images<?= $_SERVER['REQUEST_URI'] ?>.png">
                                    <img src="images<?= $_SERVER['REQUEST_URI'] ?>.png" alt="" />
                                </a>
                            </li>
                        <?php } ?>
                        <li class="w-clear">
                            <label class="attr-label-pro-detail_title">Thông tin :</label>
                        </li>
                        <li class="w-clear">
                            <label class="attr-label-pro-detail">Giá bán:</label>
                            <div class="attr-content-pro-detail">
                                <span class="price-new-pro-detail"><?= $func->format_money($row_detail['gia']) ?></span>
                            </div>
                        </li>
                        <li class="w-clear">
                            <label class="attr-label-pro-detail">Địa chỉ:</label>
                            <div class="attr-content-pro-detail">
                                <span class="attr-content-pro-detail"><?= $func->getTable($row_detail['id_city'], 'city')['ten'] ?></span>
                            </div>
                        </li>
                        <li class="w-clear">
                            <label class="attr-label-pro-detail">Thời gian:</label>
                            <div class="time_sanpham d-inline">
                                <img src="assets/images/product-user.svg" alt="CÔNG TY CỔ PHẦN TRUYỀN THÔNG &amp;amp; CÔNG NGHỆ SỐ Á CHÂU"> 3 ngày trước
                            </div>
                        </li>
                    </ul>
                    <hr>
                    <div class="box_user">
                        <img width="30" src="assets/images/userr.png" alt="">
                        <div class="title_user">Người đăng </div>
                    </div>
                    <hr>
                    <a href="tel:<?=preg_replace('/[^0-9]/','',$func->getTable($row_detail['id_nguoiban'], 'user')['dienthoai']);?>" class="box_call">
                        <i class="fas fa-phone-alt"></i> Gọi điện: <span><?= $func->getTable($row_detail['id_nguoiban'], 'user')['dienthoai'] ?></span>
                    </a>
                    <hr>
                    <div class="box_chat">
                        <i class="fas fa-comment-alt-lines"></i> Chat: <span><?= $func->getTable($row_detail['id_nguoiban'], 'user')['dienthoai'] ?></span>
                    </div>
                    <hr>
                    <div class="box_chat">
                        <img width="40" src="assets/images/Logo-Zalo.webp" alt=""> <span><?= $func->getTable($row_detail['id_nguoiban'], 'user')['dienthoai'] ?></span>
                    </div>
                    <div class="desc-pro-detail">
                        <?= (isset($row_detail['mota' . $lang]) && $row_detail['mota' . $lang] != '') ? htmlspecialchars_decode($row_detail['mota' . $lang]) : '' ?>
                    </div>
                </div>
                <div class="box_contact_detail">
                    <div class="title_form_detail">Bạn cần tư vấn thêm?</div>
                    <div class="title_form_detail_small">Để lại thông tin để người đăng tin liên hệ với bạn ngay.</div>
                    <form class="form_newsletter validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-contact col-sm-6 pl-2 pr-2">
                                <input type="text" class="form-control" id="name-newsletter" name="name-newsletter" placeholder="<?= hoten ?>" required />
                            </div>
                            <div class="input-contact col-sm-6 pl-2 pr-2">
                                <input type="number" class="form-control" id="phone-newsletter" name="phone-newsletter" placeholder="<?= sodienthoai ?>" required />
                            </div>
                            <div class="input-contact col-sm-12 pl-2 pr-2">
                                <textarea class="form-control" id="noidung-newsletter" name="noidung-newsletter" placeholder="<?= noidung ?>" required /></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn" name="submit-newsletter">Gửi thông tin <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="box_product_other">
    <div class="title"><span>Sản phẩm cùng loại</span></div>
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

    </div>
</div>