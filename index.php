<?php
require_once __DIR__ . '/includes/header.php'; 
require_once __DIR__ . '/includes/navbar.php'; 
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 show_cart">

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        show_cart();
        function show_cart(){
            $.ajax({
                method: "POST",
                url: "show_cart.php",
                success: function(data){   
                    $(".show_cart").html(data);   
                }
            });
        }

        // this is after the add to cart button is clicked

        $(document).on("click", ".add", function(){
            var id = $(this).attr("id");
            var name = $("#name"+id+"").val();
            var price = $("#price"+id+"").val();
            var quantity = $("#quantity"+id+"").val();
            $.ajax({
                method: "POST",
                url: "add_to_cart.php",
                data: {id:id, name:name, price:price, quantity:quantity},
                success: function(data){
                    alert("You have added a new item!");
                }
            });

        });
    });
 </script>
 <?php require_once __DIR__ . '/includes/footer.php'; ?>
 
 