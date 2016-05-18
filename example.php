<?php

include_once "bgJob.php";
use diversen\bgJob;

$bg = new bgJob();
$command = "./example.sh";
$bg->execute($command, "output.txt", "pid.txt");
