<?php 


session_start(); 


?> 






<html> 


<head> 


    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1"> 


    <title>SiliconIndia</title>        


</head> 






<body> 






    <h1>Siliconindia  (page 1)</h1> 


    <hr> 


        <h3>PHPSESSID = <?php echo session_id(); ?></h3> 


    <hr> 

<h2>You have been here <?php echo( $_SESSION['count'] ); ?> times in this session.</h2> 

    <h2>Click the next page and see number of visits during this visit.</h2>    


    <a href="session2.php?<?php echo( SID ); ?>">Next page</a> 


</body> 


</html>