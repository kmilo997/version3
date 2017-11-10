<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>La palmera</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('assets/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">la palmera</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <!-- /.dropdown -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                       &nbsp; {{Auth::user()->name}} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        
                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>





                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    
                    <li>
                        <a href="{{route('pedidoAdmin.index')}}"><i class="fa fa-desktop"></i> Pedidos</a>
                    </li>
          <li>
                        <a href="{{route('cliente.index')}}"><i class="fa fa-bar-chart-o"></i> Coizaciones</a>
                    </li>
                    
                     

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          @yield('content')


             
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Js -->
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('assets/js/morris/morris.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('assets/js/custom-scripts.js')}}"></script>


</body>

</html>