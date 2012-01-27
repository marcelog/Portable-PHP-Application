<?php
require_once __DIR__ . '/bootstrap.php';

if ($argc !== 2) {
    echo "Missing job name";
    exit (254);
}

$jobName = $argv[1];
$job = new $jobName;
$job->run();

