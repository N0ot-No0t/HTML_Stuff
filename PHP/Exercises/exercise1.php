<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

    $numberArray = array(1,-2,3,-4,5,-6,7,-8,9);
    $array1;
    $array2;

    function f($numbers, &$array1, &$array2 ){

        for ($i = 0; $i < count($numbers); $i++){

            if($numbers[$i] > 0){
                $array1[] = $numbers[$i];
            }else{
                $array2[] = $numbers[$i];
            }

        }

    }

    f($numberArray,$array1,$array2);

    print_r($array1);
    print "</br>";
    print_r($array2);


?>

</body>
</html>