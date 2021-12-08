<?php

class ExceptionHandler extends Exception
{
    public function errorLog()
    {
        logMyErrors(time() . " EXCEPTION on line " . $this->getLine() . " in " . $this->getFile() . ": " . $this->getMessage() . "\n");
    }
}
