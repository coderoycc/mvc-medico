<?php
$routes = [
  '/' => 'HomeController@index',
  '/user/register' => 'UserController@register',
  '/user/create' => 'UserController@create',
  // '/user/edit-profile' => 'UserController@editProfile',
  // Agrega más rutas según tus necesidades
];

return $routes;
