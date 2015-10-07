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

       <?php 
        include 'PageLayout.php';
        ?>
    
<h2 style="font-family: Curlz MT; font-size: 30px;">Contact</h2>
<p>For any enquires or issues about our website please fill in the form below.</p>


<form action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="post">
   <fieldset>
   <legend>Information</legend>		
    <br>
   
Email: 
<br> <input type="email" name="email" required> <br>

First Name: 
<br> <input type="text" name="first name"> <br>

Last Name: 
<br> <input type="text" name="last name"> <br>

<br>

<input type="radio" name="subject" value="General Enquiry" required> General Enquiry 

<input type="radio" name="subject" value="Group & Corporate Bookings"> Group & Corporate Bookings

<input type="radio" name="subject" value="Suggestions & Complaints"> Suggestions & Complaints

<br><br>


<p1> Message: </p>
<textarea name="message" rows="7" cols="40" required></textarea>

<br><br>

<input type="submit" value="Submit">



    </fieldset>	 
 </form>

    <?php include 'Footer.php' ?>
    
</body>
</html>
