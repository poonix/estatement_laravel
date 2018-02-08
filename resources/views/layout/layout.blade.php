<!DOCTYPE html>
<html>
<head>
  @yield('head')
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
      @yield('header')
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          @yield('pagetitle')
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
    @yield('footer')
  </footer>
</div>
<!-- ./wrapper -->

@yield('scripts')
</body>
</html>
