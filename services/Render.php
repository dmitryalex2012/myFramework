<?php

class Render
{
    /**
     * Get content from view file.
     *
     * @param $array
     * @return false|string
     */
    public static function getViewFile($array)
    {
        $viewName ='views/' .  $array[0] . '.php';

        /** Make data for view file from "$array[1], $array[2], ..." */
        array_shift($array);
        if (!empty($array)){
            extract($array);
        }

        /**  Get the content from the "$array[0]" file. */
        ob_start();
        include($viewName);
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}
