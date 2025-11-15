<?php


if ($act == "add") $labelAct = "Thêm mới";
else if ($act == "edit") $labelAct = "Chỉnh sửa";
else if ($act == "copy")  $labelAct = "Sao chép";

$linkMan = "index.php?com=product&act=man&type=" . $type . "&p=" . $curPage;
if ($act == 'add') $linkFilter = "index.php?com=product&act=add&type=" . $type . "&p=" . $curPage;
else if ($act == 'edit') $linkFilter = "index.php?com=product&act=edit&type=" . $type . "&p=" . $curPage . "&id=" . $id;
if ($act == "copy") $linkSave = "index.php?com=product&act=save_copy&type=" . $type . "&p=" . $curPage;
else $linkSave = "index.php?com=product&act=save_aff&type=" . $type . "&p=" . $curPage;

/* Check cols */
if (isset($config['product'][$type]['gallery']) && count($config['product'][$type]['gallery']) > 0) {
    foreach ($config['product'][$type]['gallery'] as $key => $value) {
        if ($key == $type) {
            $flagGallery = true;
            break;
        }
    }
}

if ((isset($config['product'][$type]['dropdown']) && $config['product'][$type]['dropdown'] == true) || (isset($config['product'][$type]['brand']) && $config['product'][$type]['brand'] == true) || (isset($config['product'][$type]['tags']) && $config['product'][$type]['tags'] == true) || (isset($config['product'][$type]['mau']) && $config['product'][$type]['mau'] == true) || (isset($config['product'][$type]['size']) && $config['product'][$type]['size'] == true) || (isset($config['product'][$type]['images']) && $config['product'][$type]['images'] == true)) {
    $colLeft = "col-12";
    $colRight = "col-xl-4 right_content align-self-start";
} else {
    $colLeft = "col-12";
    $colRight = "d-none";
}
?>
<!-- Content Header -->
<section class="content-header text-sm">
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                <li class="breadcrumb-item active"><?= $labelAct ?> <?= $config['product'][$type]['title_main'] ?></li>
            </ol>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <form class="validation-form" id="<?= $type == 'san-pham-temp' ? 'readonly_form' : '' ?>" novalidate method="post" action="<?= $linkSave ?>" enctype="multipart/form-data">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Đăng ký affiliate</button>
            <a class="btn btn-sm bg-gradient-danger" href="<?= $linkMan ?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
        </div>
        <div class="row">
            <div class="<?= $colLeft ?>">
                <div id="scroll-left">
                    <div class="card card-primary card-outline text-sm">
                        <div class="card-header">
                            <h3 class="card-title">Nội dung <?= $config['product'][$type]['title_main'] ?></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-body card-article">
                                    <div class="tab-pane fade show <?= ($k == 'vi') ? 'active' : '' ?>" id="tabs-lang-<?= $k ?>" role="tabpanel" aria-labelledby="tabs-lang">
                                        <div class="form-group">
                                            <label for="duongdansanpham">Đường dẫn sản phẩm :</label>
                                            <input type="text" class="form-control for-seo" id="duongdansanpham" placeholder="Đường dẫn sản phẩm" value="" required>
                                        </div>
                                        <div class="box_infor_product_aff">
                                            <input type="hidden" id="id_sanpham" name="data[product_id]">
                                            <div class="img_sanpham">
                                                <img src="" alt="">
                                            </div>
                                            <div class="title_sanpham">
                                               
                                            </div>
                                            <div class="gia_sanpham">
                                               Giá: <span></span>
                                            </div>
                                            <div class="nguoidang_sanpham mt-5">
                                                <span>Thông tin người bán:</span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-sm bottom_height">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Đăng ký affiliate</button>     
            <a class="btn btn-sm bg-gradient-danger" href="<?= $linkMan ?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
            <input type="hidden" name="id" value="<?= @$item['id'] ?>">
        </div>
    </form>
</section>


<script type="text/javascript">
    function parseSlugAndId(url) {
        try {
            const u = new URL(url);
            // lấy phần path, bỏ dấu / đầu/cuối nếu có
            const path = u.pathname.replace(/^\/|\/$/g, '');
            // tìm pattern: <any-chars>-<digits> ở cuối
            const m = path.match(/^(.+)-(\d+)$/);
            if (!m) return null; // không khớp
            return {
                slug: decodeURIComponent(m[1]),
                id: m[2]
            };
        } catch (e) {
            return null; // url không hợp lệ
        }
    }

    $('#duongdansanpham').change(function() {

        $.ajax({
            url: 'ajax/ajax_aff.php',
            type: "POST",
            dataType: 'html',
            data: {
                slug: parseSlugAndId($('#duongdansanpham').val())['slug']
            },
            success: function(result) {
                if (result == 0) {
                    alert("Sản phẩm không hợp lệ!")
                } else {
                    $('.box_infor_product_aff').show()
                  let data = JSON.parse(result);
                  $('#id_sanpham').val(data['id'])
                  $('.title_sanpham').html(data['tenvi'])
                  $('.gia_sanpham span').html(data['gia'])
                  $('.nguoidang_sanpham span:nth-child(2)').html('<i class="fas fa-user-alt"></i> '+ data['tennguoidung'])
                  $('.nguoidang_sanpham span:nth-child(3)').html('<i class="fas fa-phone-alt"></i> '+data['dienthoai'])              
                  $('.img_sanpham img').attr("src","../upload/product/"+data['photo']);
                }
            }
        });
    })
</script>