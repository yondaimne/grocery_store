<?php 
// Include the database configuration file  
require_once 'db.php'; 
 
// Get image data from database 
$result = $db->query("SELECT name,image,actual_price,discounted_price FROM products WHERE `category` LIKE 'beverages' "); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php
        echo "$row[name]";
        echo "$row[actual_price]";
        echo "$row[discounted_price]"; } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>