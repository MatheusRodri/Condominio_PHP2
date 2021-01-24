<?php

$REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
$INITE = strpos($REQUEST_URI,'?');
if($INITE):
    $REQUEST_URI = substr($REQUEST_URI,0,$INITE);
endif;
$REQUEST_URI_PASTA =substr($REQUEST_URI,1);
$URL = explode('/',$REQUEST_URI_PASTA);
$URL[1] = ($URL[1] != ''? $URL[1] : 'home');

    if(file_exists('pages/'.$URL[1].'.php')){
        require ('pages/'.$URL[1].'.php');
    }
//    elseif (is_dir('pages/login/')){
//        if (isset($URL[1]) && file_exists('pages/login/'.$URL[1].'.php')){
//            require ('pages/login/login.php');
//        }
//    }
    elseif (is_dir('pages/'.$URL[1])){
        if (isset($URL[2]) && file_exists('pages/'.$URL[1].'/'.$URL[2].'.php')) {
            require('pages/' . $URL[1] . '/' . $URL[2] . '.php');
        }else{
            require ('pages/login/login.php');
        }
    }
    else
    {
        require ('pages/404.php');
    }




