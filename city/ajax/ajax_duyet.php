<?php
    include "ajax_config.php";
    $id = (isset($_POST['id'])) ? htmlspecialchars($_POST['id']) : 0;

    $tmp = $d->rawQueryOne("select duyet from #_product where id = ? limit 0,1", array($id));

    if ($tmp['duyet'] > 0) $data['duyet'] = 0;
    else $data['duyet'] = 1;
    $data['type'] = 'san-pham';
    $data['ngaysua'] = time();
    $d->where('id', $id);
    $d->update('product', $data);
    $cache->DeleteCache();

    if ($data['duyet'] == 1) {
        echo 1;
    } elseif ($data['duyet'] == 0) {
        echo 0;
    }


