<?php
class HomeController
{
  public function index(){
    $content = 'main';
    include __DIR__ . '/../views/home/index.php';
  }
}

class MainController{
  public function error404(){
    include __DIR__.'/../views/errors/404.php';
  }
}
