<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./WP5.CSS">
        <title> Silverado Cinemas </title>
    </head>
    
    <body>
       <!--?php
        include 'PageLayout.php';
        ?-->
        
        <h2> View Cart </h2>
        
        <table>
            <tr>
                <th>Ticket Type</th>
                <th>Cost</th>
                <th>Qty</th>
                <th>Seats</th>
                <th>Subtotal</th>
            </tr>
            
            
            <?php
                            
//session_unset();
    print_r($_SESSION);
                for($i = 0; $i < sizeof($_SESSION['cart']); $i++)
                {                 
                    foreach($_SESSION['cart'][$i]['seats'] as $seatType => $quantity)
                    {
                        echo "<tr>";
                        echo "<td>".$seatType."</td>";
                        echo "</tr>";
                    }
                }
            ?>
                            
                
            
                                
        </table>
        
    </body>
</html>