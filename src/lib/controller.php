<?php
  namespace lib;
  abstract class Controller
  {
    private $method;
    public function __construct($method)
    {
      $this->method = $method;
    }
    public function execute($param)
    {
      if ($param != null)
        return $this->{$this->method}($param);
      else
        return $this->{$this->method}();
    }
  }
?>