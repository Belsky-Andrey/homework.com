<?php
$array=['Lorem','dolor','Ipsum','sit','Lorem','amet','Ipsum','Lorem','quia','Ipsum','do','Lorem','qui ','Ipsum',];
echo "<pre>";
print_r($array);

$result = array();
foreach ($array as $value) {
    if (in_array($value, $array) && !in_array($value, $result)) {
        array_push($result, $value);
    }
}
echo "<pre>";
print_r($result);