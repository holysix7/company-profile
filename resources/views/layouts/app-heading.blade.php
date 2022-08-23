<head>
  <meta charset="UTF-8">
  <meta name="description" content="Videograph Template">
  <meta name="keywords" content="Videograph, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Bosmat Cabaret</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('images/LogoBJB.png') }}">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('app.css') }}">
  <link rel="stylesheet" href="{{ asset('main.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  {{-- template --}}
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  <!-- Css Styles -->
  <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('template/css/elegant-icons.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('template/css/slicknav.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('template/css/style.css') }}" type="text/css">
  {{-- template --}}

  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> --}}
  <script src="{{ asset('app.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
</head>
{{-- <head>
    <meta charset="UTF-8">
    <meta name="description" content="Bosmat Cabaret">
    <meta name="keywords" content="Bosmat, Cabaret, Creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bosmat Cabaret</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}" type="text/css">
</head> --}}
