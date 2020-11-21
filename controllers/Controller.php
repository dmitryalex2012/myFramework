<?php

class Controller
{
    /**
     * Rendering view file.
     * Make "$content" and data from argument $array for "$name" view file.
     *
     * @param $array
     */
    public function render($array)
    {
        $viewName ='views/' .  $array[0] . '.php';

        /** Make data for view file from "$array[1], $array[2], ..." */
        array_shift($array);
        if (!empty($array)){
            extract($array);
        }

        /** Make  "$content" for "$array[0]" view file.
            Get the contents of the output buffer - "$array[0]" file
         */
        ob_start();
        include($viewName);
        $content = ob_get_contents();
        ob_end_clean();

        require 'views/layouts/main.php';
    }

}
