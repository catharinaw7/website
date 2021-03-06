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
    <link rel="stylesheet" href="{{ asset ('/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset ('/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
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
                    <li class="active">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/laporanperbandingan')}}">Laporan Keseluruhan</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/laporanpengeluaranterbesar')}}">Pengeluaran</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/laporanpemasukkanterbesar')}}">Pemasukkan</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Tabungan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/tabungan')}}">Tambah Tabungan</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/logout')}}"> <i class="menu-icon fa fa-power-off"></i>Logout</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="{{ asset('/images/logo.png')}}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{ asset('/images/logo.png')}}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    </div>

                    <div class="user-area dropdown float-right">
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Detail Data</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Detail Data</strong>
                            </div>
                             <div class="card-body">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Data:</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="type" id="select" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Pengeluaran</option>
                                                <option value="2">Pemasukkan</option>
                                                <option value="3">Tabungan</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Tampilan Waktu:</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="select" id="select" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Per bulan</option>
                                                <option value="2">Per tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container">        
                                        <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nominal</th>
                                        <th scope="col">Asal</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Action</th>
                                    </tr>

                                    @foreach($dataPengeluaran as $no => $pengeluaran)
                                    <tr scope="row">
                                        <td>{{ $no+1 }}</td>
                                        <td>{{ $pengeluaran->nama }}</td>
                                        <td>{{ $pengeluaran->nominal}}</td>
                                        @foreach($kategori as $kategoris)
        
                                            @if($pengeluaran->kategoris_id == $kategoris->id)
                                                <td>{{$kategoris->name}}</td>
                                               @endif
                                            @endforeach
                                        <td>{{ $pengeluaran->keterangan}}</td>
                                        <td><a href="{{url('pengeluaran/'.$pengeluaran->id)}}">View</a></td>

                                        <td><a href="{{url('pengeluaran/'.$pengeluaran->id .'/edit')}}">Edit</a></td>
                                        
                                        <td>
                                            <form method="POST" action="{{ url('pengeluaran/' .$pengeluaran->id)}}" id="form-hapus-{{$pengeluaran->id}}" >
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <a href="#" onclick="document.getElementById('form-hapus-{{$pengeluaran->id}}').submit()">Delete</a>
                                            </form>
                                            
                                    </td>
                                    </tr>
                                    @endforeach


                                    </table>
                                    <a href="{{url('/export-excelPengeluaran')}}" class="btn btn-primary btn-sm" style="background-color: green; color: white">
                                    <i class="fa fa-dot-circle-o"></i> Excel</a>
                                    </div>
                        </div>             
                        <!-- </form> -->           
                                    <!-- <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                    </div> -->
                        </div>
                        </div>
                    </div>
                </div>

            </div>


        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="{{asset ('/js/main.js') }}"></script>

</body>
</html>