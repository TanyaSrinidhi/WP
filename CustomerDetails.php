<?php
	session_start();
?>	

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<title>Silverado Cinemas</title>
	<link rel="stylesheet" href="WP4.css">
	</head>
	<body>

      <?php include 'PageLayout.php';?>
    
	<h2 style="font-family: Curlz MT; font-size: 30px;">Contact Details</h2>
	<p>Please fill in the details accordingly.</p>


	<form id="data" method="POST" name="data" action="Checkout.php">

	
 <?php

		if(isset($_POST['Submit'])){
		$_SESSION['data'] = $POST['data'];
	}

    
?>

 
 
	<fieldset>
		<legend>Information</legend>		
		<br>
   
	Name: 
	<br> <input type="text" name="Name" pattern="^[A-Za-z]*\s{1}[A-Za-z]*$" required/> <br>
        
        <br>
	Phone Number:
	<br> <input type="text" name="PhNumber" pattern="^\D*04(\D*\d){8}\D*$" required/> <br>
        <br>
	Email: 
	<br> <input type="email" name="Email" pattern="^[a-zA-Z0-9]+@[a-zA-Z]+\.(com|edu|org|net)" required/> <br>

	   <br>

	   <!--input type="radio" name="subject" value="General Enquiry"> General Enquiry 

	   <input type="radio" name="subject" value="Group & Corporate Bookings"> Group & Corporate Bookings

        <input type="radio" name="subject" value="Suggestions & Complaints"> Suggestions & Complaints

	   <br--><br>


	   <p1> Address: </p>
        <textarea name="message" rows="7" cols="40">       </textarea>

	   <br><br>

	   <input type="submit" value="Submit">
	   <input type="reset" value="Reset">


            </fieldset>	 
        </form>
        
    
	</body>
    
    		<?php include 'Footer.php';?>

</html>