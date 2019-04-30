<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$redValue=0;
$blueValue=0;
$greenValue=0;
$yellowValue=0;
$sum=0;

if(isset($_POST['done']))
{
$redValue += $_POST['red'];
$blueValue+=$_POST['blue'];
$yellowValue+=$_POST['yellow'];
$greenValue+=$_POST['green'];
$sum+=$redValue+$blueValue+$yellowValue+$greenValue;
}

if(isset($_POST["didEat"]))
echo "To date, you have eaten:</br>";
echo $redValue." red ones</br>";
echo $yellowValue." yellow ones</br>";
echo $blueValue." blue ones</br>";
echo $greenValue." green ones</br>";
echo "For a grand total of $sum Smarties!";


?>

</body>
</html>