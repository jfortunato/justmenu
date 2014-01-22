<?php namespace JustMenu\View;

class ViewFinder
{
    public function fetch($view, $data = array())
    {
        ob_start();

        extract($data);

        include $view;

        return ltrim(ob_get_clean());
    }
}
