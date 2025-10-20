<!-- Js Config -->
<script type="text/javascript">
    var NN_FRAMEWORK = NN_FRAMEWORK || {};
    var CONFIG_BASE = '<?= $config_base ?>';
    var SOURCE = '<?= $source ?>';
    var WEBSITE_NAME = '<?= (isset($setting['ten' . $lang]) && $setting['ten' . $lang] != '') ? $setting['ten' . $lang] : '' ?>';
    var TIMENOW = '<?= date("d/m/Y", time()) ?>';
    var SHIP_CART = <?= (isset($config['order']['ship']) && $config['order']['ship'] == true) ? 'true' : 'false' ?>;
    var GOTOP = 'assets/images/top.png';
    var LANG = {
        'no_keywords': "<?= chuanhaptukhoatimkiem ?>",
        'delete_product_from_cart': "<?= banmuonxoasanphamnay ?>",
        'no_products_in_cart': "<?= khongtontaisanphamtronggiohang ?>",
        'wards': "<?= phuongxa ?>",
        'back_to_home': "<?= vetrangchu ?>",
    };
</script>

<!-- Js Files -->
<?php
$js->setCache("cached");
$js->setJs("./assets/js/jquery.min.js");
$js->setJs("./assets/bootstrap/bootstrap.js");
$js->setJs("./assets/js/wow.min.js");
$js->setJs("./assets/owlcarousel2/owl.carousel.js");
$js->setJs("./assets/magiczoomplus/magiczoomplus.js");
$js->setJs("./assets/simplyscroll/jquery.simplyscroll.js");
$js->setJs("./assets/slick/slick.js");
$js->setJs("./assets/fancybox3/jquery.fancybox.js");
$js->setJs("./assets/toc/toc.js");
$js->setJs("./assets/js/lazyload.min.js");
$js->setJs("./assets/js/functions.js");
$js->setJs("./assets/js/jquery.nivo.slider.js");
$js->setJs("./assets/select2/select2.full.js");
$js->setJs("./assets/js/apps.js");
echo $js->getJs();
?>
<script src="./assets/js/lazyload.min.js"></script>

<script>
    // const ws = new WebSocket("ws://duathichankem-local:8080/chat");
    // const user_id = Math.floor(Math.random() * 2) + 1; // tạm: 1 hoặc 2
    // const receiver_id = (user_id === 1) ? 2 : 1;
    // console.log(ws)
    // ws.onopen = () => {
    //     ws.send(JSON.stringify({
    //         type: 'init',
    //         user_id
    //     }));
    //     console.log("Kết nối thành công WebSocket!");
    // };

    // ws.onmessage = (event) => {
    //     const data = JSON.parse(event.data);
    //     if (data.type === 'chat') {
    //         const box = document.getElementById('chat-box');
    //         box.innerHTML += `<div class="msg"><b>Người ${data.sender_id}:</b> ${data.message}</div>`;
    //         box.scrollTop = box.scrollHeight;
    //     }
    // };

    // document.getElementById('send').onclick = () => {
    //     const msg = document.getElementById('msg').value.trim();
    //     if (msg === '') return;
    //     ws.send(JSON.stringify({
    //         type: 'chat',
    //         sender_id: user_id,
    //         receiver_id,
    //         message: msg
    //     }));
    //     document.getElementById('chat-box').innerHTML += `<div class="msg me">Bạn: ${msg}</div>`;
    //     document.getElementById('msg').value = '';
    // };
</script>

