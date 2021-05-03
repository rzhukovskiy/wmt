<?php

/**
 * Created by PhpStorm.
 * User: rzhukovskiy
 * Date: 10.11.2017
 * Time: 15:11
 */
class Router
{
    private $defaultController = 'site';
    private $defaultAction = 'index';
    private static $instance;

    private function __construct()
    {

    }

    /**
     * @return Router
     */
    public static function getInstance()
    {
        if (static::$instance == null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function handleRequest()
    {
        $uri = '';
        $query = '';
        $controller = '';
        $action = '';

        if (isset($_GET['r'])) {
            $uri = $_GET['r'];
            unset($_GET['r']);
            $query = http_build_query($_GET);
        } else {
            $arrayQuery = explode('?', isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '');
            $uri = isset($arrayQuery[0]) ? $arrayQuery[0] : '';
            $query = isset($arrayQuery[1]) ? $arrayQuery[1] : '';
        }

        $_SERVER['REQUEST_URI'] = $query;

        $arrayUri = explode('/', trim($uri, '/'));
        $controller = isset($arrayUri[0]) ? $arrayUri[0] : '';
        $action = isset($arrayUri[1]) ? $arrayUri[1] : '';

        if (empty($controller)) {
            $controller = $this->defaultController;
        }
        if (empty($action)) {
            $action = $this->defaultAction;
        }

        $controllerFull = ucfirst($controller) . 'Controller';
        $actionFull     = 'action' . ucfirst($action);

        try {
            /** @var BaseController $controllerObject */
            $controllerObject = new $controllerFull($controller, $action);
            $controllerObject->$actionFull();
        } catch (Exception $e) {
            print_r($e);die;
        }
    }
}
