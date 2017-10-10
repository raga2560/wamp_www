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






    
<a href="session_companylogin.php?<?php echo( SID ); ?>">prev page</a> 


</body> 


</html>