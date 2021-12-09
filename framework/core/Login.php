<?php

class Login
{
    public static function signin($email, $pass)
    {
        if (empty($email) || empty($pass)) {
            Session::set("fail", "Неверный логин или пароль");
            header("Location: /account/login");
        } else {
            if ($email == "root@mail.com" && $pass== "root") {
                Session::set("succes", true);
                header("Location: /account/profile");
            } else {
                Session::set("fail", "Неверный логин или пароль");
                header("Location: /account/login");
            }
        }
    }

    public static function logout()
    {
        if (Session::get("succes")) {
            Session::destroy();
            header("Location: /");
        }
    }
}
