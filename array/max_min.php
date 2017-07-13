<?php
echo "<pre>";
$arr = ['5', '0', '8', '10', '500', '100',];
print_r($arr);
$min = current($arr);
foreach ($arr as $key => $current_value) {
    if ($current_value < $min) {
        $min = $current_value;

    }
}
echo "Минимальный элемент равен: {$min}";
echo PHP_EOL;
$max = current($arr);
foreach ($arr as $key => $current_value) {
    if ($current_value > $max) {
        $max = $current_value;

    }
}
echo "Максимальный  элемент  равен: {$max}";



