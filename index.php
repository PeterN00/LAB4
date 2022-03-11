<?php
    include('Entities/product.class.php');
?>

<!DOCTYPE html>
<html>
<body>
    <?php include('header.php'); ?>
    <?php
        $product = new Product();
        $array = $product->list_product();
        echo '<pre>'; print_r($array); echo '</pre>';
    ?>
    <?php include('footer.php'); ?>
</body>
</html>