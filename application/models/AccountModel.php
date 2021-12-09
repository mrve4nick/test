<?php
require_once __DIR__ . "/../../framework/core/Model.php";

class AccountModel extends Model
{
    public static function reverse($tmp)
    {
        while (View::parse($tmp)) {
            foreach (View::parse($tmp) as $template) {
                $t = View::create(
                    "",
                    $template,
                    [
                        ["aside" => "nav", "content" => "login"]
                    ]
                );
                $tmp = View::assign($t, $template, $tmp);
            }
        }
        return $tmp;
    }
}
