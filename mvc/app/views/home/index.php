<?php
include(__DIR__.'/../template/mainTemplate.php');
use \Template\Template;
$render = new Template("INICIO");
$arrayCSS = ['main.css'];
$arrayJS = ['fontawesomeAll.js'];
$arrayFooter = ['bootstrap.bundle.min.js', 'main.js'];
$render->loadHeader($arrayJS, $arrayCSS);
$render->pushHeader();
$render->pushSidebar();
$render->pushContent('home', 'main');
$render->pushFooter();
$render->loadFooter($arrayFooter);

$render->render();
?>