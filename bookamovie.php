<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./WP2.css">
        <title> Silverado Cinemas </title>
    </head>
    
    <body>
        

        <?php
            require_once('PageLayout.php');
        ?>
        
        
        
        
<!--* Referenced the following website to understand and create how to create a model window * -->
<!-- * http://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3/ *-->
        
        
        
        <?php include 'Movies.php' ?>
        <?php include 'Footer.php' ?>

        
    </body>
</html>


