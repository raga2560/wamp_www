<?php 

if($_POST) {

    $user =  $_POST["username"]; 

    $role = $_POST["myrole"]; 

    $color = $_POST["colorchoice"];    



    if( ( $user != null ) and ( $role != null ) ) 

        { 

          setcookie( "username", $user , time() + 86400 );        // 24 hours 

          setcookie( "myrole", $role, time() + 86400 ); 
	  
	  if($role == "manager") {

          header( "Location:manager.php" ); 

	  }


	  else {

          header( "Location:employee.php" ); 

	  }
          exit(); 

        } 

}
else
{
	if (isset($_COOKIE['username'])) 

        { 

        $user = $_COOKIE['username']; 

        $role= $_COOKIE['myrole']; 


         if($role == "manager") {

          header( "Location:manager.php" ); 

	  }


	  else {

          header( "Location:employee.php" ); 

	  }


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



    <h1> company cookie login </h1> 



    <hr> 



    <form action ="<?php echo( $self ); ?>" method = "post"> 

    

    Please enter your first name: 

    <input type = "text" name = "username"><br><br> 

    

    choose your role :<br> 

    <input type = "radio" name = "myrole" value = "manager">manager 

    <input type = "radio" name = "myrole" value = "employee">employee

    <br><br> 

    <input type = "submit" value = "submit"> 

    </form> 



    <br/> 

    <hr>    



</body> 

</html> 

</html>
