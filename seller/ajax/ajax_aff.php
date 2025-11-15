<?php
include "ajax_config.php";

$slug = (isset($_POST['slug'])) ? htmlspecialchars($_POST['slug']) : 0;

$data = $d->rawQueryOne("select p.id,p.tenvi,p.gia, u.ten as tennguoidung, u.dienthoai as dienthoai, p.photo from #_product p left join #_user u on p.id_nguoiban = u.id where p.hienthi>0 and p.type='san-pham' and p.tenkhongdauvi = ? and p.id_nguoiban != ? limit 0,1", array($slug,$_SESSION[$login_admin]['id']));



if ($data['id']) {
    $dataOld = $d->rawQueryOne("select count(*) as 'num' from #_affiliates where product_id = ? and user_id = ?", array($data['id'], $_SESSION[$login_admin]['id']));
    if($dataOld['num']<=0){
        echo json_encode($data);
    }else{
        echo 0;
    }
    
} else {
    echo 0;
}
