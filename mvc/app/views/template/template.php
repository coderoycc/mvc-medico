<?php
namespace Template;
class Template{
  public static $nameSite = '';
  public static $abreviatureSite = '';
  public $html = '';
  
  public function __construct($title = ''){
    $this->html = '
    <!DOCTYPE html>
    <html lang="es">
      <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <title>'.$title.'</title>';
  }
  /**
   * Carga los archivos necesarios para la pagina CSS y JS.
   * La carpeta de los archivos por defecto es public/assets/
   * @arrHeadJS: array de los nombres de los archivos necesarios 
   */
  public function loadHeader($arrHeadJS = array(), $arrHeadCSS = array()){
    $urlBaseCSS = '/../../../public/assets/css/';
    foreach ($arrHeadCSS as $value) {
      $this->html .= '<link href="'.$urlBaseCSS.$value.'" rel="stylesheet" />';
    }
    $urlBaseJS = '/../../../public/assets/js/';
    foreach ($arrHeadJS as $val) {
      $this->html .= '<script src="'.$urlBaseJS.$val.'"></script>';
    }
    $this->html .= '</head>
    <body class="sb-nav-fixed">';
  }
  /**
   * Carga los archivos JS del final del archivo
   * La carpeta por defecto es public/assets/
   */
  public function loadFooter($arrFoot = array()){
    $urlBaseJS = '/../../../public/assets/js/';
    foreach ($arrFoot as $val) {
      $this->html .= '<script src="'.$urlBaseJS.$val.'"></script>';
    }
    $this->html .= '</body>
    </html>';
  }
  public function pushHeader(){
    $content = file_get_contents(__DIR__.'/header.php');
    $this->html .= $content;
  }

  public function pushSidebar(){
    $content = file_get_contents(__DIR__.'/sidebar.php');
    $this->html .= '<div id="layoutSidenav">'.$content;
  }
  
  public function pushContent($pathFile='x', $file='index'){
    $content = '';
    $url = __DIR__.'/../'.$pathFile.'/'.$file.'.php';
    if(file_exists($url)){
      $content = file_get_contents($url);
    }
    $this->html .= '<div id="layoutSidenav_content">'.$content;
  }

  public function pushFooter(){
    $content = file_get_contents(__DIR__.'/footer.php');
    $this->html .= $content.'</div>
    </div>';
  }

  public function render(){
    echo $this->html;
  }
}
?>