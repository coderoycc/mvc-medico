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
$render->pushContent('user', 'tableUsers');
$render->pushFooter();
$render->loadFooter($arrayFooter);

$render->render();
?>