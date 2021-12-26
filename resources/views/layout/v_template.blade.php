

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ketua | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/googleapis-head.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/datatables/datatables.min.css"/>
  <script type="text/javascript" src="{{ asset('template') }}/datatables/datatables.min.js"></script>
    
  <script src="{{ asset('template') }}/jquery/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/datatables/datatables.min.css"/>
  <script type="text/javascript" src="{{ asset('template') }}/datatables/datatables.min.js"></script>

  <link rel="stylesheet" type="text/css" href="DataTables/Bootstrap-4-4.1.1/css/bootstrap.min.css"/>
  <link href="{{ asset('template') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="{{ asset('template') }}/jquery/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('template') }}/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('template') }}/dist/js/script.js"></script>
  <!-- Untuk datatable -->
  <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/datatables/datatables.min.css"/>
  <script type="text/javascript" src="{{ asset('template') }}/datatables/datatables.min.js"></script>
    
  <script type="text/javascript">
  $(document).ready(function() {
      $('#datatable').DataTable();
  });

</script>

</head><body class="hold-transition sidebar-mini layout-fixed">

  
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="loader" src="{{ asset('template') }}/dist/img/loading-buffering.gif" alt="loader" height="60" width="60" style="color: white;">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
      <a href="#" class="brand-link">
        <img src="{{ asset('template') }}/dist/img/pnc.png" alt="Pnc Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AuditKeu | PNC</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        
      <div >
          
        </div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
                        <img src="../../img/user/ttd_sasa aisha j.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            
            <a href="#" class="d-block">sasa aisha j</a>

              <span class="badge badge-info d-block">Ketua-SPI</span>
              
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column mt-3" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item ">
              <a href="../dashboard/index.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class=""></i>
                </p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="#" class="nav-link <br />
<b>Notice</b>:  Undefined variable: dataUser in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>220</b><br />
">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Data User
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../user/index.php" class="nav-link root">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../konfirmasi_user/index.php" class="nav-link <br />
<b>Notice</b>:  Undefined variable: konfirmasi_user in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>235</b><br />
">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Konfirmasi User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../auditee/index.php" class="nav-link <br />
<b>Notice</b>:  Undefined variable: auditee in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>241</b><br />
">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Auditee</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item ">
              <a href="#" class="nav-link <br />
<b>Notice</b>:  Undefined variable: dataPka in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>250</b><br />
">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Data PKA
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../pka/index.php" class="nav-link <br />
<b>Notice</b>:  Undefined variable: pka in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>259</b><br />
">
                    <i class="far fa-circle nav-icon"></i>
                    <p>PKA</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../pka/timeline.php" class="nav-link <br />
<b>Notice</b>:  Undefined variable: timeline in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>265</b><br />
">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Timeline Audit</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item ">
              <a href="#" class="nav-link <br />
<b>Notice</b>:  Undefined variable: dataAudit in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>274</b><br />
">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  Data Audit
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../desk/index.php" class="nav-link <br />
<b>Notice</b>:  Undefined variable: desk in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>283</b><br />
">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Desk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../visit/index.php" class="nav-link <br />
<b>Notice</b>:  Undefined variable: visit in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>289</b><br />
">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Visit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tha/index.php" class="nav-link <br />
<b>Notice</b>:  Undefined variable: tha in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>295</b><br />
">
                    <i class="far fa-circle nav-icon"></i>
                    <p>THA</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../lha/index.php" class="nav-link <br />
<b>Notice</b>:  Undefined variable: lha in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>301</b><br />
">
                    <i class="far fa-circle nav-icon"></i>
                    <p>LHA</p>
                  </a>
                </li>
              </ul>
            </li>

            
            <li class="nav-item ">
              <a href="../ba/index.php" class="nav-link <br />
<b>Notice</b>:  Undefined variable: ba in <b>C:\xampp\htdocs\audit-keu\sistem\template\sidebar_kepala_spi.php</b> on line <b>311</b><br />
">
                <i class="nav-icon far fa-flag"></i>
                <p>
                  Berita Acara
                  <i class=""></i>
                </p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ asset('template') }}/logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Log Out
                  <i class=""></i>
                </p>
              </a>
            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-5 ">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-5">
              <ol class="breadcrumb float-sm-right">

              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
