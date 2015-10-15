<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./WP3.css">
        <title> Silverado Cinemas </title>
    </head>
    
    <body>

        
        <?php 
        include 'PageLayout.php';
        ?>
        
        
        <form action="bookform.php"  method="post">
            
            <?php include 'MovieChange.php' ?>
            
            <?php include 'Tickets.php' ?>
            
            <input type="hidden" name="price" id="price" value=>
                                 
                <a id="ViewCart" href="./ShoppingCart.php">View Cart</a>            

            <?php include 'Reservation.php'; ?>
            
            
            <input type="submit" id="AddtoCart" value="SAVE TO CART">
            
        </form>
        
        <?php $_SESSION['voucher'] = "Enter voucher code"?> 
        <?php include 'Footer.php' ?>

    </body>
</html>