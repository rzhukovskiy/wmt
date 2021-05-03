<?php

/**
 * Created by PhpStorm.
 * User: rzhukovskiy
 * Date: 10.11.2017
 * Time: 18:06
 */
class BaseController
{
    protected $action       = null;
    protected $controller   = null;
    protected $template     = 'main';
    
    public function __construct($controller, $action)
    {
        $this->action       = $action;
        $this->controller   = $controller;
        $this->init();
    }
    
    public function init() {

    }

    public function redirect($destination, $data = null)
    {
        $query = $data ? '?' .urldecode(http_build_query($data)) : '';
        $url = 'Location: /' . ltrim($destination, '/') . $query;
        header($url);
        exit;
    }

    public function render($view, $params = null)
    {
        ob_start();
        if (is_array($params)) {
            extract($params);
        }
        require 'views/' . $view . '.php';
        $content = ob_get_contents();
        ob_end_clean();

        require 'views/templates/' . $this->template . '.php';
    }
}