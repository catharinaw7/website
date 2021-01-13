<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{url('/index')}}"><i class="menu-icon fa fa-laptop"></i> Dashboard </a>
                    </li>
                    <!-- <li class="menu-title">UI elements</li /.menu-title -->
                    <li>
                        <a href="{{url('/pengeluaran')}}"> <i class="menu-icon fa fa-th"></i>Pengeluaran</a>
                    </li>
                    <li>
                        <a href="{{url('/pendapatan')}}"> <i class="menu-icon fa fa-th"></i>Pemasukkan</a>
                    </li>
                    <li>
                        <a href="{{url('/kategori')}}"> <i class="menu-icon fa fa-th"></i>Input Kategori</a>
                    </li>
                    <li>
                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Detail Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/detailpendapatan')}}">Pendapatan</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/detailpengeluaran')}}">Pengeluaran</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/detailtabungan')}}">Tabungan</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/detailkategori')}}">Kategori</a></li>
                        </ul>
                        </li>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/laporanperbandingan')}}">Pilih Periode</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/laporanpengeluaranterbesar')}}">Pengeluaran</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/laporanpemasukkanterbesar')}}">Pemasukkan</a></li>                        </ul>
                    </li>
                    <li>
                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Tabungan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/tabungan')}}">Tambah Tabungan</a></li>
             
                        </ul>
                        </li>
                         <li>
                        <a href="{{url('/logout')}}"> <i class="menu-icon fa fa-power-off"></i>Logout</a>
                    </li>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->   
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{asset('images/logo2.png')}}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    </div>

                    <div class="user-area dropdown float-right">
                       

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Breadcrumbs-->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content" >
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row" style="margin-left: 250px" align="center">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-wallet"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">Rp.<span class="count">{{$user->balance}}</span></div>
                                            <div class="stat-heading">Balance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{$pengeluaran}}</span></div>
                                            <div class="stat-heading">Outcome</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">

                                            <div class="stat-text"><span class="count">
                                                {{$pemasukkan}}
                                            </span></div>
                                            <div class="stat-heading">Income</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>
                        </div>
                                <div class="row m-0">
                                    <div class="col-sm-4">
                                        <div class="page-header float-left">
                                            <div class="page-title">
                                               <!--  <h1>Reminder</h1> -->
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                
                            </div>
                        </div>
                                </div>
                                </div>
                    </div>
                    <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Reminder</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Tabungan</th>
                                            <th>Persentase(%)</th>
                                            <th>Deadline</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tabungan as $no => $saving)
                                        <tr>
                                            <td>{{$saving->nama}}</td>
                                            <td>{{($saving->progres /$saving->target)*100}}</td>
                                            <td>{{$saving->tanggal}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->     
                </div>
            </div>


        <!-- /.breadcrumbs-->
        <!-- Content -->
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="{{ asset('/js/init/chartjs-init.js') }}"></script>
    <!--Flot Chart-->
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="{{asset('/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{asset('/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{asset('/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{asset('/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{asset('/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{asset('/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{asset('/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{asset('/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{asset('/js/init/datatables-init.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
</body>
</html>
