<?php

function logMyErrors($str)
{
    $log = fopen(__DIR__ . "/../../src/ErrorLog.txt", "a+");
    fwrite($log, $str);
    fwrite($log, backtraceExplode());
    fclose($log);
}

function backtraceExplode()
{
    $str = "";
    $trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 10);

    foreach ($trace as $val) {
        foreach ($val as $traceKey => $traceVal) {
            if (!is_array($traceVal)) {
                $str .= "[$traceKey] - $traceVal\n";
            } else {
                foreach ($traceVal as $argKey => $argVal) {
                    $str .= "[$argKey] - $argVal\n";
                }
            }
        }
    }

    return $str;
}


function myErrorHandler(int $errNo, string $errMsg, string $file, int $line)
{
    logMyErrors(time() . " #[$errNo] in [$file] at line [$line]: [$errMsg]\n");
}

function myFatalErrorHandler()
{
    $file = "unknown file";
    $errMsg  = "shutdown";
    $errNo   = E_CORE_ERROR;
    $line = 0;

    $error = error_get_last();

    if ($error !== null) {
        $errNo   = $error["type"];
        $file = $error["file"];
        $line = $error["line"];
        $errMsg  = $error["message"];

        logMyErrors(time() . " FATAL Ярик бачок потик #[$errNo], in [$file] at line [$line]: [$errMsg] \n");
    }
}
