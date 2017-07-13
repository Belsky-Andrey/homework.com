<?php
$amount = (int)$_POST['amount'];
$convert = $_POST['convert'];

function getCurrencyFromUrl($url, $params = 'json')
{
    $headers = get_headers($url);
    if (!$headers) {
        return false;
    }
    $url = $url . '?exchange&' . $params . '&coursid=11';
    $data = file_get_contents($url);
    return ($data); //return is_resource($data);
}

function getCurrencyList($list,$convert)
{
    $courses = json_decode($list, true);
    foreach ($courses as $course) {
        if ($course['ccy'] == $convert) { //$list
            $courses_curr = $course['buy'];
        }
    }
    return $courses_curr;
}

$currencyList = getCurrencyFromUrl('https://api.privatbank.ua/p24api/pubinfo');

if ($currencyList == false) {
    die ('api url - 404');
}

$cur = getCurrencyList($currencyList,$convert);
$sum = ($amount / $cur);

include_once 'index.php';
