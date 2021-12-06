<?php
    function logMyErrors($str) {
        $log = fopen(__DIR__ . "/../../src/ErrorLog.txt", "a+");
        fwrite($log, $str);
        fwrite($log, backtraceExplode());
        fclose($log);
    }

    function backtraceExplode() {
        $str = "";
        $trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 10);

        foreach ($trace as $item) {
            foreach ($item as $key => $val) {
                $str .= "[$key] - $val \n";
            }
        }

        return $str;
    }


    function myErrorHandler(int $errNo, string $errMsg, string $file, int $line) {
        logMyErrors(time() . " #[$errNo] in [$file] at line [$line]: [$errMsg]\n");

    }

    function myFatalErrorHandler() {
        logMyErrors(time() . " FATAL Ярик бачок потик\n");
        $stack = print_r(debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 10));
    }