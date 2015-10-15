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
       <?php
        include 'PageLayout.php';        
        ?>
        
         
        <p class="heading"> VIEW CART </p>
        
       
            
            
        <?php
                            
                //session_unset();
                //print_r($_SESSION);
            include 'functions.php';

                $total = 0;
                for($i = 0; $i < sizeof($_SESSION['cart']); $i++)
                {   
                    echo "<div id='ticket'>";
                   // echo "<hr>";
                    echo "<br><p class='MovieName' >".MovieName($_SESSION['cart'][$i]['movie'])."</p>";
                    $subtotal = 0;
                 
                    echo "<table>
                        <tr>
                            <th>Ticket Type</th>
                            <th>Cost</th>
                            <th>Qty</th>                            
                            <th>Subtotal</th>
                        </tr>";
                    
                    foreach($_SESSION['cart'][$i]['seats'] as $seatType => $quantity)
                    {
                        echo "<tr>";
                        echo "<td>".SeatName($seatType)."</td>";                        
                        echo "<td id='txtCost'> $".TicketCost($seatType, $i)."</td>"; 
                        echo "<td id='txtQty'>".$quantity."</td>";                   
                        $subtotal = $subtotal + (TicketCost($seatType, $i) * $quantity);
                        echo "<td id='subcost'> $".TicketCost($seatType, $i)*$quantity."</td>";
                        echo "</tr>";
                    }                  
                    echo"
                    <tr>
                        <td colspan='3' style='text-align: right'>Subtotal</td>
                        
                        <td>\$$subtotal</td>
                    </tr>";
                    $total = $total + $subtotal;
                        
                    echo "</table>";
                    echo "</div>";
                    
                    echo "<div id='delete'>
                    <a id='link' href='DeleteFromCart.php?var=$i'>Delete from Cart</a></div>";
                    
                    echo "<input type='text' id='qty' maxlength='2'>";
                    echo "<div id='delete'>
                    <a id='link' href='UpdateCart.php'>UPDATE CART</a></div>"; 
                

                    
                                        
                }
                
                
                
        ?>
       
         <div id=vcode>       
        <p>Voucher code: </p>
        <form method="post" action="RegEx.php">
            <input type="text" name="regex" pattern="\d{5}-\d{5}-[A-Z][A-Z]" title="invalid voucher code">
            <input type="submit" value="Apply">
        </form>
        </div>
        
        <table id='total'>
            <tr id='totals'>
                <td id='totals'>TOTAL: </td>
                <td id='totals'> <?php echo "$".$total;?> </td>       
            </tr>
            <tr id='totals'>
                <td id='totals'>VOUCHER DISCOUNT :</td>
                <td id='totals'><?php echo $_SESSION['voucher']; ?> </td>
            </tr>
            <tr id='totals'>
                <td id='totals'>GRANDTOTAL: </td>
                <td id='totals'>
            <?php 
                if ($_SESSION['voucher'] == "20%") 
                {
                    $grandtotal = $total - ($total * 20/100);
                    echo "$".$grandtotal;
                }
                else
                {
                    $grandtotal = $total;
                    echo "$".$grandtotal;
                }
            ?>
                </td>
            </tr>
        </table>
                
       
                    
        
        
        
         <div id="delete" style="margin-top: 10%; margin-left: 40%; margin-bottom: 10%;"><a id="link" href="./CustomerDetails.php" >BOOK</a></div>
        
                
        <?php include 'Footer.php' ?>
        <script>
            function updateCart()
            {
                document.getElementById('txtQty').innerHTML =  document.getElementById('qty').value;
                
                var qty = document.getElementById('txtQty').innerHTML;
                
                var cost = qty * document.getElementById('txtCost').innerHTML;
                
                document.getElementById('subcost').innerHTML = cost;
                
            }
        </script>
    </body>
</html>