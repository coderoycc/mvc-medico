<?php

// Cargar las rutas
$routes = require __DIR__ . '/app/routes.php';

// Obtener la URL solicitada
$requestUri = $_SERVER['REQUEST_URI'];

// Verificar si la URL solicitada existe en las rutas definidas
if (array_key_exists($requestUri, $routes)) {
  // Obtener el controlador y método desde las rutas
  $listaRuta = explode('@', $routes[$requestUri]);
  list($controllerName, $methodName) = $listaRuta;

  // Incluir el controlador y crear una instancia
  require_once __DIR__ . '/app/controllers/' . $controllerName . '.php';
  $controller = new $controllerName();

  // Llamar al método correspondiente
  if (method_exists($controller, $methodName)) {
    //Verificamos que existe un parametro
    $cantidad = count($listaRuta);
    if($cantidad == 3){
      $controller->{$methodName}($listaRuta[2]);
    }elseif($cantidad == 4){
      $controller->{$methodName}($listaRuta[2], $listaRuta[3]);
    }else{
      // echo 'Se direcciona a '.$controllerName.'->'.$methodName;
      $controller->{$methodName}();
    }
  } else {
    require_once __DIR__.'/app/controllers/HomeController.php';
    $error = new MainController();
    $error->error404();
  }
} else {
  require_once __DIR__.'/app/controllers/HomeController.php';
  $error = new MainController();
  $error->error404();
}
