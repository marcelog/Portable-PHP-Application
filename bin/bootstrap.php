<?php
$myDir = realpath(__DIR__ . '/..');
$srcDir = $myDir . '/src/php';

// Register a cute autoloader for our own files.
spl_autoload_register(function($class) use ($srcDir) {
    $file = "$srcDir/$class.php";
    if (file_exists($file)) {
        require_once $file;
        return true;
    }
});
