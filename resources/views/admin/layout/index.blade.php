<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'Ascndia Blog')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href=" {{ asset('adminlte/bootstrap/css/bootstrap.min.css') }}" />
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href=" {{ asset('adminlte/dist/css/AdminLTE.min.css') }} " />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/_all-skins.min.css') }}" />
    @stack('link')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        @include('admin/layout/header')
        @include('admin/layout/sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('content-header')
                </h1>
                <ol class="breadcrumb">
                    @yield('breadcrumb')
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('main-content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin/layout/footer')

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src=" {{ asset('adminlte/plugins/jQuery/jquery-2.2.3.min.js') }} "></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=" {{ asset('adminlte/bootstrap/js/bootstrap.min.js') }} "></script>
    <!-- SlimScroll -->
    <script src=" {{ asset('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }} "></script>
    <!-- FastClick -->
    <script src=" {{ asset('adminlte/plugins/fastclick/fastclick.js') }} "></script>
    <!-- AdminLTE App -->
    <script src=" {{ asset('adminlte/dist/js/app.min.js') }} "></script>
    <!-- AdminLTE for demo purposes -->
    <script src=" {{ asset('adminlte/dist/js/demo.js') }} "></script>
    @stack('script')
    @yield('code')
</body>

</html>
