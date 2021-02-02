<?php

class Render
{
    /**
     * Get content from view file.
     *
     * @param $view
     * @param $array
     * @return false|string
     */
    public static function getViewFile($view, $array)
    {
        if (!empty($array)){
            extract($array);
        }

        /**  Get the content from the "$array[0]" file. */
        $viewName ='views/' .  $view . '.php';
        ob_start();
        include($viewName);
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}
