
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="/dashboard/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/dashboard/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/dashboard/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="/dashboard/css/style.css" rel="stylesheet">
    <link href="/dashboard/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('styles')
  </head>

  <body>

    <section id="container" >
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="{{route('admin.index')}}" class="logo"><b>Dashboard</b></a>
        <!--logo end-->
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="/auth/logout">Logout</a></li>
          </ul>
        </div>
      </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          @include('admin.partials.nav')
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">

          <div class="row">
            <div class="col-lg-12 main-chart">

              @yield('content')

            </div><!-- /col-lg-9 END SECTION MIDDLE -->

          </div><! --/row -->
        </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
        <div class="text-center">
          2014 - Alvarez.is
          <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
          </a>
        </div>
      </footer>
      <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/dashboard/js/jquery.js"></script>
    <script src="/dashboard/js/jquery-1.8.3.min.js"></script>
    <script src="/dashboard/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/dashboard/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/dashboard/js/jquery.scrollTo.min.js"></script>
    <script src="/dashboard/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/dashboard/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="/dashboard/js/common-scripts.js"></script>

    <script type="text/javascript" src="/dashboard/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/dashboard/js/gritter-conf.js"></script>

    @yield('scripts')
  </body>
</html>