<style>
  .container {
    display: flex;
    flex-direction: column;
  }


  .box {
    width: 100px;
    margin: 0 10px;
    box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1);
    transition: 1s;

  }

  .box img {
    display: block;
    width: 100%;
    border-radius: 5px;
  }

  .box:hover {
    transform: scale(1.6);
    z-index: 2;
  }
</style>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">

      <div class="col-lg-3 ">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>8</h3>
            <p>Program Kerja Audit(PKA)</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="../pka/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>

      </div>
      <!-- ./col -->

      <div class="col-lg-3 ">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3>3</h3>
            <p>Jumlah Data Desk</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="../desk/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 ">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>10</h3>

            <p>Jumlah Data Visit</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="../visit/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 ">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3>5</h3>

            <p>Temuan Hasil Audit(THA)</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="../tha/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 ">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>4</h3>

            <p>Laporan Hasil Audit(LHA)</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="../lha/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 ">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3>2</h3>

            <p>Berita Acara</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="../ba/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 ">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>12</h3>

            <p>Jumlah User</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="../user/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-md-12">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header text-white" style="background: url('../../img/photo1.png') center center;">

          </div>
          <div class="widget-user-image">
            <img class="img-circle" src="../../img/user/ttd_sasa aisha j.jpg" alt="User Avatar">
          </div>
          <div class="card-footer">
            <div class="row">
              <!-- /.col -->
              <div class="col-md-12 border-right">
                <div class="description-block">
                                                          <h5 class="description-text">sasa aisha j</h5>
                    <span class="description-header">Ketua SPI</span>
                </div>
                <!-- /.description-block -->
              </div>

              <div class="card-body box-profile">

                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="hidden" name="id_user" class="form-control" value="8">
                    <input type="hidden" name="fotoLama" class="form-control" value="ttd_sasa aisha j.jpg">
                    <input type="hidden" name="ttdLama" class="form-control" value="ttd_sasa aisha j.png">
                    <input type="hidden" name="status" class="form-control" value="1">
                    <input type="hidden" name="level" class="form-control" value="4">
                  </div>
                  <div class="form-group">
                    <label for="nip">NIP / NPAK</label>
                    <input type="text" id="nip_npak" class="form-control" value="19902901111" name="nip_npak">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" class="form-control" value="sasa aisha j" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No Telepon</label>
                    <input type="text" id="no_hp" class="form-control" value="0814567756565" name="no_hp">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" value="yuujiii@mail.co.id" name="email">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control" value="sasa" name="username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" value="sasa" name="password">
                    <input type="hidden" id="password2" class="form-control " value="<br />
<b>Notice</b>:  Undefined index: password2 in <b>C:\xampp\htdocs\audit-keu\sistem\kepala_spi\dashboard\index.php</b> on line <b>214</b><br />
" name="password2">
                  </div>

                  <div class="form-group">
                    <p><b>Foto anda sekarang:</b></p>
                    <div class="box">
                      <img src="../../img/user/ttd_sasa aisha j.jpg" alt="foto anda sekarang" width="100">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto">Ubah Foto</label>
                    <input type="file" id="foto" name="foto" value="ttd_sasa aisha j.jpg">
                  </div>
                  <div class="form-group">
                    <p><b>Ttd anda sekarang:</b></p>
                    <div class="box">
                      <img src="../../img/user/ttd_sasa aisha j.png" alt="foto anda sekarang" width="100">
                    </div>
                    <div class="form-group">
                      <label for="ttd">Ubah tanda tangan</label>
                      <input type="file" id="ttd" name="ttd" value="ttd_sasa aisha j.png">
                      <p style="color: red;"><i>* Upload ttd dengan background transparan*</i></p>
                    </div>
                    <div class="form-group row  float-left">
                      <div class="col-sm-4">
                        <button type="submit" name="ubahData" class="btn btn-success">Perbarui</button>
                      </div>
                    </div>
                </form>
                            <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>

            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
    </div>
</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable">

</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>





  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('template') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('template') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('template') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('template') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('template') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('template') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('template') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('template') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('template') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template') }}/dist/js/pages/dashboard.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": false,
    });
  });
</script>

<!-- script data tables -->
 
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
    } );
  </script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">


</body>
</html>

