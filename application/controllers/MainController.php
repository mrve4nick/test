<?php

class MainController
{
    public function mainAction()
    {
        $tmp = View::create("layout", "", []);

        while (View::parse($tmp)) {
            foreach (View::parse($tmp) as $template) {
                $t = View::create(
                    "",
                    $template,
                    [
                        ["aside" => "nav", "content" => "slider", "other" => "bestprice"]
                    ]
                );
                $tmp = View::assign($t, $template, $tmp);
            }
        }

        echo $tmp;
    }
}
