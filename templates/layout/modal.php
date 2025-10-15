<?php if (isset($popup) && $popup['hienthi'] == 1) { ?>
	<!-- Modal popup -->
	<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="popupModalLabel"><?= $popup['ten' . $lang] ?></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<a href="<?= $popup['link'] ?>"><img src="<?= THUMBS ?>/800x530x1/<?= UPLOAD_PHOTO_L . $popup['photo'] ?>" alt="Popup"></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<!-- Modal notify -->
<div class="modal modal-custom fade" id="popup-notify" tabindex="-1" role="dialog" aria-labelledby="popup-notify-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="popup-notify-label"><?= thongbao ?></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><?= thoat ?></button>
			</div>
		</div>
	</div>
</div>

<!-- Modal cart -->
<div class="modal fade" id="popup-cart" tabindex="-1" role="dialog" aria-labelledby="popup-cart-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="popup-cart-label"><?= giohangcuaban ?></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"></div>
		</div>
	</div>
</div>

<?php
/*
	<!-- Modal prototype -->
	<button type="button" class="btn btn-primary open-modal-cart" data-toggle="modal" data-target=".exampleModal">
		Open Modal
	</button>
	<div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="exampleModalLabel">Modal title</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
*/
?>

<div class="modal" id="popup-all">
	<div class="modal-container">
		<div class="title_modal">Chọn khu vực bạn đang tìm kiếm</div>
		<div class="row">
			<?php foreach ($tinhthanh_nb as $key => $value) { ?>
				<div class="col-md-4 pl-2 pr-2 mb-3">
					<div class="item_m_city" data-id="<?= $value['id'] ?>" data-ten="<?= $value['ten'] ?>">
						<img src="<?= UPLOAD_PHOTO_L. $value['photo'] ?>" alt="<?= $value['ten'] ?>">
						<span><?= $value['ten'] ?></span>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="box_m_city">
			<div class="search_m_city">
				<input type="text" placeholder="Tìm tỉnh thành">
				<button><i class="far fa-search"></i></button>
			</div>
			<div class="items_m_city">
				<?php foreach ($tinhthanh as $key => $value) { ?>
					<div class="item_m--city" data-id="<?= $value['id'] ?>" data-ten="<?= $value['ten'] ?>">
						<label class="mb-0" for="city_<?=$value['id']?>"><?= $value['ten'] ?></label>
						<input type="radio" name="city_location" id="city_<?=$value['id']?>">
					</div>
				<?php } ?>
			</div>
		</div>
		<button class="icon-button close-button">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
				<path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
			</svg>
		</button>
	</div>
</div>