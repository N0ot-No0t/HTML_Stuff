<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Hotel Reservation Form (Colored)</title>

    <script type="text/javascript" src="a4q4.js"></script>
    <link type="text/css" href="my_stylesheet.css" rel="stylesheet"/>

<body onload="showtime()">

<table>

    <tr>

        <td>
            <h2>Hotel Reservation Form</h2>
        </td>

        <td>

            &nbsp;

        </td>

        <td>

            &nbsp;

        </td>

        <td>

            &nbsp;

        </td>

    </tr>

    <tr>

        <td colspan="2">

            <a href="welcome.php">

                <img class="hotel_image" src="https://i.ytimg.com/vi/Uj3_KqkI9Zo/maxresdefault.jpg" alt="Hotel Image" width="200" height="150">

            </a>

        </td>

        <td colspan="2">



        </td>

        <td>

        </td>

        <td colspan="2">

            <form method="post">

                <h3>Enter Username and Password</h3>

                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>

                <h4>* A username can contain letters (both upper and lower case) and digits.<br/>*A password must be
                    at least 6 characters long (characters are to be letters<br/>&nbsp;&nbsp; and digits only), have at least one
                    letter and at least one digit</h4>

                <input type="submit" name="login" value="Sign in"/>
                <input type="submit" name="sign_up" value="Sign up"/>

            </form>



        </td>




    </tr>

    <tr>

        <td>

            <h6><a href="https://i.ytimg.com/vi/Uj3_KqkI9Zo/maxresdefault.jpg">Credits</a></h6>

        </td>

        <td colspan="3">

            <!--<?php date_default_timezone_set("America/New_York"); echo "Time: ".date("H:i:s")?>-->

            <div id="time"></div>


        </td>

        <td colspan="3">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php include "user_login.php"; ?>

        </td>


    </tr>

</table>