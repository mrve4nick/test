<?php
namespace Framework\core;

class View
{
    public static function create(string $layout = "", string $template = "", array $params = [])
    {
        if (!empty($params[0])) {
            if (array_key_exists($template, $params[0])) {
                $template = $params[0][$template];
            }
        }

        if (!empty($params[1])) {
            extract($params[1]);
        }

        if (!empty($layout)) {
            ob_start();
            require_once __DIR__ . "/../../application/views/layouts/" . $layout . ".php";
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        if (!empty($template)) {
            ob_start();
            include __DIR__ . "/../../application/views/" . $template . ".php";
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }
    }

    public static function parse($layout)
    {
        preg_match_all("/{[a-z]*?}/", $layout, $templates);
        if (!empty($templates[0])) {
            foreach ($templates[0] as $key => $template) {
                $templates[0][$key] = trim($template, "{}");
            }
            return $templates[0];
        } else {
            return false;
        }
    }

    public static function assign($template, $templateName, $layout)
    {
        $res = $layout;
        $res = str_replace("{" . $templateName . "}", $template, $res);
        return $res;
    }
}
