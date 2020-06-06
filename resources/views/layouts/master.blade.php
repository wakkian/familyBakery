<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="description" content="">
  <meta name="author" content="">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <title>Family Bakery</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('swadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('swadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Family Bakery</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Familybakery/public/users">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>
     
      <hr class="sidebar-divider">

      <!-- Nav Item - Karyawan-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('users.index')}}">
          <span>Karyawan</span>
        </a>
      </li>


      <!-- Nav Item - Cabang -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('cabangs.index')}}">
          <span>Cabang</span>
        </a>
      </li>


       <!-- Nav Item - Produk -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('produks.index')}}">
          <span>Produk</span>
        </a>
      </li>

       <!-- Nav Item - Jenis Produk -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('jenis_produks.index')}}">
          <span>Jenis Produk</span>
        </a>
      </li>

       <!-- Nav Item - Bahan Baku -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('bahan_bakus.index')}}">
          <span>Bahan Baku</span>
        </a>
      </li>

       <!-- Nav Item - Resep -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('reseps.index')}}" >
          <span>Resep</span>
        </a>
      </li>

       <!-- Nav Item - Peramalan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('peramalans.index')}}" >
          <span>Peramalan</span>
        </a>
      </li>

       <!-- Nav Item - Laporan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('laporans.index')}}" >
          <span>Laporan</span>
        </a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          @yield('content')

          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->

  <!-- Logout Modal-->


  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('swadmin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('swadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('swadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('swadmin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
