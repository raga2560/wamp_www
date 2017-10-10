<?php 

    if (isset($_COOKIE['firstname'])) 

        { 

        $user = $_COOKIE['firstname']; 

        $color= $_COOKIE['fontcolor']; 

        } 

?> 



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 

"http://www.w3.org/TR/html4/strict.dtd"> 

<html> 

<head> 

    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1"> 

    <title>siliconindia</title>        

</head> 



<body> 



    <h1> siliconindia cookie</h1> 

    <hr> 

    

    <h2>Hello: <?php echo( $user ); ?> </h2> 

    <h2>Your color: <?php echo( $color ); ?> </h2> 

    

    

</body> 

</html> 
