<?php


class Render
{
    /**
     * Make  "$content" for "$array[0]" view file.
     * Get the contents of the output buffer - "$array[0]" file
     *
     * @param $array
     * @return false|string
     */
    public static function getViewFile($array)
    {
        $viewName ='views/' .  $array[0] . '.php';

        ob_start();
        include($viewName);
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}
