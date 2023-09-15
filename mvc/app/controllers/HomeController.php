<?php
class HomeController
{
  public function index(){
    $content = 'main';
    include __DIR__ . '/../views/home/index.php';
  }
}
