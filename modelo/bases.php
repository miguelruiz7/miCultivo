<?php
$base = '';

$pos_web = basename($_SERVER['PHP_SELF'], ".php");

if ($pos_web == "index") 
{
    $base = 'Inicio';
}

if ($pos_web == "bitacora") 
{
    $base = 'Bitácora';
}
?>