<!DOCTYPE html>
<html lang={{\Illuminate\Support\Facades\App::getLocale()}}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="ui/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="ui/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="ui/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="ui/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="ui/css/style.css" rel="stylesheet">
    <link href="ui/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="ui/js/html5shiv.js"></script>
    <script src="ui/js/respond.min.js"></script>
    <script src="ui/js/lte-ie7.js"></script>
@yield('css')
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>





@yield('content')
<!-- javascripts -->
<script src="ui/js/jquery.js"></script>
<script src="ui/js/bootstrap.min.js"></script>
<!-- nicescroll -->
<script src="ui/js/jquery.scrollTo.min.js"></script>
<script src="ui/js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome sucript for all page-->
<script src="ui/js/scripts.js"></script>
@yield('js')

</body>

</html>
