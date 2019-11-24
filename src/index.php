<?php

  require_once __DIR__ . '/autoloader.php';
  require_once __DIR__ . '/route.php';
  use lib\Router;
  $router = new Router($route);
  $router->route($_GET['action'], $_GET['param']);