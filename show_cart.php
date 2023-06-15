<?php 
require_once __DIR__ . '/config/database.php';?>
<?php
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)> 0): 
        while ($row = mysqli_fetch_assoc($result)) :?>
        <div class="col-md-3">
                <img src="<?php echo $row['image']?>" alt="no image">
                <h5><?php echo $row['name']?></h5>
                <h5><?php echo $row['price']?></h5>
                <input type="hidden" name="name" id="name{$row['id']}" value="<?php echo $row['name']?>">
                <input type="hidden" name="price" id="price{$row['id']}" value="<?php echo $row['price']?>">
                <input type="number" name="quantity" id="quantity{$row['id']}" value="1">
                <input type="submit" name="add_to_cart" class="btn btn warning add" value="Add to cart" id ="<?php echo $row['product_id']?>">
        </div>
        <?php endwhile?>
<?php endif;
?>