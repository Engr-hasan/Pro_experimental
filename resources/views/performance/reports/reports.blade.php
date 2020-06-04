@extends('layouts.dashboard')
@section('css')
  <link rel="stylesheet" href="{{asset('dashboard')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('dashboard')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('dashboard')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dashboard')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-5">
                    <div id="piechart"></div>
                </div>
            <div class="col-md-3">
                 <table class="table table-bordered">
                  <h5>Question List</h5>
                  <tbody>
                    <tr>
                      <td>
                        <span>Correct</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                            <span class="badge bg-danger">55%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>Incorrect</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                            <span class="badge bg-warning">70%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>Omitted</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                            <span class="badge bg-primary">30%</span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="col-md-3">
                 <table class="table table-bordered">
                  <h5>Answer Changes</h5>
                  <tbody>
                    <tr>
                      <td>
                        <span>Correct</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>Incorrect</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>Omitted</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>

            <div class="col-md-1">
                <a href="#">
                    <img class="float-right" src="{{asset('dashboard')}}/dist/img/print.png" style="width: 40px;height: 40px;">
                </a>
            </div>
            </div>

            <h4>Percentile Rank</h4>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    <div id="chart_div"></div>
                </div>
            <div class="col-md-3">
                <br><br><br>
                 <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>
                        <span>Correct</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>Incorrect</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>Omitted</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <br><br><br>
                 <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>
                        <span>Correct</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>Incorrect</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>Omitted</span>
                        <div class="float-right">
                            <span class="badge bg-dark">34%</span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>

            <br><br>

            <h4>Subjects</h4>
            <hr/>
            <div class="input-group input-group-sm  float-right" style="width: 150px;">
            <input type="text" name="table_search" class="form-control" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Correct</th>
                  <th>Incorrect</th>
                  <th>Omitted</th>
                  <th>P-Rank</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-warning" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-success" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-primary" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-info" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->

          <br><br>

          <h4>Systems</h4>
            <hr/>
            <div class="input-group input-group-sm  float-right" style="width: 150px;">
            <input type="text" name="table_search" class="form-control" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Correct</th>
                  <th>Incorrect</th>
                  <th>Omitted</th>
                  <th>P-Rank</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-warning" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-success" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-primary" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-info" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>0 (0%)</td>
                  <td>1 (100%)</td>
                  <td>0 (0%)</td>
                  <td>0th</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
      </div>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection

@section('js')
    <!-- jQuery -->
    <script src="{{asset('dashboard')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('dashboard')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="{{asset('dashboard')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('dashboard')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('dashboard')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('dashboard')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dashboard')}}/dist/js/adminlte.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
          //pie chart
          // Load google charts
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['Work', 8],
              ['Eat', 2],
              ['TV', 4],
              ['Gym', 2],
              ['Sleep', 8]
            ]);

              // Optional; add a title and set the width and height of the chart
              var options = {'width':400, 'height':270};

              // Display the chart inside the <div> element with id="piechart"
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
              chart.draw(data, options);
            }


            //line chart
            google.charts.load('current', {'packages':['line', 'corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

              var button = document.getElementById('change-chart');
              var chartDiv = document.getElementById('chart_div');

              var data = new google.visualization.DataTable();
              data.addColumn('date', '');  //Month
              data.addColumn('number', ""); //Average Temperature
              data.addColumn('number', "");  //Average Hours of Daylight

              data.addRows([
                [new Date(2014, 0),  -.5,  5.7],
                [new Date(2014, 1),   .4,  8.7],
                [new Date(2014, 2),   .5,   12],
                [new Date(2014, 3),  2.9, 15.3],
                [new Date(2014, 4),  6.3, 18.6],
                [new Date(2014, 5),    9, 20.9],
                [new Date(2014, 6), 10.6, 19.8],
                [new Date(2014, 7), 10.3, 16.6],
                [new Date(2014, 8),  7.4, 13.3],
                [new Date(2014, 9),  4.4,  9.9],
                [new Date(2014, 10), 1.1,  6.6],
                [new Date(2014, 11), -.2,  4.5]
              ]);

              var materialOptions = {
                // chart: {
                //   title: 'Average Temperatures and Daylight in Iceland Throughout the Year'
                // },
                width: 550,
                height: 270,
                // series: {
                //   // Gives each series an axis name that matches the Y-axis below.
                //   0: {axis: 'Temps'},
                //   1: {axis: 'Daylight'}
                // },
                // axes: {
                //   // Adds labels to each axis; they don't have to match the axis names.
                //   y: {
                //     Temps: {label: 'Temps (Celsius)'},
                //     Daylight: {label: 'Daylight'}
                //   }
                // }
              };

              var classicOptions = {
                title: 'Average Temperatures and Daylight in Iceland Throughout the Year',
                width: 900,
                height: 500,
                // Gives each series an axis that matches the vAxes number below.
                /*series: {
                  0: {targetAxisIndex: 0},
                  1: {targetAxisIndex: 1}
                },
                vAxes: {
                  // Adds titles to each axis.
                  0: {title: 'Temps (Celsius)'},
                  1: {title: 'Daylight'}
                },*/
                hAxis: {
                  ticks: [new Date(2014, 0), new Date(2014, 1), new Date(2014, 2), new Date(2014, 3),
                          new Date(2014, 4),  new Date(2014, 5), new Date(2014, 6), new Date(2014, 7),
                          new Date(2014, 8), new Date(2014, 9), new Date(2014, 10), new Date(2014, 11)
                         ]
                },
                vAxis: {
                  viewWindow: {
                    max: 30
                  }
                }
              };

              function drawMaterialChart() {
                var materialChart = new google.charts.Line(chartDiv);
                materialChart.draw(data, materialOptions);
                button.innerText = 'Change to Classic';
                button.onclick = drawClassicChart;
              }

              function drawClassicChart() {
                var classicChart = new google.visualization.LineChart(chartDiv);
                classicChart.draw(data, classicOptions);
                button.innerText = 'Change to Material';
                button.onclick = drawMaterialChart;
              }

              drawMaterialChart();

            }
    </script>
@stop

