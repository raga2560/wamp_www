<?php 

    if (isset($_COOKIE['username'])) 

        { 

        $user = $_COOKIE['username']; 

        $role= $_COOKIE['myrole']; 

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



    <h1> Welcome employee</h1> 

    <hr> 

    

    <h2>Hello manager: <?php echo( $user ); ?> </h2> 

    <h2>Your role: <?php echo( $role ); ?> </h2> 

    <input type=button value = "logoff" onclick=<?php setcookie("username", "", time()-3600); ?>> 

    

    

</body> 

</html> 