<script>
    $('.btn_readmore_p').click(function() {
        $.ajax({
            type: "POST",
            url: 'ajax/ajax_load_p.php',
            dataType: 'json',
            data: {
                cmd: 'delete-cart',
                code: 1,
                ship: 1
            },
            success: function(result) {
                
            }
        });
    })

    $('.select2').select2();
    $('.content-main h1,.content-main h2,.content-main h3,.content-main h4,.content-main h5,.content-main h6,.content-main h7').addClass('heading_scroll');

    $(window).scroll(function(e) {
        var heading = document.querySelectorAll('.heading_scroll');
        for (let index = 0; index < heading.length; index++) {
            const element = heading[index];
            if ($(element).offset().top - $(window).scrollTop() < +100) {
                $(element).addClass('active')
                $('.heading_scroll').not(element).removeClass('active')
            } else {
                $(element).removeClass('active')
            }
        }

        var taga = document.querySelectorAll('.toc_hsnl a');
        for (let index = 0; index < taga.length; index++) {
            const element = taga[index];
            if ("#" + $('.heading_scroll.active').attr('id') == $(element).data('rel')) {
                $(element).addClass('active')
            } else {
                $(element).removeClass('active')
            }
        }
    })

    $('.item_noti_modal').click(function() {

    })

    const body = document.querySelector("body");
    const modal = document.getElementById("popup-all");
    const closeButton = document.querySelector(".close-button");
    let isOpened = false;

    const openModal = () => {
        modal.classList.add("is-open");
        body.style.overflow = "hidden";
    };

    const closeModal = () => {
        modal.classList.remove("is-open");
        body.style.overflow = "initial";
        clearTimeout(openModal);
    };
    closeButton.addEventListener("click", closeModal);
    if (getCookie('location') == '' || getCookie('location') == null) {
        setTimeout(openModal, 500);
    }


    $('#popup-all').click(function(e) {
        closeModal()
    })
    $('.modal-container').click(function(e) {
        e.stopPropagation()
    })

    $('.item_m_city').click(function() {
        document.cookie = "location=" + $(this).data('id');
        if (SOURCE == 'index') {
            window.location.href = ''
        }
        closeModal()
    })
    $('.item_m--city').click(function() {
        document.cookie = "location=" + $(this).data('id');

        closeModal()
    })
    $('.menu_noti').click(function(e) {
        if (!$(this).hasClass('active')) {
            $(this).addClass('active')
        } else {
            $(this).removeClass('active')
        }
        e.stopPropagation()
        $('.modal_noti').show()
    })

    $('.modal_noti').click(function(e) {
        e.stopPropagation()
    })
    $(document).click(function() {
        $('.modal_noti').hide()
    })
    $(document).ready(function() {
        $('.item_vitri--menu').click(function() {
            $('.title_vitri span').html($(this).find('span').html())
            $('.title_vitri').css({
                width: '40%'
            })
            $('.items_vitri--menu').removeClass('active')
            $(this).addClass('active')
            $('.item_vitri--menu').not($(this)).removeClass('active')
            document.cookie = "location=" + $(this).data('id');
        })
    })
    $('.menu_chat').click(function() {
        alert("Chức năng đang cập nhật")
    })
    var myLazyLoad = new LazyLoad({
        elements_selector: ".lazy"
    });
    // $(window).load(function() {
    //     $.ajax({
    //         url: 'https://sapnhap.bando.com.vn/ptracuu',
    //         type: "POST",
    //         dataType: 'html',
    //         data: {
    //             id: 24
    //         },
    //         success: function(result) {
    //             // $('.tinhthanh_aj').html(JSON.parse(result))
    //             const xa = JSON.parse(result)
    //             console.log(xa)
    //         }
    //     });
    // })
    $('.title_vitri').click(function() {
        if ($('.items_vitri--menu').hasClass('active')) {
            $('.items_vitri--menu').removeClass('active');
        } else {
            $('.items_vitri--menu').addClass('active');
        }
    })
    $('.qt_sanpham').click(function(e) {
        e.preventDefault();

        if (!$(this).hasClass('active')) {
            $(this).addClass('active')
            $(this).html('<i class="fas fa-heart"></i>')
        } else {
            $(this).removeClass('active')
            $(this).html('<i class="fal fa-heart"></i>')
        }
    })

    $(window).load(function() {
        $('.img.mm-lazyload').attr('src', '');
        var lazyloadImg = new LazyLoad({
            elements_selector: "img.mm-lazyload",
            callback_error: function(error) {
                // console.log(error)
            },
            callback_loaded: function(element) {
                $(element).removeClass('skeleton')
                element.classList.add("loaded");
            }
        });
    })
</script>
<?php if ($template == 'index/index') { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                centerPadding: '0px',
                asNavFor: '.slider-for',
                dots: false,
                centerMode: true,
                focusOnSelect: true
            });
        });
    </script>

<?php } ?>
<?php if ($template == 'duan/news_detail') { ?>
    <script type='text/javascript' src='./assets/unitegallery/js/unitegallery.min.js'></script>
    <script type='text/javascript' src='./assets/unitegallery/themes/tiles/ug-theme-tiles.js'></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery("#gallery").unitegallery({
                tiles_type: "justified"
            });
        });
    </script>
<?php } ?>


