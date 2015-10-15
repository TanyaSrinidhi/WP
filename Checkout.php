<?php
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./WP6.css">
    </head>
    <body>
       
        <?php
            
            include 'PageLayout.php';

            $Checkout = fopen("reservation.txt", "w"); 
            fwrite($Checkout, "\n".$_POST['Name'].', ');
            fwrite($Checkout, $_POST['Email'].', ');
            fwrite($Checkout, $_POST['PhNumber'].', ');


//            fwrite($Checkout, $_POST['voucherCode']);
            // clearing session
        ?>
        
        <h1 id="heading"> Your Ticket(s) has been booked! </h1>
        
        
            <br>
            <?php

                include 'functions.php';

                for($i = 0; $i < sizeof($_SESSION['cart']); $i++)
                {
                
                    //echo "<hr>";
                    echo "<div id='ticket'>";
                    $subtotal = 0;
                    $imgsrc = Image($_SESSION['cart'][$i]['movie']);
                    echo "<img id='poster' src=$imgsrc alt='poster'>";
                                                
                    
                    echo "<div class='cDetails'>";
                    echo $_POST['Name']."<br>";
                    echo $_POST['PhNumber']."<br>";
                    echo $_POST['Email']."<br>";
                    echo "</div>";

                    
                    
                    echo "<div class='mDetails'>";
                    echo "SILVERADO CINEMAS";
                    echo "<p>".MovieName($_SESSION['cart'][$i]['movie'])."</p>";
                    fwrite($Checkout, MovieName($_SESSION['cart'][$i]['movie']).", ");
                           
                    echo "<p>".Day($_SESSION['cart'][$i]['day']);
                    fwrite($Checkout, Day($_SESSION['cart'][$i]['day']).", ");
                    
                    echo ", ".$_SESSION['cart'][$i]['time']."PM </p>";                         fwrite($Checkout, $_SESSION['cart'][$i]['time']."PM, ");
                   
                    echo "</div>";
                    
                    
                    foreach($_SESSION['cart'][$i]['seats'] as $seatType => $quantity)
                    {
                        fwrite($Checkout, SeatName($seatType).", ");
                        
                        $subtotal = $subtotal + (TicketCost($seatType, $i) * $quantity);
                        
                        
                        echo "<div class='tDetails'>";
                        
                        echo "<table>
                            <tr>
                                <td>".$quantity."&#160&#160 x &#160&#160  ".SeatName($seatType)."</td>";
                        
                        echo "<td>$".TicketCost($seatType, $i)*$quantity."</td>";
                        echo "</tr></table>";
                        
                        echo "</div>";
                        
                        fwrite($Checkout, TicketCost($seatType, $i)*$quantity.", ");
                        
                    }
                    
                    //echo "Voucher discount:";
                    
                    echo "<div class='tTotal'>";
                    
                    echo "TOTAL:&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160 ";
                    echo "$".$subtotal;
                    
                    echo "</div>";
                    
                    fwrite($Checkout, $subtotal.", ");
                    
                   //echo "<hr>"; 
                    echo "</div>";
                    
                }
                
                
            ?>
            
        <div id="link">
            <a id='tPrint' href="PrintTickets.php">Print Tickets</a>
        </div>
        
        </div>
        
        <?php include 'Footer.php'; ?>
        <!--?php
            session_unset();

        ?--> 
    </body>
</html>