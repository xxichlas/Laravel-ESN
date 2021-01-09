<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Try Out ESN</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!-- INI UNTUK NGISI SEARCH BAR -->
    <!-- <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> -->
    <link href="{{asset('DataTables/datatables.css')}}" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Try Out ESN</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">{{ Auth::user()->name }} &nbsp; <form method="POST" action="{{ route('logout') }}"class="btn btn-warning">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form></div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="{{asset('img/mina.jpg')}}" class="user-image img-responsive" />
                    </li>


                    <!-- <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li> -->
                    @can('editpeserta')
                    <li>
                        <a href="{{url('/peserta')}}"><i class="fa fa-dashboard fa-3x"></i>Data Peserta</a>
                    </li>
                    @endcan
                    @can('editakun')
                    <li>
                        <a href="{{url('/akun')}}"><i class="fa fa-dashboard fa-3x"></i>Akun</a>
                    </li>
                    @endcan

                    @can('edithasil')
                    <li>
                        <a href="{{url('/hasilsaintek')}}"><i class="fa fa-dashboard fa-3x"></i>Hasil Saintek</a>
                    </li>
                    
                    <li>
                        <a href="{{url('/hasilsoshum')}}"><i class="fa fa-dashboard fa-3x"></i>Hasil Soshum</a>
                    </li>
                    @endcan

                    @can('editsertifikat')
                    <li>
                        <a href="{{url('/sertifikat')}}"><i class="fa fa-dashboard fa-3x"></i>Sertifikat</a>
                    </li>
                    @endcan

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
                        @yield('row')


                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('js/jquery.metisMenu.js')}}"></script>
    <!-- CUSTOM SCRIPTS -->


    <!-- INI UNTUK NGISI SEARCH BAR -->
    <script src="{{asset('js/dataTables/jquery.dataTables.js')}}"></script>
    <!-- <script src="assets/js/dataTables/dataTables.bootstrap.js"></script> -->
    <script src="{{asset('dataTables/jquery.dataTables.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example1').dataTable();
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example2').dataTable();
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example3').dataTable();
        });

    </script>

</body>

</html>
