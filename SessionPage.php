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

<h1>Session</h1>
<p>Contain the prices for tickets and movies schedule when they're air based on their genre.


<?php include 'JScript_Session.php.' ?> 
 
<table style="width:70%">
  <tr>
    <th>Price List</th>
    <th>Mon - Tue (All Day)<br> Mon - Fri (1pm only)</th>		
    <th>Wed - Fri (not 1pm)<br> Sat - Sun (All Day)</th>
  </tr>
  
    <tr>
        <td>Standard-Full <br> Standard-Conc <br> Standard-Child

        </td>

        <td>$12 <br> $10 <br> $8</td>		
        <td>$18 <br> $15 <br> $12</td>
  </tr>

    </td><td>FirstClass-Adult <br> FirstClass-Child <br> Beanbag*</td>
    <td>$25 <br> $20 <br> $20</td>
    <td>$30 <br> $25 <br> $30</td>

</table>

<p>*Beanbag price allows up to 2 adults OR 1 adult + 1 child OR up to 3 children. One price fits all!</p><br><br>

<div class="img">
        <div class="M1">
		 <a id="demo" onclick="myFunction1()">
		  <img class="M1" src="http://ia.media-imdb.com/images/M/MV5BMTQ1NDI2MzU2MF5BMl5BanBnXkFtZTgwNTExNTU5NDE@._V1_SX214_AL_.jpg" alt="3d image broken" width="200" height="300">
		  </a>
		  
        </div>
    </div>
	
	
    <div class="img">
        <div class="M2">
		 <a id="demo" onclick="myFunction2()">
		  <img class="M2" src="http://ia.media-imdb.com/images/M/MV5BMjM2NTQ5Mzc2M15BMl5BanBnXkFtZTgwNTcxMDI2NTE@._V1_SX214_AL_.jpg" alt="3d image broken" width="200" height="300">
		  </a>
		  
        </div>
    </div>
    
    <div class="img">
        <div class="M3">
		 <a id="demo" onclick="myFunction3()">
		 <img class="M3" src="http://ia.media-imdb.com/images/M/MV5BNzAzMjA1ODAxOV5BMl5BanBnXkFtZTgwODg4NTQzNDE@._V1_SX214_AL_.jpg" alt="3d image broken" width="200" height="300">
		 </a>
		   
        </div>
    </div>
    
    <div class="img">
        <div class="M4">
		 <a id="demo" onclick="myFunction4()">
		  <img class="M4" src="http://ia.media-imdb.com/images/M/MV5BMTQ4MjgwNTMyOV5BMl5BanBnXkFtZTgwMTc1MjI0NDE@._V1_SX214_AL_.jpg" alt="3d image broken" width="200" height="300">
		</a>
		
	   </div>
    </div>




<table style="width:55%">
  <tr>
	<th>Time</th>
    <th>Monday</th>
    <th>Tuesday</th>		
    <th>Wednesday</th>
	<th>Thursday</th>
	<th>Friday</th>
	<th>Saturday</th>
	<th>Sunday</th>
  </tr>
  
  <tr>
		<td>12pm</td>
        <?php include 'Timings.php' ?>
	
	</tr>
    <tr>
		<td>1pm</td>
        <?php include 'Timings.php' ?>
	
	</tr>
	
	 <tr>
		<td>3pm</td>
         <?php include 'Timings.php' ?>
	
	</tr>
	
	
	<tr>
		<td>6pm </td>
        <?php include 'Timings.php' ?>
	
	</tr>
	<tr>
		<td>9pm </td>
        <?php include 'Timings.php' ?>
	
	</tr>
</table>
<br>

    <?php include 'Footer.php' ?>


</body>
</html>

