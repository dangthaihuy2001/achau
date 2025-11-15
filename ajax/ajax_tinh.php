<?php
include "ajax_config.php";

$key = (isset($_POST['key']) && $_POST['key'] != '') ? htmlspecialchars($_POST['key']) : '';

$tinhthanh = $d->rawQuery("select ten, id, photo,tenkhongdau from #_city where hienthi >0 and ten like ? order by stt,id desc", array("%$key%"));

?>

<?php foreach ($tinhthanh as $key => $value) { ?>
    <div class="item_m--city" data-id="<?= $value['id'] ?>" data-ten="<?= $value['ten'] ?>">
        <label class="mb-0" for="city_<?= $value['id'] ?>"><?= $value['ten'] ?></label>
        <input type="radio" name="city_location" id="city_<?= $value['id'] ?>">
    </div>
<?php } ?>

<script>
    // $('.item_m--city').click(function() {
    //     document.cookie = "location=" + $(this).data('id');
    //     closeModal()
    // })
</script>