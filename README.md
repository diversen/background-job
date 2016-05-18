# background-job

PHP class that executes background jobs (in a very simple way). 

Used this answer found on stackoverflow.com:

[http://stackoverflow.com/a/45966/464549](http://stackoverflow.com/a/45966/464549)

You will need unix platform for this to work

# Install

    composer require diversen/background-job

# Usage 

    use diversen\bgJob;
    $bg = new bgJob();
    $bg->execute($command, $output_file, $pid_file);

# Example 

    See `example.php` which executes `example.sh` 

