<!DOCTYPE html>

<?php
//$user_cookie = "userName";
//setcookie("userName",$user_cookie,120*30);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Q2</title>
</head>
<body>

<?php

    $nbVisits_cookie = 1;

    if (isset($_COOKIE["userName"])) {
        $nbVisits_cookie = $_COOKIE["userName"];
        $nbVisits_cookie++;
    }

    if(isset($_COOKIE["last"])){
        $last_cookie = $_COOKIE["last"];
    }

    setcookie("userName", $nbVisits_cookie, time() + 120*30);//2 minutes

    date_default_timezone_set ( "America/New_York" );

    setcookie("last", date("D F j H:i:s T Y"), time() + 120*30);//2 minutes

    if($nbVisits_cookie == 1){
        echo "Welcome to my webpage! It is your first time that you are here.";
    }else{
        echo "This is the " . $nbVisits_cookie . " time that you are visiting my webpage"."<br/>";
        echo "Last time you visited my webpage on ".$last_cookie;
    }




?>

</body>
</html>