<?php

namespace Framework;

class Session
{
    public static function start()
    {
        if (empty($_SESSION)) {
            ini_set('session.cookie_httponly', 1);
            session_start();
        }
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public static function destroy()
    {
        setcookie(session_id(), "", time() - 3600);
        session_destroy();
        session_write_close();
    }
}
