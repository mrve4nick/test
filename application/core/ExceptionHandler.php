<?php

class ExceptionHandler extends Exception {
    public function errorLog() {
        echo "test";
        logMyErrors(time() . " EXCEPTION on line " . $this->getLine() . " in " . $this->getFile() . ": " . $this->getMessage() . "\n");
        echo "12";
    }
}