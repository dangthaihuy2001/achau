<?php
$linkView = $config_base;
$linkMan = $linkFilter = "index.php?com=product&act=aff&type=" . $type . "&p=" . $curPage;
$linkAdd = "index.php?com=product&act=add_aff&type=" . $type . "&p=" . $curPage;
$linkCopy = "index.php?com=product&act=copy&type=" . $type . "&p=" . $curPage;
$linkEdit = "index.php?com=product&act=edit_aff&type=" . $type . "&p=" . $curPage;
$linkDelete = "index.php?com=product&act=delete_aff&type=" . $type . "&p=" . $curPage;
$linkMulti = "index.php?com=product&act=man_photo&kind=man&type=" . $type . "&p=" . $curPage;
$copyImg = (isset($config['product'][$type]['copy_image']) && $config['product'][$type]['copy_image'] == true) ? TRUE : FALSE;

$linkAff = "index.php?com=product&act=aff&type=" . $type . "&p=" . $curPage;
?>
<!-- Content Header -->
<section class="content-header text-sm">
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                <li class="breadcrumb-item active">Quản lý <?= $config['product'][$type]['title_main'] ?> Affiliate</li>
            </ol>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="card-footer text-sm sticky-top">
        <a class="btn btn-sm bg-gradient-primary text-white" href="<?= $linkAdd ?>" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="<?= $linkDelete ?><?= $strUrl ?>" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar text-sm" type="search" id="keyword" placeholder="Tìm kiếm" aria-label="Tìm kiếm" value="<?= (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>" onkeypress="doEnter(event,'keyword','<?= $linkMan ?>')">
                <div class="input-group-append bg-primary rounded-right">
                    <button class="btn btn-navbar text-white" type="button" onclick="onSearch('keyword','<?= $linkMan ?>')">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php if (
        (isset($config['product'][$type]['dropdown']) && $config['product'][$type]['dropdown'] == true) ||
        (isset($config['product'][$type]['brand']) && $config['product'][$type]['brand'] == true)
    ) { ?>
        <div class="card-footer form-group-category text-sm bg-light row">
            <?php if (isset($config['product'][$type]['list']) && $config['product'][$type]['list'] == true) { ?>
                <div class="form-group col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2"><?= $func->get_link_category('product', 'list', $type) ?></div>
            <?php } ?>
            <?php if (isset($config['product'][$type]['cat']) && $config['product'][$type]['cat'] == true) { ?>
                <div class="form-group col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2"><?= $func->get_link_category('product', 'cat', $type) ?></div>
            <?php } ?>
            <?php if (isset($config['product'][$type]['item']) && $config['product'][$type]['item'] == true) { ?>
                <div class="form-group col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2"><?= $func->get_link_category('product', 'item', $type) ?></div>
            <?php } ?>
            <?php if (isset($config['product'][$type]['sub']) && $config['product'][$type]['sub'] == true) { ?>
                <div class="form-group col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2"><?= $func->get_link_category('product', 'sub', $type) ?></div>
            <?php } ?>
            <?php if (isset($config['product'][$type]['brand']) && $config['product'][$type]['brand'] == true) { ?>
                <div class="form-group col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2"><?= $func->get_link_category('product', 'brand', $type, 'Chọn hãng') ?></div>
            <?php } ?>
        </div>
    <?php } ?>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">Danh sách <?= $config['product'][$type]['title_main'] ?> Affiliate</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>                     
                        <th class="align-middle text-center" width="10%">STT</th>
                        <?php if (isset($config['product'][$type]['show_images']) && $config['product'][$type]['show_images'] == true) { ?>
                            <th class="align-middle" style="width:10%">Hình</th>
                        <?php } ?>
                        <th class="align-middle" style="width:30%">Tiêu đề</th>
                        <th class="align-middle" style="width:10%">Thao tác</th>
                    </tr>
                </thead>
                <?php if (empty($items)) { ?>
                    <tbody>
                        <tr>
                            <td colspan="100" class="text-center">Không có dữ liệu</td>
                        </tr>
                    </tbody>
                <?php } else { ?>
                    <tbody>
                        <?php for ($i = 0; $i < count($items); $i++) { ?>
                            <tr>                
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt" min="0" value="<?= $items[$i]['stt_aff'] ?>" data-id="<?= $items[$i]['id_aff'] ?>" data-table="affiliates">
                                </td>
                                <?php if (isset($config['product'][$type]['show_images']) && $config['product'][$type]['show_images'] == true) { ?>
                                    <td class="align-middle">
                                        <a  title="<?= $items[$i]['tenvi'] ?>"><img class="rounded img-preview" onerror="src='assets/images/noimage.png'" src="<?= THUMBS ?>/<?= $config['product'][$type]['thumb'] ?>/<?= UPLOAD_PRODUCT_L . $items[$i]['photo'] ?>" alt="<?= $items[$i]['tenvi'] ?>"></a>
                                    </td>
                                <?php } ?>
                                <td class="align-middle">
                                    <a class="text-dark" title="<?= $items[$i]['tenvi'] ?>"><?= $items[$i]['tenvi'] ?></a>
                                    <div class="tool-action mt-2 w-clear">
                                        <?php
                                        $sql = "select id,(select tenvi from #_product_list where id=" . $items[$i]['id_list'] . ") as namelist,(select tenvi from #_product_cat where id=" . $items[$i]['id_cat'] . ") as namecat,(select tenvi from #_product_item where id=" . $items[$i]['id_item'] . ") as nameitem from #_product where id=" . $items[$i]['id'] . " ";
                                        $itemcat = $d->rawQueryOne($sql);
                                        ?>
                                        <?= $itemcat['namelist'] != '' ? '<span class="text-primary">' . $itemcat['namelist'] . '</span>' : '' ?>
                                        <?= $itemcat['namecat'] != '' ? ' <i class="far fa-angle-right"></i> <span class="text-info">' . $itemcat['namecat'] . '</span>' : '' ?>
                                        <?= $itemcat['nameitem'] != '' ? ' <i class="far fa-angle-right"></i> <span class="text-danger">' . $itemcat['nameitem'] . '</span>' : '' ?>
                                    </div>
                                </td>
                                <td class="align-middle">
                                <a class="text-danger" id="delete-item" data-url="<?= $linkDelete ?>&id=<?= $items[$i]['id_aff'] ?>" title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>            
                            </tr>
                        <?php } ?>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    <?php if ($paging) { ?>
        <div class="card-footer text-sm pb-0"><?= $paging ?></div>
    <?php } ?>
    <div class="card-footer text-sm">
        <a class="btn btn-sm bg-gradient-primary text-white" href="<?= $linkAdd ?>" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="<?= $linkDelete ?><?= $strUrl ?>" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
    </div>
</section>