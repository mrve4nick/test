<?php

class BasketController
{
    public function showAction()
    {
        $tmp = View::create("layout", "", []);

        while (View::parse($tmp)) {
            foreach (View::parse($tmp) as $template) {
                $t = View::create(
                    "",
                    $template,
                    [
                        ["aside" => "nav", "content" => "basket"]
                    ]
                );
                $tmp = View::assign($t, $template, $tmp);
            }
        }

        echo $tmp;
    }
}
