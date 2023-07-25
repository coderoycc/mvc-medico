<?php ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <base href="">
  <title>MEDIC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="./views/assets/media/logos/favicon.ico" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <link href="./views/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

  <link href="./views/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

  <link href="./views/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="./views/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
      <!--begin::Aside-->
      <?php include_once './views/common/menu.php'; ?>
      <!--end::Aside-->

      <!--begin::Wrapper-->
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <?php include_once './views/common/header.php'; ?>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <!-- CONTENIDO -->
          <!--begin::Post-->
          <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
              <?php
              include_once './controllers/template.controller.php';
              $template = new TemplateController();
              if(isset($_GET['page']) && $_GET['page'] != ''){
                $page = $_GET['page'];
                $template -> renderViewContent($page);
              }else{
                include_once './views/tablePacientes.php';
              }
              // include_once './views/tablePacientes.php';
              // echo '<br>';
              // echo isset($_GET['page']) ? $_GET['page'] : 'No hay pagina';
              ?>
              <?php //include_once './views/table.php';?>
            </div>
            <!--end::Container-->
          </div>
          <!--end::Post-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <?php include_once './views/common/footer.php'; ?>
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::Root-->

  <script>var hostUrl = "./views/assets/";</script>
  <script src="./views/assets/plugins/global/plugins.bundle.js"></script>
  <script src="./views/assets/js/scripts.bundle.js"></script>


  <script src="./views/assets/plugins/custom/datatables/datatables.bundle.js"></script>
  <!-- <script src="./views/assets/js/custom/apps/customers/list/export.js"></script> -->
  <!-- <script src="./views/assets/js/custom/apps/customers/list/list.js"></script> -->
  <script src="./views/assets/js/custom/apps/customers/list/listar.js"></script>
  <script src="./views/assets/js/custom/apps/customers/add.js"></script>
  

  <script src="./views/assets/js/custom/widgets.js"></script>
  <script src="./views/assets/js/custom/apps/chat/chat.js"></script>
  <script src="./views/assets/js/custom/modals/create-app.js"></script>
  <script src="./views/assets/js/custom/modals/upgrade-plan.js"></script>
  <!-- <script>
    const tabla = new DataTable('#example');
    // identificador del inpur en este caso es un attr aria-controls="example"
    document.querySelector('[aria-controls="example"]').addEventListener('keyup', function (e) {
      tabla.search(e.target.value).draw();
    })  
    
  </script> -->
</body>

</html>