# background-job

PHP class that executes background jobs (in a very simple way). 

Used this answer found on stackoverflow.com:

[http://stackoverflow.com/a/45966/464549](http://stackoverflow.com/a/45966/464549)

You will need unix platform for this to work

# Install

    composer require diversen/background-job

# Usage 

    cd background-job && php example.php

`example.php`: 
~~~php
<?php

include_once "bgJob.php"; // Only used if autoloader is not enabled
use diversen\bgJob;

$bg = new bgJob();
$command = "./example.sh";
$bg->execute($command, "output.txt", "pid.txt");
~~~

This executes `example.sh`: 

~~~sh
#!/bin/bash
echo "Hi, I'm sleeping for 5 seconds..."
date
sleep 5
echo "all Done."
~~~
