<?php
  namespace lib;
  use controller;
  class Router
  {
    private $route;
    public function __construct($route)
    {
      $this->route = $route;
    }
    public function route($action, $param)
    {
      if ($action == null)
        $action = 'index';
      $values = explode('/', $this->route[$action]);
      $controller = 'controller\\' . $values[0];
      $method = $values[1];
      $controller = new $controller($method);
      $controller->execute($param);
    }
  }
?>