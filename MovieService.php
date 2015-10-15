	<?php
	session_start();
		?>

<!DOCTYPE html>
<html>
	<head>
		
	<!--?php include 'PageLayout.php'; ?-->
		
		<title>Silverado Cinemas</title>
        
			<link rel="stylesheet" href="movieservcss.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		   $.post("https://<?php echo$_SERVER['SERVER_NAME']; ?>/~e54061/wp/moviesHTML.php?formaction=bookform.php",
		   null,
		   function(data,status)
		   {
			$('#data').html(data);
		   });
		});
		</script>
		

		<script>
	$(document).ready(function(){
    $("button").click(function(){
        $("video").toggle();
    });
});
		</script>


		
	</head>
	<body>
		<div id='data'></div>
		
        <div style="text-align:right;">
	<button>Trailer</button>	
		</div>		

</head>
<body>
		<a href="bookamovie.php">NEXT</a>
		<!--?php include 'footer.php';?-->
	</body>
</html>