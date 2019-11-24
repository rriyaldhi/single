<?php
  namespace controller;
  use lib\Controller;
  use lib\View;
  class ViewController extends Controller
  {
    public function index()
    {
      View::render('index');
    }
  }
?>
