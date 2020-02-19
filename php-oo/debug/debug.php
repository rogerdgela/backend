<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

function xpto()
{
    xptox();
}

function xptox()
{
    xptoy();
}

function xptoy()
{
    debug_print_backtrace();
}

$x = 1;
$y = 2;
$z = 3;
$x = $z;

xpto();