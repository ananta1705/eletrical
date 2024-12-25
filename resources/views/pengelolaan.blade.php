<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>electric world</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('Admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('Admin')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home" class="nav-link">Beranda</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('Admin')}}/dist/img/listrik.png" alt="Pay Listrik" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">elistrik</span>
    </a>

    <!-- Sidebar -->
     <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Admin')}}/dist/img/wong.jpg" class="" alt="">
        </div>
        <div class="info">
          <a href="" class="d-block">Ananta puti maharani</a>
        </div>
      </div> 

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./pengelolaan" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengelolaan Data Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./validasi&verifikasi" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validasi & Verifikasi</p>
                </a>
                <li class="nav-item">
                <a href="./laporan" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pembayaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembayaran</p>
                </a>
              </li>
            </ul>
          </li>
         
      <!-- /.sidebar-menu -->
      <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password</p>
                    </a>
                  </li>
                </ul>
              </li>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div> 
          
          <!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Login</a></li> -->
              <!-- <li class="breadcrumb-item active">Dashboard v2</li> -->
            <!-- </ol>
          </div> -->
          <!-- /.col -->
        </div> 
        <!-- /.row -->
      </div> 
      <!-- /.container-fluid -->
     </div> 
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Validasi & Verifikasi</span>
                <!-- <span class="info-box-number">
                  10
                  <small>%</small>
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Pelanggan</span>
                <!-- <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Laporan</span>
                <!-- <span class="info-box-number">10</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Rekap Pengelolaan Listrik</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                  <table class="table m-0">
                    <div class="container"></div>
              <a href="/tambahdata" type="button" class="btn btn-success">Tambah Data</a>

                    <thead>
                    <tr>
                        <th>Pembayaran</th>
                        <th>Nama Pelanggan</th>
                        <th>Tarif</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Jumlah Meter</th>
                        <th>Total Bayar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>522040979119</td>
                        <td>Ananta</td>
                        <td>R1/450VA</td>
                        <td>Januari</td>
                        <td>2023</td>
                        <td>00034452-00034588</td>
                        <td>Rp 67.289</td>
                        <td>
                        <a href="/penggunaan/{id}/edit/edit" class="btn btn-info">Edit</a>
                        <a href="penggunaan/{id/hapus/edit" class="btn btn-danger">Hapus</a>
                        </td>
                        </td> 
                    </tr>
                    <tr>
                        <td>559390716018</td>
                        <td>dai</td>
                        <td>R2/35BVC</td>
                        <td>Februari</td>
                        <td>2023</td>
                        <td>00042364-00076431</td>
                        <td>Rp 70.550</td>
                        <td>
                        <a href="/penggunaan/{id}/edit/edit" class="btn btn-info">Edit</a>
                        <a href="penggunaan/{id/hapus/edit" class="btn btn-danger">Hapus</a>
                        </td>
                        </td> 
                    </tr>
                    <tr>
                        <td>503781573209</td>
                        <td>mufiah</td>
                        <td>R5/30CVS</td>
                        <td>Maret</td>
                        <td>2023</td>
                        <td>00023476-00098243</td>
                        <td>Rp 110.899</td>
                        <td>
                        <a href="/penggunaan/{id}/edit/edit" class="btn btn-info">Edit</a>
                        <a href="penggunaan/{id/hapus/edit" class="btn btn-danger">Hapus</a>
                        </td>
                        </td> 
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Rekap</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            

            

           
                  <!-- /.item -->
                </ul>
              </div>
              
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Pay Listrik</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.2.0 -->
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('Admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('Admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('Admin')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin')}}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('Admin')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('Admin')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('Admin')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('Admin')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('Admin')}}/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('Admin')}}/dist/js/pages/dashboard2.js"></script> -->

<script src="js/script.js"></script>
</body>
</html>