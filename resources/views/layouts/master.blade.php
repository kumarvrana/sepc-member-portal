<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SEPC | Member Portal</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="/css/app.css">
 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    <!-- Navbar -->
    @include('partials.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->  
    @include('partials.left-sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    {{-- @include('partials.breadcrumb') --}}    

    <!-- Main content -->
    <div class="content mt-5">
      <div class="container-fluid">
            <router-view></router-view>
            <vue-progress-bar></vue-progress-bar>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('partials.footer')
</div>
<!-- ./wrapper -->

<script src="/js/app.js"></script>
</body>
</html>
