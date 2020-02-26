<?php

function identity($first_name, $last_name, $age)
{
    echo "My name is $first_name $last_name and I'm $age years old.";
}

identity("Sutu", "Sebastian", 23);

echo "<br/>";

$simple_empty_array = [];

for ($i = 0; $i < 10; $i++) {
    $simple_empty_array[] = $i;
}

print_r($simple_empty_array);

echo "<br/>";

$key_value_array = [
    "first_name" => "Sutu",
    "last_name" => "Sebastian",
    "age" => 23
];

foreach ($key_value_array as $key => $value) {
    echo "The key is: $key, and the value is $value. <br/>";
}

$nested_array = [["First nested value"], ["Second nested value"]];

foreach ($nested_array as $element) {
    foreach ($element as $nested_value) {
        echo "$nested_value <br/>";
    }
}

echo "<br/>";
$unsorted_array = ["Cucumber", "Melon", "Apple", "Mango"];
echo "UNSORTED: <br/>";
foreach ($unsorted_array as $fruct) {
    echo "$fruct <br/>";
}

echo "<br/>";
sort($unsorted_array);
echo "SORTED <br/>";
foreach ($unsorted_array as $fruct) {
    echo "$fruct <br/>";
}
