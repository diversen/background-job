<?php

namespace diversen;

/**
 * Class that can execute a background job, and check if the
 * background job is still running
 * 
 * @package main
 */

class bgJob {
    
    /**
     * Executes a background job using exec. A file with the content 
     * of the background job's output will be created, and a file holding the 
     * job's pid (process id). 
     *   
     * @param string $cmd the command
     * @param string $outputfile an output file where output of command will be written
     * @param string $pidfile a file where the process number is written
     * @return boolean $res true on success and false on failure
     */
    public function execute ($cmd, $outputfile, $pidfile) {
        $res = exec(sprintf("%s > %s 2>&1 & echo $! >> %s", $cmd, $outputfile, $pidfile));
        if (!$res) {
            return true;
        }
        return false;
    }
    
    /**
     * Check if a background process is running. 
     * 
     * @param int $pid the process id to check for
     * @return boolean $res true if running or else false 
     */
    public function isRunning($pid) {
        try {
            $result = shell_exec(sprintf("ps %d", $pid));
            if (count(preg_split("/\n/", $result)) > 2) {
                return true;
            }
        } catch (Exception $e) {
            
        }
        return false;
    }
}

