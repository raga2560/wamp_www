     <?php 

     setcookie("userid", "X12AS67", time()+1*365*24*60*60);

  if(isset($_COOKIE["useridtime"]))
  {
   $lastlogin = $_COOKIE["useridtime"];
  }
  else {
   $lastlogin="";
  }
     setcookie("useridtime", time(), time()+1*365*24*60*60);


  if(isset($_COOKIE["useridrefresh"]))
  {
   $refreshcount = (int) $_COOKIE["useridrefresh"] + 1;
  }
  else 
  {
	$refreshcount = 0;
  }
   setcookie("useridrefresh", $refreshcount, time()+1*365*24*60*60);

     ?>


<?php

  // Print a cookie

  if(isset($_COOKIE["userid"]))
  {
  echo "Your userid: ".$_COOKIE["userid"];
  }

echo "</BR>";

  echo "Your lastlogin time : ".date("hr-min-sec",$lastlogin);
echo "</BR>";
  echo "Your newlogin time: ".date("hr-min-sec",$_COOKIE["useridtime"]);
echo "</BR>";

  echo "Your refreshcount : ".$refreshcount;
echo "</BR>";
print_r($_COOKIE);

?>
