<?php

include_once "bgJob.php"; // Only used if autoloader is not enabled
use diversen\bgJob;

$bg = new bgJob();
$command = "./example.sh";
$bg->execute($command, "output.txt", "pid.txt");