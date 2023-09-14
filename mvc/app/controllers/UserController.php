<?php
// app/controllers/UserController.php

class UserController
{
  public function profile()
  {
    // Aquí puedes cargar la vista de la página de perfil de usuario
    include __DIR__ . '/../views/user/profile.php';
  }

  public function create(){
    include __DIR__ . '/../views/user/create.php';
  }

  public function index(){
    self::include_view('<h1>HOLA</h1>', true);
    include __DIR__ . '/../views/user/index.php';
  }
  public static function include_view($datos){
    list($vista, $html) = $datos;
    include_once __DIR__.'/../views/user/index.php';
  }
}
?>