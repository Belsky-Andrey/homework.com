<?php
$content = 'text.txt';
$filterMats= 'settings.ini';
$word = "two";
$put = "six";
function deleteWord($filterMats, $word)
{
    $delete = file_put_contents($filterMats, str_replace($word . "\r\n", "", file_get_contents($filterMats)));
}

function addsWord($filterMats, $put)
{
    $fp = fopen($filterMats, "a+");
    fwrite($fp, "\r\n" . $put);
    fclose($fp);

}


function countMats($content,$filterMats){
    $fp = fopen('tmp.txt', 'w');
    $contentnew =file_get_contents($content);
    $pieces = explode(" ", $contentnew);
    foreach ($pieces as $output){
        fwrite($fp,$output."\r\n");
    }
    fclose($fp);
    $filterMats=file('settings.ini');
    $contentnew=file('tmp.txt');
    $result = array_intersect($contentnew, $filterMats);
    echo "<br>";
    echo "Количество матов : " .$count = count($result);

}


function underlinedMats($content){
    $content = file_get_contents($content);

    $filterMats = ['one', 'two', 'three', 'four', 'five', 'six', 'seven',];
    $filterMatsresult = ['<u> one</u>', '<u> two</u>', '<u> three</u>', '<u> four</u>', '<u> five</u>', '<u> six</u>', '<u> seven</u>',];

    {
        echo "<frame>";
        echo $newphrase = str_replace($filterMats, $filterMatsresult, $content);
        echo "<frame/>";
    }


}
underlinedMats($content);
countMats($content,$filterMats);
deleteWord($filterMats, $word);
addsWord($filterMats, $put);

