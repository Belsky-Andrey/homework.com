<?php
echo "<pre>";
$arr = ['5', '0', '8', '10', '500', '100',];
print_r($arr);

unset($arr[2]);
sort($arr);

echo "<pre>";
print_r($arr);