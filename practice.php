<?php
require_once __DIR__ . '/includes/header.php'; 
require_once __DIR__ . '/includes/navbar.php'; 
?>

<div class="container">
    <div class="row show_cart">
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            method: "POST",
            url: "show_cartt.php",
            success: function(data){
                $(".show_cart").html(data);
            }
        });
    });
</script>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
