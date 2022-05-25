<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Pengunjung Artikel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    {{-- <center><h1 style="color:red;">Highcharts in Laravel 8 Example</h1></center> --}}
   <div class="container">
    <div class="row" style="margin-left: -100px;">
        <div class="col">
            <br> <br>
            {{-- grafik pengunjung artikel --}}
            <div id="chart-container" style="width: 500px;">

            </div>
        </div>
        <div class="col">
            <br> <br>
            {{-- grafik pengunjung wa --}}
            <div id="chart-container2" style="width: 500px;">
        
            </div>
        </div>
        <div class="col">
            <br> <br>
            {{-- grafik pengunjung wa --}}
            <div id="chart-container3" style="width: 500px;">
        
            </div>
        </div>
    </div>
</div>
	
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var datas = <?php echo json_encode($datas)?>;

    Highcharts.chart('chart-container', {
        title: {
            text: 'Grafik Pengunjung Artikel 2022'
        },
        subtitle: {
            text: 'Total View Pengunjung Artikel'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of Pengunjung Artikel'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'View Articles',
            data: datas
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

    Highcharts.chart('chart-container2', {
        title: {
            text: 'Grafik Pengunjung WA 2022'
        },
        subtitle: {
            text: 'Total View Pengunjung WA'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of Pengunjung WA'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'View Articles',
            data: datas
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

    Highcharts.chart('chart-container3', {
        title: {
            text: 'Grafik Pengunjung Ginjalsembuh.com 2022'
        },
        subtitle: {
            text: 'Total View Pengunjung Ginjalsembuh.com'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of Pengunjung Ginjalsembuh.com'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'View User ginjalsembuh.com',
            data: datas
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>

</html>
