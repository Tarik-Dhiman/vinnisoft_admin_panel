<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description"
    content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Monster Free Bootstrap Admin Template by WrapPixel</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link href="{{ asset('assets/plugins/chartist/dist/chartist.min.css') }}" rel="stylesheet" />
      <!-- Custom CSS -->
      <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet" />

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

@include('includes.header')

@include('includes.sidebar')

@yield('content') 

@include('includes.footer')


</body>
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/app-style-switcher.js') }}"></script>
<!-- Wave Effects -->
<script src="{{ asset('assets/js/waves.js') }}"></script>
<!-- Menu sidebar -->
<script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
<!-- Custom JavaScript -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Flot Chart -->
<script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
<!-- Dashboard JavaScript -->
<script src="{{ asset('assets/js/dashboard1.js') }}"></script>
</html>