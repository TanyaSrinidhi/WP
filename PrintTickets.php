<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./WP7.css">
    </head>
    <body>
        
        
        <?php
                //include 'PageLayout.php';
                include 'functions.php';

            for($i = 0; $i < sizeof($_SESSION['cart']); $i++)
            {
                $subtotal = 0;
                $totalQuantity = 0;
           
       //         echo "<div id='tDetails'>";
                foreach($_SESSION['cart'][$i]['seats'] as $seatType => $quantity)
                {
                    $subtotal = $subtotal + (TicketCost($seatType, $i) * $quantity);
                    $totalQuantity = $totalQuantity + $quantity;
         //           echo $quantity."&#160&#160 x &#160&#160".SeatName($seatType)."<br>";
           //         echo "$".TicketCost($seatType, $i)*$quantity."<br>";
                }
             /*   echo "Voucher discount:"."<br>";
                echo "Total: $".$subtotal."<br>";
                echo "</div>";
                
                echo "</div>";
*/                
                
                //printing each ticket
                
                for($j = 1; $j <= $totalQuantity; $j++)
                {
                    echo "<img id='tktpic' src='tickett.png' height='350px' width='50px'>";

                    echo "<div id=subticket>";

                    echo "<br>SILVERADO CINEMAS";
                    echo "<p>".MovieName($_SESSION['cart'][$i]['movie'])."</p>";
                    echo "<p>".Day($_SESSION['cart'][$i]['day']);
                    echo ", ".$_SESSION['cart'][$i]['time']."PM </p>";
                    foreach($_SESSION['cart'][$i]['seats'] as $seatType => $quantity)
                        echo "<br><br><br><br><br>";
                        echo SeatName($seatType)."<br>";

                    echo "Seat ".$j;
                    echo "</div>";
                }
            }
        ?>
    </body>
    
</html>