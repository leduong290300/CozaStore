<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="{{asset('assets/image/icons/favicon.png')}}"/>
  <title>{{config('app.name')}} | @yield('page')</title>
  <link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/bootstrap-v3.3.7/css/bootstrap.css')}}">
</head>
<body>
<!-- Main Content -->
<div class="container-fluid" style="display: flex;justify-content: center">
  <div class="row main-content bg-success text-center">
    <div class="col-md-4 text-center company__info">
      <span class="company__logo">
        <h2>
          <img src="{{asset('assets/image/logos/60763db8896b4042a0a43b0009dd4288.png')}}" alt="">
        </h2>
      </span>
    </div>
    <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </div>
</div>
</body>
</html>