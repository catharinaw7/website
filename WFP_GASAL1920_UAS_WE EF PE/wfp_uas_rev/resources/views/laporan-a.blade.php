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
    <script>
  if ( screen.width >= 768 && screen.width <= 1136 ) {
    var ratio = Math.round( screen.width / 13 ) / 100;
    document.getElementById( "viewport" ).setAttribute( "content", "width=1300, initial-scale=" + ratio );
  }
</script>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="https://www.amcharts.com/xmlrpc.php">
    <title>Donut chart - amCharts</title>

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
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/core.js?ver=20190918-06'></script>
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/charts.js?ver=20190918-06'></script>
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/themes/dataviz.js?ver=20190918-06'></script>
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/themes/material.js?ver=20190918-06'></script>
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/themes/kelly.js?ver=20190918-06'></script>
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/themes/dark.js?ver=20190918-06'></script>
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/themes/frozen.js?ver=20190918-06'></script>
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/themes/moonrisekingdom.js?ver=20190918-06'></script>
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/themes/spiritedaway.js?ver=20190918-06'></script>
    <script type='text/javascript' src='https://www.amcharts.com/lib/4/themes/animated.js?ver=20190918-06'></script>
    <link rel='https://api.w.org/' href='https://www.amcharts.com/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.amcharts.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.amcharts.com/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.2.4" />
    <link rel='shortlink' href='https://www.amcharts.com/?p=129' />
    <link rel="alternate" type="application/json+oembed" href="https://www.amcharts.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.amcharts.com%2Fdemos%2Fdonut-chart%2F" />

    <script>
      // Indicates current version of the Privacy policy
      var amcharts2_policy_version = 2018052201;
      </script>
    <style>
          #chartdiv {
      width: 100%;
      height: 500px;
    }
          </style>
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
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/laporanperbandingan')}}">Pilih Periode</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/laporanpengeluaranterbesar')}}">Pengeluaran</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('/laporanpemasukkanterbesar')}}">Pemasukkan</a></li>
                        </ul>
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
                                <h1>Perbandingan Pengeluaran dan Pemasukkan</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.breadcrumbs-->
        <!-- Content -->
        <div class="content">
            <div class="animated fadeIn">
                 <div class="row form-group">
                        <div class="col col-md-3"><label for="date-input" class=" form-control-label">Pilih Periode </label></div>
                        <div class="col-12 col-md-9"><input type="date" id="date-input" name="date-input" class = "form-control"></div>
                    </div>
                <div id="page" class="site with-banner">

<div id="content" class="site-content">
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<div class="demo-background">
<div class="content-demos demo-body demo-background content-col extended ">

<div class="demo-code demo-code-html">
<div id="chartdiv"></div> </div>
<noscript><img src="https://www.amcharts.com/wp-content/uploads/2013/11/demo_129_none.png" /></noscript>

<script>
            try {
              // Themes begin
// Using default theme
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data
chart.data = [ 
{"country": "Pengeluaran","litres": {{$pengeluaran}} },
{"country": "Pendapatan","litres": {{$pemasukkan}}
}];

// Set inner radius
chart.innerRadius = am4core.percent(50);

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;            }
            catch( e ) {
              console.log( e );
            }
          </script>
</div>
</div>

                    

            </div><!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
       <!--  <footer class="site-footer">
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
        </footer> -->
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
</body>
</html>
