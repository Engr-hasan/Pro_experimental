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
                    <canvas id="pie-chart" width="800" height="450"></canvas>
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
                    <canvas id="line-chart" width="800" height="450"></canvas>
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
                    <span>Medicine</span>
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
                    <span>Medicine</span>
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
                    <span>Medicine</span>
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
                    <span>Medicine</span>
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
                    <span>Medicine</span>
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
                    <span>Medicine</span>
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
                    <span>Dermatology</span>
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
                    <span>Dermatology</span>
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
                    <span>Dermatology</span>
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
                    <span>Dermatology</span>
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
                    <span>Dermatology</span>
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
                    <span>Dermatology</span>
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
    <script type="text/javascript" src="https://cdnjs.com/libraries/Chart.js"></script>
    <script type="text/javascript">
          //pie chart
          new Chart(document.getElementById("pie-chart"), {
                type: 'pie',
                data: {
                  labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                  datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [2478,5267,734,784,433]
                  }]
                },
                options: {
                  title: {
                    display: true,
                    // text: 'Predicted world population (millions) in 2050'
                  }
                }
            });


            //line chart
            new Chart(document.getElementById("line-chart"), {
              type: 'line',
              data: {
                labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                datasets: [{ 
                    data: [4486,5114,6706,7067,8807,5011,4334,4221,7283,2178],
                    label: "Africa",
                    borderColor: "#3e95cd",
                    fill: false
                  }/*, { 
                    data: [282,350,411,502,635,809,947,1402,3700,5267],
                    label: "Asia",
                    borderColor: "#8e5ea2",
                    fill: false
                  }, { 
                    data: [168,170,178,190,203,276,408,547,675,734],
                    label: "Europe",
                    borderColor: "#3cba9f",
                    fill: false
                  }, { 
                    data: [40,20,10,16,24,38,74,167,508,784],
                    label: "Latin America",
                    borderColor: "#e8c3b9",
                    fill: false
                  }, { 
                    data: [6,3,2,2,7,26,82,172,312,433],
                    label: "North America",
                    borderColor: "#c45850",
                    fill: false
                  }*/
                ]
              },
              options: {
                title: {
                  display: true,
                  // text: 'World population per region (in millions)'
                }
              }
            });
    </script>
@stop

