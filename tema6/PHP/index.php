<?php

$number = 14;

if ($number > 20) {
    echo "mai mare decat 20";
} elseif ($number > 10 && $number < 15) {
    echo "mai mare decat 10 si mai mic decat 15";
} else {
    echo "mai mare mic decat 10";
}

echo "<br/>";

$gender = "male";

switch ($gender) {
    case 'male':
        echo "selected gender is Male";
        break;
    case 'female':
        echo "selected gender is Female";
        break;

    default:
        echo "selected gender is Unkown";
        break;
}

echo "<br/>";

$days_of_the_week = ["Luni", "Marti", "Miercuri", "Joi", "Vineri", "Sambata", "Duminica"];

for ($i = 0; $i < 7; $i++) {
    echo $days_of_the_week[$i] . "<br/>";
}

echo "<br/>";

foreach ($days_of_the_week as $day) {
    echo $day . "<br/>";
}

echo "<br/>";

$incremental_number = 0;

while ($incremental_number <= 10) {
    echo $incremental_number++ . "<br/>";
}

echo "<br/>";

$do_while_number = 1;

do {
    echo "Numarul este: $do_while_number <br>";
    $do_while_number++;
} while ($do_while_number <= 5);
