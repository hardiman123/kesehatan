
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 |input</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">


  <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kontak Kami</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.ico">
        <!-- Place favicon.ico in the root directory -->		
		<!-- all css here -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <span class="badge navbar-badge"></span>
      
      

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
    <a href="/start" class="brand-link">
      <img src="img/add.png" alt="responsive image" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/dimen.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">DIMEN</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/start" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link  active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>input data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>data</p>
                </a>
              </li>
            </ul>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>input data</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="container">
       <div class="row">
            <div class="col-md-12">
                    <form>
                    <div class="form-group">
                       <label for="exampleFormControltext">Nama Fasilitas</label>
                        <input type="text" class="form-control" id="exampleFormControltext" placeholder="NamaFasilitas">
                    </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Deskripsi</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <label for="default check">Jenis Fasilitas</label>
                      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="Rumahsakit">
  <label class="form-check-label" for="Rumahsakit">
    Rumah Sakit
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="puskesmas">
  <label class="form-check-label" for="puskesmas">
    puskesmas
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="klinik">
  <label class="form-check-label" for="klinik">
    klinik
  </label>
</div>

 <label for="default check">Jenis Tes</label>
                      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="SWAB">
  <label class="form-check-label" for="SWAB">
    SWAB
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="rapid">
  <label class="form-check-label" for="rapid">
    rapid
  </label>
</div>
<hr size: 0,5px>

<div class="col">
<div class="input-group mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text">harga</span>
  </div>
  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
</div>

<div class="input-group mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text">telp</span>
  </div>
  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
</div>

<div class="input-group mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text">alamat</span>
  </div>
  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
</div>
<div class="col">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

  </div>

<div class="col">
<p class="text-center bg-dark text-light rounded-pill">MAP</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.435379264453!2d104.07059231429949!3d-5.0329242526038795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e478fa11ecf8bdf%3A0xb39ce5cb6ca1ee0e!2sRS%20Umum%20Alimuddin%20Umar%20Liwa!5e0!3m2!1sid!2sid!4v1600656594963!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<a href="#" class="btn btn-secondary rounded btn-sm active" role="button" aria-pressed="true">save</a>

</div>




                      </form>
                </div> 
    </div> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="footer">

    <p class="text-center">Copyright &copy; DIMEN 2020-2021 </p>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->')}}

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
