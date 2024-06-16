<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | SDN 7 Kujangsari</title> 
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('vendors/feather/feather.css') ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/ti-icons/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/css/vendor.bundle.base.css') ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/ti-icons/css/themify-icons.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('js/select.dataTables.min.css') ?>">
  <!-- End plugin css for this page -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.1/css/responsive.bootstrap5.css">
  <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->

  <script defer src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
  <script defer src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
  <script defer src="https://cdn.datatables.net/responsive/3.0.1/js/dataTables.responsive.js"></script>
  <script defer src="https://cdn.datatables.net/responsive/3.0.1/js/responsive.bootstrap5.js"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <script src="sweetalert2.min.js"></script> -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('css/vertical-layout-light/style.css') ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('images/favicon.png') ?>" />
  
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="<?= base_url('images\gambar\bc_logo_sd.png') ?>" class="mr-1" alt="logo"/></a>
        <span><b>SDN 7 Kujangsari</b></span>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('images\gambar\bc_logo_sd.png') ?>" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?= base_url('images\gambar\bc_logo_sd.png') ?>" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="<?= base_url('/') ?>" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="icon-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/home') ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/siswa') ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/materi') ?>">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Materi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/soal') ?>">
              <i class="icon-menu menu-icon"></i>
              <span class="menu-title">Soal</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/skors') ?>">
              <i class="icon-eye menu-icon"></i>
              <span class="menu-title">Skors</span>
            </a>
          </li>

          <li class="nav-item d-none">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Menu Dropdown</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Dropdown 1</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Dropdown 2</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Dropdown 3</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
             <?= $this->renderSection('content'); ?>
            </div>
          </div>          
        </div>

        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © rumahkodekita.</span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by SDN 7 Kujangsari</span> 
          </div>
        </footer> 
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?= base_url('vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('vendors/chart.js/Chart.min.js') ?>"></script>
  <script src="<?= base_url('vendors/datatables.net/jquery.dataTables.js') ?>"></script>
  <script src="<?= base_url('vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
  <script src="<?= base_url('js/dataTables.select.min.js') ?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('js/template.js') ?>"></script>
  <script src="<?= base_url('js/settings.js') ?>"></script>
  <script src="<?= base_url('js/todolist.js') ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('js/file-upload.js') ?>"></script>
  <script src="<?= base_url('js/dashboard.js') ?>"></script>
  <script src="<?= base_url('js/Chart.roundedBarCharts.js') ?>"></script>
  <!-- End custom js for this page-->
</body>

</html>
