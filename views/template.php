<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

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

<body id="kt_body"
  class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
  style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
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
          <!--begin::Toolbar-->
          <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
              <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard
                  <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                  <small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small>
                </h1>
              </div>
            </div>
          </div>
          <!--end::Toolbar-->
          <!--begin::Post-->
          <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
              <?php include_once './views/tableList.php'; ?>
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
  <script src="./views/assets/js/custom/apps/customers/list/export.js"></script>
  <script src="./views/assets/js/custom/apps/customers/list/list.js"></script>
  <script src="./views/assets/js/custom/apps/customers/add.js"></script>
  

  <script src="./views/assets/js/custom/widgets.js"></script>
  <script src="./views/assets/js/custom/apps/chat/chat.js"></script>
  <script src="./views/assets/js/custom/modals/create-app.js"></script>
  <script src="./views/assets/js/custom/modals/upgrade-plan.js"></script>
</body>

</html>