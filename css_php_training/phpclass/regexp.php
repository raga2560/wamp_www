<?php 

$pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+.[a-zA-Z.]{2,5}$/";
   $email   = "jim@demo.comshshshs";
    if (preg_match($pattern,$email)) echo "Match";
    else echo "Not match";
?>