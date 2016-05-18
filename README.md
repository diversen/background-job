# background-job

Class that executes background jobs. 

Used this answer to the question found on stackoverflow.com

[http://stackoverflow.com/a/45966/464549](http://stackoverflow.com/a/45966/464549)

You will need unix platform for this to work

# Install

    composer require diversen/background-job

# Usage 

    use diversen\bgJob;
    $bg = new bgJob();
    $bg->execute($command, $output_file, $pid_file);



