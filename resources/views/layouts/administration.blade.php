<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{config('app.name')}} | @yield('page') </title>

  <link rel="icon" type="image/png" href="{{asset('assets/image/icons/favicon.png')}}"/>

  <!-- Bootstrap Core CSS -->
  <link href="{{asset('assets/lib/bootstrap-v3.3.7/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{asset('assets/css/sb-admin-2.css')}}" rel="stylesheet">

  <link href="{{asset('assets/lib/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  {{--Custom css--}}
  <link rel="stylesheet" href="{{asset('assets/css/administration.css')}}">
</head>

<body>

<div id="wrapper">

  <!-- Navigation -->
  <x-navigation-dashboard/>

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      <x-card-product/>
      <x-card-order/>
    </div>
    <!-- /.row -->
    <div class="row">
      <!-- Content -->
      @yield('content')
    </div>

    <!-- /.row -->
  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/lib/jquery/jquery-3.1.0.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets/lib/bootstrap-v3.3.7/js/bootstrap.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('assets/js/sb-admin-2.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('assets/lib/metisMenu/metisMenu.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/chart-area.js')}}"></script>
<script src="{{asset('assets/js/chart-bar.js')}}"></script>
</body>

</html>
