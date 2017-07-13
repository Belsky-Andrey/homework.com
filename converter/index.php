<?php

if (isset($_POST['number'])) {
    $sum = $_POST['number'] * 25.78;
} else {
    echo 'Что то пошло не так ';
}
echo "Ваша сумма: $sum USD";

