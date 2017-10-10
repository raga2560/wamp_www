<?php
$file=fopen("abc2.php","r") or exit("File not found!");
while (!feof($file))
  {
  echo fgetc($file);
  }
fclose($file);
?>

<?php
$filename = "myfile.txt";
$fp = fopen($filename, "r") or die("Couldn't open $filename");
while(!feof($fp))
{ $line = fgets($fp);
print "$line<br>";
}
fclose($fp);
?>

<?php
$file_name = "myfile.txt";
$file_pointer = fopen($file_name, "w+");
// "w+" is the write mode, or the action we're going to perform on the file
// "w+" mode clears the existing file content to 0 bytes
fwrite($file_pointer, "PHP is power ");
// write something to the file
fclose($file_pointer);
print "data written to file successfully";
?>
