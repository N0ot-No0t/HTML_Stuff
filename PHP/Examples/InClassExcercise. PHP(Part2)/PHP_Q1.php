<!DOCTYPE html>
<!--	Use a function to find the first four-digit number
        in a given string.
	-->
<html lang = "en">
<head> 
  <title> PHP_Q1.php </title>
  <meta charset = "utf-8" />
</head>
<body>

<?php

// Function first_four
//  Parameter: a string containing numbers separated by spaces
//  Returns: the first four-digit number found in the string;
//           returns zero if the string has no four-digit 
//           number

function first_four($str) {

// Split the given string into its numbers

  $numbers = preg_split("/ +/", $str);

			print_r($numbers);  //////
  foreach ($numbers as $numb)
    if (strlen($numb) == 4)
      return $numb;

// If there was no four-digit number, return false
  return false;

} #** End of first_four

// Main test driver
  $test_str = "22 1 444 66 3333 444 55555 66666 2 1 9 555";
  echo "List of numbers is : " . $test_str . "<br />";

// Call the function
  $result = first_four($test_str);

// If the returned value has four digits, display it
  if ($result != 0)
    print("The first four-digit number is: $result <br />");
  else
    print("There was no four-digit number in the string <br />");
?>
</body>
</html>

