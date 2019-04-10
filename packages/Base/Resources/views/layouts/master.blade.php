<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>{{ config('ttsoft.cms_title') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700&amp;subset=vietnamese" rel="stylesheet">
    {!! cssRender() !!}
    @stack('css')
    <script type="text/javascript">
        var BASE_URL = '{{ url('/') }}';
        var BASE_URL_ADMIN = '{{ route('admin.dashboard.get.index') }}';
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Color picker plugins css -->
    

</head>

<body class="adminbody">
   <div id="main">
      <!-- top bar navigation -->
      @include('base::partials.header')
      <!-- End Navigation -->
      <!-- Left Sidebar -->
      @include('base::partials.slidebar')
      <!-- End Sidebar -->
      <div class="content-page">
        <div class="content">
          <!-- Start content -->
             @yield('content')
             <!-- END content -->
          </div>
      </div>
      <!-- END content-page -->
      @include('base::partials.footer')
   </div>
   <!-- END main -->
    
    {!! jsRender() !!}
    @stack('jQuery')
</body>

</html>