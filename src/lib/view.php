<?php
  namespace lib;
  class View
  {
    public static function render($view)
    {
      require __DIR__ . '/../view/' . $view . '.php';
    }
  } 
?>