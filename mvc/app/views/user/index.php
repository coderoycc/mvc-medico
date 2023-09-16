<?php
// Incluimos permisos para aceder a esta carpeta (USUARIOS)
// ****
// Incluimos las librerias necesarias para esta carpeta usuarios
include_once(__DIR__.'/headDependencies.php');

// Incluimos el header Parametros necesarios
include_once(__DIR__.'/../template/header.php');

// Incluimos el sidebar
include_once(__DIR__.'/../template/sidebar.php');

// Incluimos el contenido (MAIN) Paramteros requeridos $archivo, $content (demas necesarios de la vista) 
include_once(__DIR__.'/'.$archivo.'.php');

// incluimos Footer
include_once(__DIR__.'/../template/footer.php');


// Incluimos librerias scripts JS al final del html
include_once(__DIR__.'/footerDependencies.php');

?>
<?php
// controllador de entidad
// uso del model de entidad para obtener registros
//  $users = UserModel::getUsers();

// Incluir la vista maestro de la entidad --HEADER, SIDEBAR--(podemos pasar parametro nombre para identificar el lugar donde se encuentra) **Supongo que aqui, al inicio debe ir las validaciones de usuario login y esas cosas**

//  include_once __DIR__ . '/../views/master.php'; 

// Incluimos (CONTENIDO MAIN) --la tabla del usuario donde iteramos @users--
//  include_once __DIR__.'/../views/user/tabla.php';

 // Incluye el contenido estatico de la entidad -- FOOTER --
//  include_once __DIR__.'/..';
?>