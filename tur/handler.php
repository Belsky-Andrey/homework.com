<?php
var_dump($_POST);
$tour = $_POST['tour'];
$amount = $_POST['amount'];
$discount = $_POST ['discount'];
$one_day = 100;
$result = '';
$amount_prices = ($amount * $one_day);
if ($tour == 'Turkey') {
    if ($discount == 0) {
        echo "Сумма поездки : $amount_prices USD";
        return;
    }
    if ($discount !== '0') {
        $amount_Discount = ($amount_prices * $discount) / 100;
        $result .= $amount_prices - $amount_Discount;
    }
}
if ($tour == 'Egypt') {
    $amount_Discount = ($amount_prices * $amount) / 100;
    $amount_with_extra_charge = $amount_prices + $amount_Discount;
    if ($discount == 0) {
        $result = $amount_with_extra_charge;
    }
    if ($discount !== '0') {
        $amount_Discount = ($amount_with_extra_charge * $discount) / 100;
        $result .= $amount_with_extra_charge - $amount_Discount;
    }
}
if ($tour == 'Italy') {
    $amount_Discount = ($amount_prices * $amount) / 100;
    $amount_with_extra_charge = $amount_prices + $amount_Discount;
    if ($discount == 0) {
        echo "Сумма поездки : $amount_with_extra_charge USD ";
        return;
    }
    if ($discount !== '0') {
        $amount_Discount = ($amount_with_extra_charge * $discount) / 100;
        $result .= $amount_with_extra_charge - $amount_Discount;
    }
}
echo "Сумма поездки : $result USD ";
