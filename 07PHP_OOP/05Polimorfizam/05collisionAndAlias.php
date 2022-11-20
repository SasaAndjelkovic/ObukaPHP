<?php

trait FileLogger {
    public function log($msg){
        echo "File Logger |" . date("Y-m-d h:i:s") . ": $msg <br>";
    }
}

trait DatabaseLogger {
    public function log($msg){
        echo "Database Logger |" . date("Y-m-d h:i:s") . ": $msg <br>";
    }
}

class Logger {
    //use FileLogger, DatabaseLogger; //Fatal error: Trait method DatabaseLogger::log has not been applied as Logger::log, because of collision with FileLogger
    use FileLogger, DatabaseLogger {
        DatabaseLogger::log as logDb; // alias za log fja iz Database Logger-a
        FileLogger::log insteadof DatabaseLogger; //jedan umesto drugog
    }
    public function __construct()
    {
        $this->log("Poruka");
    }
}

$log = new Logger();
$log->logDb("Logovanje u bazi");