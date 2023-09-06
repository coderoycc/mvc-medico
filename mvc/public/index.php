<?php

// Cargar las rutas
$routes = require __DIR__ . '/../app/routes.php';

// Obtener la URL solicitada
$requestUri = $_SERVER['REQUEST_URI'];

// Verificar si la URL solicitada existe en las rutas definidas
if (array_key_exists($requestUri, $routes)) {
  // Obtener el controlador y método desde las rutas
  list($controllerName, $methodName) = explode('@', $routes[$requestUri]);

  // Incluir el controlador y crear una instancia
  require_once __DIR__ . '/../app/controllers/' . $controllerName . '.php';
  $controller = new $controllerName();

  // Llamar al método correspondiente
  if (method_exists($controller, $methodName)) {
    $controller->{$methodName}();
  } else {
    echo 'Método no encontrado';
  }
} else {
  echo 'Ruta no encontrada';
}
