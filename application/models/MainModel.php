<?php
namespace App\models;

use Framework\core\Model;
use Framework\core\View;

class MainModel extends Model
{
    public static function reverse($tmp)
    {
        while (View::parse($tmp)) {
            foreach (View::parse($tmp) as $template) {
                $t = View::create(
                    "",
                    $template,
                    [
                        ["aside" => "nav", "content" => "slider", "other" => "bestprice", "breadcrumbs" => ""]
                    ]
                );
                $tmp = View::assign($t, $template, $tmp);
            }
        }
        return $tmp;
    }
}