<?php
$arr1=['5', '0', '8', '10', '500', '100',];
$arr2=['2', '3', '10', '8', '300', '200',];
echo "<pre>";
print_r($arr1);
print_r($arr2);


$arr3=array_merge($arr1,$arr2);
echo "<pre>";
print_r($arr3 );
