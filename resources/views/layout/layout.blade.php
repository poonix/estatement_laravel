<!DOCTYPE html>
<html>
<head>
 @include('include.head')
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
      @include('include.header')
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          @include('include.pagetitle')
        </h1>
        <ol class="breadcrumb">
            @yield('breadcrumb')
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        @yield('contents')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    @include('include.footer')
  </footer>
</div>
<!-- ./wrapper -->

@include('include.scripts')
</body>
</html>
