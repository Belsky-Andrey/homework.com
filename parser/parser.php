<?php

set_time_limit(1200);
$url = $_POST['url'];
$file = '1.txt';
$txt = file_get_contents($url);

if ($c = preg_match_all("/<img src=[\'\"](.*?)[\'\"]/", $txt, $matches)) {
    $x = 1;
    $i = 0;
    while ($x != "") {
        $x = $matches[1][$i];
        if ($x != "") {
            print '<img src="' . $x . '" alt="" /><br />';
            echo $x . "<br />";
//            file_put_contents($file, $x ."\r\n",  FILE_APPEND);

        }
        $i++;
    }
}
// preg_match_all("/([a-z\-_0-9\/\:\.]*\.(jpg|jpeg|png|gif))/i",)

//$t='';
//if(isset($url)){
//    foreach($url as $k=>$v){
//        $t.=$k." = ".$v." \n";
//    }
//    $f=fopen(time().".txt","w+");
//    fwrite($f,$t);
//    fclose($f);
//}
