
	<?php 
	session_start();
	?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<!--head>
	<script>
	function discount() {
	$voucher = "12345-67890-AZ";
	$voucher = $_POST['voucher'];
	
	$vouArray[] = {12345-67890-ZI,74108-52963-IN,20786-19867-KF, 15415-84120-OO, 30515-19057-KA};
	foreach (var a in vouArray){

	if(chr(x+$sum1)== $voucher[12]){
	$total = $subtotal * 20%;
	return true;

	else{
	alert("Invalid Code");
}
	}
		}	
	
	</script>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<title>Silverado Cinemas</title>
	<link rel="stylesheet" href="WP4.css">
	</head>
	<body>

     
	  
	  <form id="data" method="POST" name="data">

	
 <?php
        //if(isset($_POST['voucher'])){
		//$_SESSION['data'] = $POST['data']; 
	//}
?>



	Voucher: 
	<input type="voucher" name="voucher" pattern="^[0-9]\d{4}\W\d{5}\W[A-Z]{2}" required/> 
	<button onclick="discount()">Apply</button>
	  
	  
	  <?php //include 'footer.php';?>
    
    
		</body-->
        
        <body>
            <p>Voucher code: </p>
            <form method="post" action="RegEx.php">
            <input type="text" name="regex" pattern="\d{5}-\d{5}-[A-Z][A-Z]" title="invalid voucher code">
            <input type="submit" value="Apply">
            </form>            
            
        </body>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	</html>
