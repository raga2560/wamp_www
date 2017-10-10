<?php 

session_start();

if($_POST) {

    $user =  $_POST["username"]; 




    

	$_SESSION['username'] = $user;




}
else
{
	if (!isset($_SESSION['username'])) 

        { 

      $_SESSION['username']=NULL; 
	$user = "ram";

       }
       else {
	$user=  $_SESSION['username'];
	}
}

 $self =  $_SERVER['PHP_SELF']; 

?> 



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 

"http://www.w3.org/TR/html4/strict.dtd"> 

<html> 

<head> 

    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1"> 

    <title>siliconindia </title>        

</head> 



<body> 





    <h1> company session login welcome :<?php echo ($user?$user:"new user") ; ?></h1> 


    <hr> 



    <form action ="<?php echo( $self ); ?>" method = "post"> 

    

    Please enter your first name: 

    <input type = "text" name = "username" value=<?php echo $user ?>><br><br> 

    

    

    <input type = "submit" value = "submit"> 
 <input type=button value="logoff-with-destroy" onclick=<?php session_destroy() ?> >

    </form> 

<a href="session1.php?<?php echo session_id(); ?>">Next page</a> 

    <br/> 

    <hr>    



</body> 

</html> 

</html>
