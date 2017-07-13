<?php

$first = (int)$_POST['first'];
$second = (int)$_POST['second'];
$operation = $_POST['operation'];
$result = '';
if (isset($_POST['calculation'])) {

    switch ($operation) {
        case'+':
            $result .= $first + $second;
            break;
        case'-':
            $result .= $first - $second;
            break;
        case'*':
            $result .= $first * $second;
            break;
        case'/':
            if ($second == 0)
                $result = "Деление на ноль невозможно";
            else
                $result .= $first / $second;
            break;
        case '%':
            if ($first == 0)
                $result = "От нуля % не взять";
            else
                $result .= ($first * $second) / 100;
            break;
        case 'log()':
            $result .= log($first, $second);
            break;
    }
}
include_once 'index.php';
