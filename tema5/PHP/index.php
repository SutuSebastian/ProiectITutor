<?php
define("DATE_TIME", date('D m Y h:i A'));

$name = "Sutu Sebastian";
$age = 23;

echo "My name is $name and I'm $age years old. <br/>";

echo "Today is " . DATE_TIME . "<br/>";

$number_1 = 22;
$number_2 = 48;

$addition = $number_1 + $number_2;
$multiplication = $number_1 * $number_2;
$complicated_sets_of_operators = ($number_2 % $number_1) - $number_2 / ($number_1 - $number_2) + $number_2;


echo "addition $addition <br/>";
echo "multiplication $multiplication <br/>";
echo "some complicated sets of operators $complicated_sets_of_operators";



// DATE_TIME = 22; // this will error because constants cannot be overwritten
