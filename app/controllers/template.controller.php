<?php
class TemplateController{
  public function ctrTemplate(){
    include "views/template.php";
  }
  public function renderViewContent($archivo){
    if(file_exists('./views/pages/'.$archivo.'.php')){
      include_once './views/pages/'.$archivo.'.php';
    }else{
      include_once './views/pages/error.php';
    }
  }
}
?>