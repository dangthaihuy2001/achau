<input type="text" id="input_value" style="width:100%;display:block;">
<button class="btn">Tạo ảnh</button>
<img src="" alt="">
<script src="assets/js/jquery.min.js"></script>
<script>
    $('.btn').click(function() {
        $.ajax({
            url: 'ajax/ajax_taoanh.php',
            type: "POST",
            data: {
                key: $('#input_value').val()
            },
            success: function(result) {
                $("img").attr("src","images/"+result);
               console.log(result)
            
            }
        });
    })
</script>