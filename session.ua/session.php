<?php
$login = $_POST['ilogin'];
$ilogout = $_POST['ilogout'];
$index = $_POST['index'];


function login($index)
{
    switch ($index) {
        case 'cokie' :
            setcookie('n', "Hello2", time() + 3600);
            break;
        case 'session' :
            session_start();
            break;
    }
}

function logout($ilogout)
{
    if (isset($ilogout)) {
        if (session_id() !== '') {
            session_destroy();
        } else {
            unset($_COOKIE);
        }
     return   header('Location: http://homework.com/session.ua/index.html' ,true);
    }

}

login($index);
logout($ilogout);

include_once 'content.html';