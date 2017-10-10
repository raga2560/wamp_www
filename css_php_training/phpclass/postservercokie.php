<?php
  if( $_POST["name"] || $_POST["age"] )
  {
     echo "Welcome ". $_POST['name']. "<br />";
     echo "You are ". $_POST['age']. " years old.";

     setcookie("name",$_POST['name'], time()+3600);
     exit();
  }
?>