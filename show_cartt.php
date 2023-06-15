<?php 
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/config/database.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) :
    while ($row = mysqli_fetch_assoc($result)) :?>
    <div class="col-md-4">
        <img src="<?php echo $row['image']?>" alt="">
        <h5><?php echo $row['name']?></h5>
        <h5><?php echo $row['price']?></h5>
    </div>
        
    <?php endwhile?>
<?php endif; 
require_once __DIR__ . '/includes/footer.php';
?>
