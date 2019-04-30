<?php
/**
 * Created by IntelliJ IDEA.
 * User: Noot
 * Date: 28/03/2019
 * Time: 15:46
 */

$array = array(22,1,444,66,333,4444,55555,66666,2,1,9,555);

$numberList = "22 1 444 66 333 4444 55555 66666 2 1 9 555";

echo "List of numbers is ",$numberList;

function findFourDigits($numbers){

    $array = preg_split("/ /",$numbers);


        //if(preg_match("/[\d\d\d\d]/"))

}