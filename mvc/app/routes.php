<?php
$routes = [
  '/' => 'HomeController@index',
  '/user/register' => 'UserController@create',
  '/user/profile' => 'UserController@profile',
  // '/user/edit-profile' => 'UserController@editProfile',
  // Agrega más rutas según tus necesidades
];

return $routes;
?>