<script type="text/javascript">
    $(document).ready(function() {
        jQuery(document).ready(function() {
            jQuery('.catagory-title').on("click", function() {
                if ($('.catagory-list__fix').css('display') == 'none') {
                    $('.catagory-list__fix').animate({
                        height: 'show'
                    }, 400);
                } else {
                    $('.catagory-list__fix').animate({
                        height: 'hide'
                    }, 200);
                }
            });
            jQuery('.catagory-list__fix li span').on("click", function() {
                let id = $(this).attr('data-id');
                if ($('#cat2__fix_' + id).css('display') == 'none') {
                    $('#cat2__fix_' + id).animate({
                        height: 'show'
                    }, 400);
                } else {
                    $('#cat2__fix_' + id).animate({
                        height: 'hide'
                    }, 200);
                }
            });
            jQuery('.catagory-list li span').on("click", function() {
                let id = $(this).attr('data-id');
                if ($('#cat2_' + id).css('display') == 'none') {
                    $('#cat2_' + id).animate({
                        height: 'show'
                    }, 400);
                } else {
                    $('#cat2_' + id).animate({
                        height: 'hide'
                    }, 200);
                }
            });
        });
    });

    $(document).ready(function() {
        // process bar
        setTimeout(function() {
            $("#preloader").fadeOut(1e3)
        }, 1500);

    });
    $(document).ready(function() {

        $('.support-content').hide();

        $('a.btn-support').click(function(e) {
            e.stopPropagation();
            $('.support-content').slideToggle();
        });
        $('.support-content').click(function(e) {
            e.stopPropagation();
        });
        $(document).click(function() {
            $('.support-content').slideUp();
        });
        $(".code_qr").click(function() {
            $(".show_code_qr").slideToggle();
        });
        $('.show_code_qr').hide();
        $('.tailvideo_item_owl').click(function() {
            let id = $(this).attr('data-src');
            let img = $(this).attr('data-image');
            let name = $(this).attr('data-name');
            $('.pic-video').attr('data-src', id);
            $('.pic-video img').attr('src', img);
            $('.name-video').html(name);
        });
    });

    $(document).on('click', '.menu_mobi .menulicha', function(event) {
        $('.close_menu').trigger('click');
        return false;
    });

    var menu_mobi = $('.menu_cap_cha').html();
    $('.menu_mobi_add').append('<span class="close_menu">X</span><ul>' + menu_mobi + '</ul>');

    $('.menu_mobi_add ul li ul').removeClass('menu_cap_con');
    $('.menu_mobi_add ul li ul').css({
        'display': 'none'
    });
    $('.menu_mobi_add ul li ul li ul').removeClass('menu_cap_2');
    $('.menu_mobi_add ul li ul li ul').css({
        'display': 'none'
    });
    $('.menu_mobi_add ul li ul li ul li ul').removeClass('menu_cap_3');
    $('.menu_mobi_add ul li ul li ul li ul').css({
        'display': 'none'
    });

    $(".menu_mobi_add ul li").each(function(index, element) {
        if ($(this).children('ul').children('li').length > 0) {
            $(this).children('a').append('<i class="fas fa-chevron-right"></i>');
        }
    });
    $(".menu_mobi_add ul li a i").click(function() {
        if ($(this).parent('a').hasClass('active2')) {
            $(this).parent('a').removeClass('active2');
            if ($(this).parent('a').parent('li').children('ul').children('li').length > 0) {
                $(this).parent('a').parent('li').children('ul').css({
                    display: 'none',
                });
                $(this).parent('a').parent('li').children('ul').hide(300);
                $(this).css({
                    transform: 'rotate(0deg)',
                    transition: '.3s'
                });
                return false;
            }
        } else {
            $(this).parent('a').addClass('active2');
            if ($(this).parents('li').children('ul').children('li').length > 0) {
                $(".menu_m ul li ul").hide(0);
                $(this).parents('li').children('ul').show(300);
                $(".menu_m ul li ul").css({
                    display: 'none',
                });
                $(this).parents('li').children('ul').css({
                    display: 'block',
                });
                $(this).css({
                    transform: 'rotate(0deg)',
                    transition: '.3s'
                });
                return false;
            }
        }
    });

    $('.icon_menu_mobi,.close_menu,.menu_baophu').click(function() {
        if ($('.menu_mobi_add').hasClass('menu_mobi_active')) {
            $('.menu_mobi_add').removeClass('menu_mobi_active');
            $('.menu_baophu').fadeOut(300);
        } else {
            $('.menu_mobi_add').addClass('menu_mobi_active');
            $('.menu_baophu').fadeIn(300);
        }
        return false;
    });
</script>
<?php if (isset($config['googleAPI']['recaptcha']['active']) && $config['googleAPI']['recaptcha']['active'] == true) { ?>
    <!-- Js Google Recaptcha V3 -->
    <?php if ($source == 'contact' || $source == 'dangkydaily') { ?>
        <script src="https://www.google.com/recaptcha/api.js?render=<?= $config['googleAPI']['recaptcha']['sitekey'] ?>"></script>
        <script type="text/javascript">
            grecaptcha.ready(function() {


                grecaptcha.execute('<?= $config['googleAPI']['recaptcha']['sitekey'] ?>', {
                    action: 'contact'
                }).then(function(token) {
                    var recaptchaResponseContact = document.getElementById('recaptchaResponseContact');
                    recaptchaResponseContact.value = token;
                });
                grecaptcha.execute('<?= $config['googleAPI']['recaptcha']['sitekey'] ?>', {
                    action: 'Newsletter'
                }).then(function(token) {
                    var recaptchaResponseNewsletter = document.getElementById('recaptchaResponseNewsletter');
                    recaptchaResponseNewsletter.value = token;
                });

            });
        </script>
    <?php } ?>
<?php } ?>

<?php if (isset($config['oneSignal']['active']) && $config['oneSignal']['active'] == true) { ?>
    <!-- Js OneSignal -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?= $config['oneSignal']['id'] ?>"
            });
        });
    </script>
<?php } ?>



<!-- Js Structdata -->
<?php include TEMPLATE . LAYOUT . "strucdata.php"; ?>

<!-- Js Addons -->
<?= $addons->setAddons('script-main', 'script-main', 0.5); ?>
<?= $addons->getAddons(); ?>

<!-- Js Body -->
<?= htmlspecialchars_decode($setting['bodyjs']) ?>