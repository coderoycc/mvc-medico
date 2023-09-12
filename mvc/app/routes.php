<?php
$routes = [
  '/' => 'HomeController@index',
  '/login' => '',
  '/register' => '',
  '/users' => 'UserController@index',
  '/users/create' => 'UserController@create',
  // Agrega más rutas según tus necesidades
];

return $routes;
