<!DOCTYPE html>
<html lang="en">
<style>
  /* Chrome, Safari, Edge, Opera */
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }
</style>
@yield('style')
@include('layouts.includes.header')

<body class="hold-transition sidebar-mini layout-fixed accent-primary">
  <div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('images/LogoBJB.png') }}" alt="JMTOLogo" height="60" width="60">
    </div>
    <!-- Navbar -->
    @include('layouts.includes.navbar')
    <!-- /.navbar -->

    @include('layouts.includes.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="pt-2 px-2" id="flash-message">
        @include('layouts.flash-message')
      </div>

      {{-- <div class="container pt-2"> --}}
      <div id="overlay">
        <div class="cv-spinner">
          <span class="spinner"></span>
        </div>
      </div>
      @yield('content')
      {{-- </div> --}}
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.includes.footer')
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script type="text/javascript">
    $(document).ready(function(){
      $('.number-only').on('keypress', function(evt){
        if(evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57){
          evt.preventDefault()
        }
      })
      $(".currency-format").on('keyup', function(){
        formatNumber($(this).val())
      })
    })
    function formatNumber(s) {
      var parts   = s.split(/,/)
      var spaced  = parts[0]
      .split('').reverse().join('')
      .match(/\d{1,3}/g).join(' ')
      .split('').reverse().join('')
      return spaced + (parts[1] ? ','+parts[1] : '')
    }
  </script>
  
  @yield('script')
  @stack('script')

</body>

</html>