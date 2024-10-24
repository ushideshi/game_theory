<?php

if(config('env') == 'dev'){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

require 'App/Core/GameController.php';
require 'App/Players/Base.php';
require 'App/Players/RicochetRicky.php';
require 'App/Players/DefferingDan.php';
require 'App/Players/UndecidedAndy.php';
require 'App/Players/NeverForget.php';
require 'App/Players/EveryTwoEmeric.php';

function config(string $name){
    $file = require 'config/config.php';
    return $file[$name];
}


function assets(){
    return substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])).'/assets';
}

