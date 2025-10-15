<?php
if (!defined('SOURCES')) die("Error");

@$id = htmlspecialchars($_GET['id']);

if ($id != '') {
    $row_detail = $d->rawQueryOne("select * from #_city where id = ? and hienthi > 0 limit 0,1", array($id));
    $nhommathang = $d->rawQuery("select * from #_product_list where hienthi > 0 and type = ?", array('san-pham'));

	$seo->setSeo('title', $row_detail['ten' ]);
	$seo->setSeo('keywords', $row_detail['ten' ]);
	$seo->setSeo('url', $func->getPageURL());
    /* breadCrumbs */
    if (isset($title_crumb) && $title_crumb != '') $breadcr->setBreadCrumbs($com, $title_crumb);
    $breadcr->setBreadCrumbs($row_detail['tenkhongdau'], $row_detail['ten']);
    $breadcrumbs = $breadcr->getBreadCrumbs();
}else{
    $tinhthanh = $d->rawQuery("select * from #_city where id = ? and hienthi > 0 ");

	$seo->setSeo('title', $title_crumb);
	$seo->setSeo('keywords', $title_crumb);
	$seo->setSeo('url', $func->getPageURL());
    /* breadCrumbs */
    if (isset($title_crumb) && $title_crumb != '') $breadcr->setBreadCrumbs($com, $title_crumb);
  //  $breadcr->setBreadCrumbs($row_detail['tenkhongdau'], $row_detail['ten']);
    $breadcrumbs = $breadcr->getBreadCrumbs();
}
