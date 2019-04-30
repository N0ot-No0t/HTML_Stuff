<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Q1</title>
</head>
<body>
<br/><br/>
<h3>Function: findSummation</h3>

    <?php

        function findSummation($N){

            if($N < 0 || !is_numeric($N)){
                return false;
            }


            $sum = 0;

            while($N > 0){

                $sum = $sum + $N;

                $N--;

            }

            return $sum;

        }

        echo findSummation(3);

    ?>

<br/><br/>

<h3>Function: uppercaseFirstandLastSorted</h3>

    <?php

        function uppercaseFirstandLastSorted($inputString){

            $lineArray = explode(" ",$inputString);
            $newString = "";

            for ($i = 0; $i < count($lineArray); $i ++){

                $lineArray[$i] = ucfirst($lineArray[$i]);
                $lineArray[$i] = strrev(ucfirst(strrev($lineArray[$i])));

            }

            sort($lineArray);

            for ($i = 0; $i < count($lineArray); $i ++){

                $newString = $newString." ".$lineArray[$i];

            }

            return $newString;

        }

        echo uppercaseFirstandLastSorted("charlie has three blue cars")

    ?>
<br/><br/>
<h3>Function: findAverage_and_Median</h3>

    <?php

        function findAverage_and_Median($nbArray = array()){

            $answers = array(2);
            $answers[0] = 0;
            $answers[1] = 0;
            //pos 0 is average
            //pos 1 is median

            for ($i = 0; $i < count($nbArray); $i++){

                $answers[0] = $answers[0] + $nbArray[$i];


            }

            $answers[0] = $answers[0]/count($nbArray);//average
            $answers[1] = $nbArray[count($nbArray)/2];//median

            return $answers;

        }

        print_r(findAverage_and_Median(array(21,5,32,87,73,15)));

    ?>

<br/><br/>
<h3>Function: find4Digits</h3>

    <?php
        function find4Digits($numbers){

            $numArray = explode(" ", $numbers);

            foreach ($numArray as $number){

                if(strlen($number) == 4){
                    return $number;
                }
            }
            return false;

        }

        echo find4Digits("22 1 444 66 333 4444 55555 66666 2 1 9 555");
    ?>

</body>
</html>