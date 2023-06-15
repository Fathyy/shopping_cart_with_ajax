<?php 
require_once __DIR__ . '/config/database.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) :
    while ($row = mysqli_fetch_assoc($result)) :?>
    <div class="col-md-3">
        <img src="<?php echo $row['image']?>" alt="">
        <h5 class="name"><?php echo $row['name']?></h5>
        <h5><?php echo $row['price']?></h5>
        <input type="hidden" name="name" id="name" value="<?php echo $row['name']?>">
        <input type="hidden" name="price" id="price" value="<?php echo $row['price']?>">
        <input type="number" name="quantity" value="1" class="quantity">
        <input type="submit" value="Add to Cart" class="btn btn-warning add" id="<?php echo $row['product_id']?>">
    </div>       
    <?php endwhile?>
<?php endif; 
?>
