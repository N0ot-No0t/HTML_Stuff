<?php

if(isset($_POST["login"])){

    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    $userFile = fopen("login.txt","r");
    $valid = false;

    while(!feof($userFile) && !$valid){

        $lineArray = explode(":",fgets($userFile));
        $currentUsername = $lineArray[0];
        $currentPass = $lineArray[1];

//        echo "<br/>";
//        echo "MM".$inputUsername."MM".$currentUsername."MM";
//        echo "<br/>";
//        echo "MM".$inputPassword."MM".$currentPass."MM";
//        echo "<br/>";

        if($inputUsername === $currentUsername){

            if($inputPassword === $currentPass){
                $valid = true;
            }



        }

    }

    fclose($userFile);

    if($valid){
        echo "<h2 id='greetingMessage'>Welcome, ".$_POST["username"]."<h1/>";
    }else if(!$valid){

        echo "Invalid username or password";

    }

}

if(isset($_POST["sign_up"])){

    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    if(preg_match("/[a-zA-Z0-9]/",$inputUsername) && preg_match("/[a-zA-Z0-9]{6}/",$inputPassword)){
        $line = "\n".$inputUsername.":".$inputPassword.":";

        $userFile = fopen("login.txt", "a") or die("Unable to open file!");

        fwrite($userFile,$line);

        fclose($userFile);

        echo "<h2 id='greetingMessage'>Account Creation Successful<h1/>";
    }else{
        echo "<h2 id='greetingMessage'>Account Creation Failed<h1/>";
    }



}