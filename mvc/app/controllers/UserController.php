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
}
?>