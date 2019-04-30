<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Q3</title>
</head>
<body>

<form action="" method="post">


        <label>Last Name:</label>
        <input type="text" name="last_name" value=""/>
        <br/><br/><br/>
        <label>Phone Number:</label>
        <input type="text" name="phone" value=""/>
        <br/><br/><br/>
        <input type="submit" value="Submit" name="done"/>
        <br/><br/><br/>

</form>



</body>
</html>

<?php


if(isset($_POST["done"])){

    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone"];

    if(preg_match("/^[A-Z]/",$last_name) && preg_match("/^\S*$/",$last_name) && preg_match("/^\w{0,29}$/",$last_name) && preg_match("/^[(][0-9]{3}[)][-][0-9]{3}[-][0-9]{4}/",$phone_number)){
        echo "Given information is conform to the required format, thank you for submitting.";
    }else{
        echo "Given information is not conform to the required format, please try again.";
    }
}


?>