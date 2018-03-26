<?php 
    require 'class.php'; 
    $page = new Html();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $page->meta();?>
    <?php echo $page->js();?>
    <?php echo $page->css();?>
    <?php echo $page->title();?>
</head>
<body>

    <?php echo $page->img();?>
    <div><?php echo $page->link();?></div>
    
</body>
</html>