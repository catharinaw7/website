
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">

<script>
  if ( screen.width >= 768 && screen.width <= 1136 ) {
    var ratio = Math.round( screen.width / 13 ) / 100;
    document.getElementById( "viewport" ).setAttribute( "content", "width=1300, initial-scale=" + ratio );
  }
</script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://www.amcharts.com/xmlrpc.php">
<title>Donut chart - amCharts</title>


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
chart.data = [ {
  "country": "Pengeluaran",
  "litres": 45000
}, {
  "country": "Pendapatan",
  "litres": 100000
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
