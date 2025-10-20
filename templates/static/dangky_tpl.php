<div class="title">
    <span><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?></span>
</div>
<div class="content-main w-clear">
    <div class="row">
        <div class="col-md-4 pl-3 pr-5 mb-3 col-12">
            <form class="form_register validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
                <div class="input-contact">
                    <label for="">Họ và tên:</label>
                    <input type="text" class="form-control" id="ten" name="ten-seller" placeholder="<?= hoten ?>" required />
                </div>
                <div class="input-contact">
                    <label for="">Số điện thoại:</label>
                    <input type="number" class="form-control" id="dienthoai" name="dienthoai-seller" placeholder="<?= sodienthoai ?>" required />
                </div>
                <div class="input-contact">
                    <label for="">Địa chỉ:</label>
                    <input type="text" class="form-control" id="diachi" name="diachi-seller" placeholder="<?= diachi ?>" required />
                </div>
                <div class="input-contact">
                    <label for="">Chọn nhóm mặt hàng</label>
                    <select name="mathang-seller[]" class="form-control select2" id="" multiple required>
                        <?php foreach ($splistmenu as $key => $value) { ?>
                            <option value="<?= $value['tenvi'] ?>"><?= $value['tenvi'] ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <button type="submit" class="btn" name="submit-seller">Đăng ký</button>
            </form>
        </div>
        <div class="col-md-8 pl-5 pr-3 mb-3 col-12">
            <?= (isset($static['noidung' . $lang]) && $static['noidung' . $lang] != '') ? htmlspecialchars_decode($static['noidung' . $lang]) : '' ?>
        </div>
    </div>

</div>


<div class="share">
    <b><?= chiase ?>:</b>
    <div class="social-plugin w-clear">
        <div class="website_share d-flex align-items-center pr-2">
            <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>" data-oaid="<?= ($optsetting['oaidzalo'] != '') ? $optsetting['oaidzalo'] : '579745863508352884' ?>" data-layout="1" data-color="blue" data-customize=true>
                <img width="20" height="20" src="../../assets/images/zalo1.png">
                <span style="color: #fff; font-size: 11px; font-weight: 500;letter-spacing: 0.5px">Share</span>
            </div>
        </div>
        <div class="sharethis-inline-share-buttons"></div>
    </div>
</div>