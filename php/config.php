<?php

//pathes
$_PATHES=[
    'tpl'=>'templates/',
    'page'=>'',
    'base'=>__DIR__."/..",
];
//$_TPLPATH  = 'templates/';
//$_PAGETPLPATH = '';
//$_BASEPATH = __DIR__."/..";

$_mode = 1; // 2 - compiler, 1 - develop, 0 - public;
$_dataExtends = true;
$_FIRST_TPL = 'base';
$_showLogs = [
    'log'=>1,
    'dir'=>1,
    'warn'=>1,
    'error'=>1,
    'info'=>1,
    'tpl'=>1,
];