<?php

interface LoggerInterface {
    public function log($message);
}

class FileLogger implements LoggerInterface {
    public function log($message) {
        file_put_contents("log.txt", $message . PHP_EOL, FILE_APPEND);
        echo "Logged to File: $message\n";
    }
}

class DatabaseLogger implements LoggerInterface {
    public function log($message) {
        echo "Logged to Database: $message\n";
    }
}

function writeLog(LoggerInterface $logger, $message) {
    $logger->log($message);
}

writeLog(new FileLogger(), "This is a file log");
writeLog(new DatabaseLogger(), "This is a DB log");
