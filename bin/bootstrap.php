<?php
$myDir = realpath(__DIR__ . '/..');
define('ROOT_APPLICATION_PATH', $myDir);

$confDir = $myDir . '/config';
$vendorsDir = $myDir . '/vendor';
$srcDir = $myDir . '/src/php';

// Do your thing needed to bootstrap your app
ini_set('include_path', implode(PATH_SEPARATOR, array(
    $srcDir,
    $vendorsDir . '/php',
    $vendorsDir . '/php/Doctrine',
    $vendorsDir . '/php/log4php',
    ini_get('include_path')
)));

spl_autoload_register(function($class) use ($srcDir) {
    $file = "$srcDir/$class.php";
    if (file_exists($file)) {
        require_once $file;
        return true;
    }
});
