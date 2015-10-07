<!--?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./WP3.css">
        <title> Silverado Cinemas </title>
    </head>
    
     <body -->
        
        <!--? php 
        include 'PageLayout.php';
        ? -->
         
        
        <?php
            
            if(!empty($_POST))
            {
                $booking = array(
                    'movie' => $_POST['movie'],
                    'day' => $_POST['day'],
                    'time' => $_POST['time'],
                    'seats'=> array(
                        'SA' => $_POST['SA'],
                        'SP' => $_POST['SP'],
                        'SC' => $_POST['SC'],
                        'FA' => $_POST['FA'],
                        'FC' => $_POST['FC'],
                        'B1' => $_POST['B1'],
                        'B3' => $_POST['B3'])
                ) ; 
                   
                $seatcount = 0;
                
                foreach($booking['seats'] as $seatType => $quantity)
                {
                    if(!empty($quantity))
                    {
                        $seatcount = $seatcount + $quantity;                        }
                    else
                    {
                        unset($booking['seats'][$seatType]); 
                    }                                                         }
                $bookingMessage='';

                if($seatcount > 0)
                {
                    $_SESSION['cart'][] = $booking;
                          $bookingMessage .= "<p class='msg'>$seatcount seat(s) added to the cart</p>";

                }
                
            }
    

            
        
        
            

/*if ( empty($_SESSION['cart']) )
    {
      echo "<p class='msg'>Nothing in the cart</p>";
    } 
else {
      echo "<p class='msg'>Server has added form data</p>";
      echo "<pre class='msg'>\$_SESSION['cart']: ";
      print_r($_SESSION['cart']);
      echo "</pre>";
    }*/
         ?>
         
    