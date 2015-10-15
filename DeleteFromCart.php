<?php
session_start();
?>
<html>
    
    <?php
        
        $i = $_GET['var'];
        echo $i ;
        echo "\n";
        unset($_SESSION['cart'][$i]);        
        $_SESSION['cart'] = (array_values($_SESSION['cart']));
        print_r($_SESSION);

        include 'ShoppingCart.php';
    ?>
</html>