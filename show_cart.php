<?php 
require_once __DIR__ . '/config/database.php';?>
<?php
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)> 0): 
        while ($row = mysqli_fetch_assoc($result)) :?>
        <div class="col-md-3 my-4 border rounded">
                <img src="<?php echo $row['image']?>" class="w-100" alt="no image">
                <h5 class="mt-2"><?php echo $row['name']?></h5>
                <h5><?php echo $row['price']?></h5>
                <input type="hidden" name="name" id="name" value="<?php echo $row['name']?>">
                <input type="hidden" name="price" id="price" value="<?php echo $row['price']?>">
                <input type="number" name="quantity" id="quantity" value="1" class="w-100">
                <input type="submit" name="add_to_cart" class="btn btn-warning add my-3" value="Add to cart" id ="<?php echo $row['product_id']?>">
        </div>
        <?php endwhile?>
<?php endif;
?>