<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>FasoHebdo</title>
        <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-grid.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-material-design.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-material-designé.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-reboot.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-reboot.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}"type="text/css">

  </head>
  <body>

      <div class="contenair">
          @yield('css')
          @yield('content')
          @yield('js')
      </div>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js.map')}}"></script>
      <script src="{{asset('js/bootstrap-material-design.min.js')}}"></script>
      <script src="{{asset('js/bootstrap-material-design.min.js.map')}}"></script>

  </body>
</html>
