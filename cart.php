<?php
session_start();
?>

<?php
require_once __DIR__ . '/includes/header.php'; 
require_once __DIR__ . '/includes/navbar.php'; 
?>

<div class="container">
    <div class="col-md-12">
        <table class="table table-bordered my-5">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>

            <?php
            $total_price = 0;
            // if there are items in the cart
            if (isset($_SESSION['cart'])) :
                foreach ($_SESSION['cart'] as $key => $value) :?>
                    <tr>
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['name']?></td>
                        <td><?php echo $value['price']?></td>
                        <td><?php echo $value['quantity']?></td>
                        <td>
                            <button class="btn btn-danger remove" id="<?php echo $value['id']?>">Remove</button>
                        </td>
                    </tr>
                        <?php
                        $total_price = $total_price + $value['quantity'] * $value['price'];
                        ?>
                    
                    <td>
                    <button class="btn btn-warning clearall" id="<?php echo $value['id']?>">Clear All</button>
                    </td>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td class="text-center">No item selected</td>
                </tr>
            <?php endif ?>
            <!-- show the total price -->
            <tr>
                <td colspan="2"></td>
                <td>Total Price</td>
                <td><?php echo $total_price?></td>
                
            </tr>
        </table>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        // remove button
        $(".remove").click(function(){
            var id = $(this).attr("id");

            var action = "remove";

            $.ajax({
                method: "POST",
                url: "action.php",
                data:{action:action,id:id},
                success: function(data){
                    alert("You have removed an item with ID"+id+"");

                }
            });
        });
        // clearall button
        $(".clearall").click(function(){
            var action = "clear";
            $.ajax({
                method: "POST",
                url: "action.php",
                data:{action:action},
                success: function(data){
                    alert("You have cleared all items!");

                }
            });
        });
    });
</script>
<?php require_once __DIR__ . '/includes/footer.php'; ?>