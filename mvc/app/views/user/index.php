<?php
include(__DIR__.'/../template/template.php');
use \Template\Template;
$render = new Template("USUARIOS");
$arrayCSS = ['main.css'];
$arrayJS = ['fontawesomeAll.js'];
$arrayFooter = ['bootstrap.bundle.min.js', 'main.js'];
$render->loadHeader($arrayJS, $arrayCSS);
$render->pushHeader();
$render->pushSidebar();
$render->pushContent('user', $vista, $html);
$render->pushFooter();
$render->loadFooter($arrayFooter);

$render->render();
?>
<?php
// controllador de entidad
// uso del model de entidad para obtener registros
 $users = UserModel::getUsers();

// Incluir la vista maestro de la entidad --HEADER, SIDEBAR--(podemos pasar parametro nombre para identificar el lugar donde se encuentra) **Supongo que aqui, al inicio debe ir las validaciones de usuario login y esas cosas**
 include_once __DIR__ . '/../views/master.php'; 

// Incluimos (CONTENIDO MAIN) --la tabla del usuario donde iteramos @users--
 include_once __DIR__.'/../views/user/tabla.php';

 // Incluye el contenido estatico de la entidad -- FOOTER --
 include_once __DIR__.'/..';
?>