<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8"/>
  </head>
  <body>
	<h1> File I/O - Writing and reading to/from file</h1>
<?php
//$filename = "file_io4.txt";
$myfile = fopen("file_io4.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
echo "Just finished writing to file<br />Content of file:";
fclose($myfile);
//------------------------------------------------
// Read one line at a time using fgets & feof
echo "<br /><br />Reading from file and echoing to screen one line at a time fgets()<br />";
$file = fopen("file_io4.txt","r");
while(!feof($file))
{
	echo fgets($file);
}
fclose($file);
//------------------------------------------------------
// Read using fread
echo "<br /><br />Reading from file and echoing to screen using fread()<br />";
$file = fopen("file_io4.txt","r");
echo fread($file,filesize("file_io4.txt"));
fclose($file);
//------------------------------------------------------
//Read using readfile
echo "<br /><br />Reading from file and echoing to screen using readfile() <br />";
echo readfile("file_io4.txt");
//------------------------------------------------------
//Read using readfile
echo "<br /><br />Reading from file using file() <br />";
print_r(file("file_io4.txt"));
//---------------------------------------------------------
// Get content of file using file_get_content
echo "<br /><br />Reading from file using file_get_contents() <br />";
print_r(file_get_contents("file_io4.txt"));
?>
  </body>
</html>
