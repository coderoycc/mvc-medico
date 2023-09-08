<?php
class Template{
  public static $nameSite = '';
  public static $abreviatureSite = '';
  
  public function render($variable){
    self::renderHeader();
    self::renderSidebar($variable);
    self::renderFooter();
  }

  public static function renderSidebar($variable){
    echo 'Mostrando variable'. $variable;
    include_once(__DIR__.'/sidebar.php');
  }

  public static function renderHeader(){
    $hola = "beto";
    include_once(__DIR__.'/header.php');
  }

  public static function renderFooter(){
    include_once(__DIR__.'/footer.php');
  }
}
?>