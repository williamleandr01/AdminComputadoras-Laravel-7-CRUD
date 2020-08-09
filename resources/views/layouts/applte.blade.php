<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('AdminComputadoras', 'AdminComputadoras') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/dist/css/adminlte.min.css")}}">

  <link rel="stylesheet" href="{{asset("assets/css/custtom.css")}}">

  <link rel="stylesheet" href="{{asset("assets/css/welcomecss.css")}}">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @yield('style')

  <!-- Google Font: Source Sans Pro -->

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
      @include('layouts.header')

      @include('layouts.aside')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content">
                @yield('contenido')
            </section>
        </div>

        @include('layouts.footer')

    </div>

    <!-- jQuery -->
    <script src="{{asset("assets/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/dist/js/adminlte.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("assets/dist/js/demo.js")}}"></script>

    <script src="{{asset("assets/js/menucrear.js")}}"></script>

    <!-- ************************************************************* -->

    <!-- DataTables -->

    <script src="{{asset("assets/plugins/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>

    <!-- ************************************************************* -->

    <script src="{{asset("assets/js/tablaconsultcomputadora.js")}}"></script>

    <!-- ************************************************************* -->

    <script src="{{asset("assets/js/modalborrarcomputadora.js")}}"></script>


    @yield('scripts')

</body>
</html>
