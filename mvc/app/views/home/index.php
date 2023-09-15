<?php
// *****
include_once(__DIR__.'/homeDependencies.php');

// Incluimos el header Parametros necesarios
include_once(__DIR__.'/../template/header.php');

// Incluimos el sidebar
include_once(__DIR__.'/../template/sidebar.php');

// Incluimos el contenido (MAIN) Paramteros requeridos $archivo, $content (demas necesarios de la vista) 
include_once(__DIR__.'/'.$content.'.php');

// incluimos Footer
include_once(__DIR__.'/../template/footer.php');


// Incluimos librerias scripts JS al final del html
include_once(__DIR__.'/homeDepFoot.php');

?>