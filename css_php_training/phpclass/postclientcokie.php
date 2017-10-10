
<?php
  if( isset($_COOKIE["name"]))
  {
	$nameset = $_COOKIE["name"];
  }
  else
  {
   $nameset = "";
  }

?>

<html>
<body>
  <form action="postservercokie.php" method="POST">

  Name: <input type="text" name="name" value=<?php echo $nameset ; ?> >
  Age: <input type="text" name="age" />

  <input type="submit" />
  </form>
</body>
</html>

