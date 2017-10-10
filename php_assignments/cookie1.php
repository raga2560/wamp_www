<?php 

if($_POST) {

    $user =  $_POST["username"]; 

    $color = $_POST["colorchoice"]; 

   



    if( ( $user != null ) and ( $color != null ) ) 

        { 

          setcookie( "firstname", $user , time() + 86400 );        // 24 hours 

          setcookie( "fontcolor", $color, time() + 86400 ); 

          header( "Location:cookie2.php" ); 

          exit(); 

        } 

}

 $self =  $_SERVER['PHP_SELF']; 

?> 



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 

"http://www.w3.org/TR/html4/strict.dtd"> 

<html> 

<head> 

    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1"> 

    <title>siliconindia cookie</title>        

</head> 



<body> 



    <h1> siliconindia cookie </h1> 



    <hr> 



    <form action ="<?php echo( $self ); ?>" method = "post"> 

    

    Please enter your first name: 

    <input type = "text" name = "username"><br><br> 

    

    Please choose your favorite font color:<br> 

    <input type = "radio" name = "colorchoice" value = "Red">Red 

    <input type = "radio" name = "colorchoice" value = "Green">Green 

    <input type = "radio" name = "colorchoice" value = "Blue">Blue 

    <br><br> 

    <input type = "submit" value = "submit"> 

    </form> 



    <br/> 

    <hr>    



</body> 

</html> 

</html>
