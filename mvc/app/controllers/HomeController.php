<?php
// app/controllers/HomeController.php

class HomeController
{
  public function index()
  {
    // Aquí puedes cargar la vista de la página de inicio
    include __DIR__ . '/../views/home/index.php';
  }
}
