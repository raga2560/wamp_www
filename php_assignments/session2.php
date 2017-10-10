<?php 


session_start(); 


($_SESSION['count']) ? $_SESSION['count']++ : $_SESSION['count'] = 1; 


?> 






<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 


"http://www.w3.org/TR/html4/strict.dtd"> 


<html> 


<head> 


    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1"> 


    <title>siliconindia</title>        


</head> 






<body> 


    <h1>siliconindia  (page 2)</h1> 


    <hr> 


        <h3>PHPSESSID = <?php echo session_id(); ?></h3> 


    <hr> 


    <h2>You have been here <?php echo( $_SESSION['count'] ); ?> times in this session.</h2>    


    <a href="session1.php?<?php echo( SID ); ?>">Previous page</a> 


</body> 


</html> 


</html>