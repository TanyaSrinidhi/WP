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

            <div id="ViewCart"><a id="link" href="./ShoppingCart.php">View Cart</a></div>

            <?php include 'Reservation.php'; ?>
            
            
            <input type="submit" id="submit" value="Add to Cart">
            
        </form>
        
        
        <!--?php include 'JScript.php' ?-->

        
        <?php include 'Footer.php' ?>

    </body>
</html>