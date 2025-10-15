<?php if ($template == 'index/index') { ?>
    <div class="wrap_slider mt-2">
        <div class="fixwidth">
            <div class="row">
                <div class="col-md-9 pl-2 pr-2 mb-3 col-12">
                    <div class="slideshow">
                        <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
                        <div id="slider" class="owl-carousel owl-theme owl-slideshow">
                            <?php foreach ($slider as $v) { ?>
                                <div class="item_slider">
                                    <a href="<?= $v['link'] ?>" target="_blank" title="<?= $v['ten' . $lang] ?>">
                                        <img class="skeleton mm-lazyload" data-src="<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" />
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
                    </div>
                </div>
                <div class="col-md-3 pl-0 pr-2 mb-3 col-12">
                    <div class="items_noti">
                        <?php foreach ($thongbao as $key => $value) { ?>
                            <a href="<?= $value['tenkhongdauvi'] ?>" class="item_noti mb-2">
                                <div class="img_noti scale-img">
                                    <img src="<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="">
                                </div>
                                <div class="content_noti">
                                    <div class="small_noti"><i class="fal fa-bell-on"></i> Thông báo</div>
                                    <div><?= $value['tenvi'] ?></div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php } ?>

<?php if ($template == 'index/index2') { ?>
    <div class="wrap_slider mt-2">
        <div class="fixwidth">
            <div class="row">
                <div class="col-md-9 pl-2 pr-2 mb-3 col-12">
                    <div class="slideshow">
                        <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
                        <div id="slider" class="owl-carousel owl-theme owl-slideshow">
                            <?php foreach ($slider2 as $v) { ?>
                                <div class="item_slider">
                                    <a href="<?= $v['link'] ?>" target="_blank" title="<?= $v['ten' . $lang] ?>">
                                        <img class="skeleton mm-lazyload" data-src="<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" />
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
                    </div>
                </div>
                <div class="col-md-3 pl-0 pr-2 mb-3 col-12">
                    <!-- <div class="items_noti">
                        <?php foreach ($thongbao as $key => $value) { ?>
                            <a href="<?= $value['tenkhongdauvi'] ?>" class="item_noti mb-2">
                                <div class="img_noti scale-img">
                                    <img src="<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="">
                                </div>
                                <div class="content_noti">
                                    <div class="small_noti"><i class="fal fa-bell-on"></i> Thông báo</div>
                                    <div><?= $value['tenvi'] ?></div>
                                </div>
                            </a>
                        <?php } ?>
                    </div> -->
                    <div class="items_tienich mb-2">
                        <?php foreach ($tienich as $key => $value) { ?>
                            <div class="item_tienich">
                                <div class="img_tienich scale-img">
                                    <img src="<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value['tenvi'] ?>">
                                </div>
                                <div class="content_tienich"><?= $value['tenvi'] ?></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="items_dvmg">
                        <?php foreach ($dichvumoigioi as $key => $value) { ?>
                            <div class="item_dvmg">
                                <div class="img_dvmg scale-img">
                                    <img src="<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value['tenvi'] ?>">
                                </div>
                                <div class="content_dvmg"><?= $value['tenvi'] ?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php } ?>