<?php 
    $countFalse = 0;
    $countTrue = 0;
    $datas = ["2019-10-24", "2019-10-25", "2019-10-26", "2019-10-27", "2019-10-28", "2019-10-29", "2019-10-30", "2019-10-31"];
    $dataCount = 0;
?>
@foreach($historicos as $historico)
<?php 
    if(($historico->status == 1) && ($historico->data == $datas[0])){ 
        $countFalse++;
    } else if(($historico->status == 0) && ($historico->data == $datas[0])){
        $countTrue++;
    }
?>
@endforeach



<?php  
        $soma = 0;
        $count = 0;
 ?>
@foreach ($temperaturas as $temperatura)
<?php
        $count++;
        $soma += $temperatura->dados;
?>
@endforeach
<?php  
        $temperaturaMedia = $soma/$count;
?>


    <!DOCTYPE html>

    <html lang="pt">


    <head>

        <meta charset="utf-8" />

        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">

        <link rel="icon" type="image/png" href="../assets/img/favicon.png">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>
        {{ config('app.name') }}  </title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


        <!--     Fonts and icons     -->


        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


        <!-- CSS Files -->


        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.3.0') }}" rel="stylesheet" />


        <!-- CSS Just for demo purpose, don't include it in your project -->


        <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />

    </head>

    <body class="">

        <div class="wrapper ">

            <div class="sidebar" data-color="blue">


                <div class="logo">


                    <a href="{{ url('/home') }}" class="simple-text logo-mini">
                      YR
                  </a>


                  <a href="{{ url('/home') }}" class="simple-text logo-normal">
                  RealTime-Datacenter       </a>

              </div>


              <div class="sidebar-wrapper" id="sidebar-wrapper">

                <ul class="nav">

                    <li class="active ">

                        <a href="{{ route('home') }}">

                            <i class="now-ui-icons design_app"></i>

                            <p>Dashboard</p>

                        </a>

                    </li>

                    <li>

                        <a href="{{ route('notificacoes') }}">

                            <i class="now-ui-icons ui-1_bell-53"></i>

                            <p>Notificações</p>

                        </a>

                    </li>

                    <li>

                        <a href="./user.html">

                            <i class="now-ui-icons users_single-02"></i>

                            <p>Perfil</p>

                        </a>

                    </li>


                    <li>

                        <a href="./tables.html">

                            <i class="now-ui-icons design_bullet-list-67"></i>

                            <p>Lista de tabelas</p>

                        </a>

                    </li>

                </ul>

            </div>

        </div>

        <div class="main-panel" id="main-panel">



            <!-- Navbar -->

            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">

                <div class="container-fluid">

                    <div class="navbar-wrapper">

                        <div class="navbar-toggle">

                            <button type="button" class="navbar-toggler">

                                <span class="navbar-toggler-bar bar1"></span>

                                <span class="navbar-toggler-bar bar2"></span>

                                <span class="navbar-toggler-bar bar3"></span>

                            </button>

                        </div>

                        <a class="navbar-brand" href="#pablo">Dashboard</a>

                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-bar navbar-kebab"></span>

                        <span class="navbar-toggler-bar navbar-kebab"></span>

                        <span class="navbar-toggler-bar navbar-kebab"></span>

                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                        <ul class="navbar-nav">

                            
                                <li class="nav-item">

                                    <a class="nav-link" href="#">

                                        <i class="now-ui-icons users_single-02"></i>

                                        <p>

                                            <span class="d-lg-none d-md-block">Account</span>

                                        </p>

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </nav>


                <!-- End Navbar -->

                <div class="panel-header panel-header-lg">

                    <canvas id="bigDashboardChart"></canvas>

                </div>

                <div class="content">            
                    <main>
                        @yield('content')
                    </main>
                </div>


                <!--   Core JS Files   -->


                <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
                <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>

                <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>


                <!--  Google Maps Plugin  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>  -->




                <!-- Chart JS -->

                <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>


                <!--  Notifications Plugin    -->

                <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>


                <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->

                <script src="{{ asset('assets/js/now-ui-dashboard.min.js?v=1.3.0') }}" type="text/javascript"></script>


                <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->


                <script src="{{ asset('assets/demo/demo.js') }}"></script>

                <script>
                    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts(<?php echo $countTrue; ?>, <?php echo $countFalse; ?>);
      demo.initDocChart(<?php echo $temperaturaMedia;?>);

  });

</script>

</body>

</html>