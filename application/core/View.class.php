<?php
    class View {
        public function draw(string $template, array $params, string $layout) {
            ob_start();
            include_once $layout;
            $output = ob_get_contents();
            ob_end_clean();

            $tmpFile = file_get_contents($template);
            $output = str_replace("{TEMPLATE}", $tmpFile, $output);

            foreach($params as $key => $value) {
                ob_start();
                include_once $value;
                $paramBuff = ob_get_contents();
                ob_end_clean();
                $output = str_replace($key, $paramBuff, $output);
            }
            echo $output;
        }

}