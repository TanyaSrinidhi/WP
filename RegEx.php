<?php
session_start();
?>
<html>
    <?php
        $v1 = substr($_POST['regex'], 0, 5);
        $chk1 = (($v1[0]*$v1[1] + $v1[2]) * $v1[3] + $v1[4]) % 26;
        $L1 =  chr(65+$chk1);



        $v2 = substr($_POST['regex'], 6, 5);
        $chk2 = (($v2[0]*$v2[1] + $v2[2]) * $v2[3] + $v2[4]) % 26;        
        $L2 = chr(65+$chk2);
        
        if(($L1 == substr($_POST['regex'], 12, 1)) && ($L2 == substr($_POST['regex'], 13, 1)))
        {
            $_SESSION['voucher'] = "20%";
            include 'ShoppingCart.php';
        }
        else
        {            
            $_SESSION['voucher'] = "Not valid";
            include 'ShoppingCart.php';
        }
    ?>
    
</html>