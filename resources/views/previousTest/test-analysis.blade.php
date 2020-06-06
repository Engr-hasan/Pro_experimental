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
    <br>
    <div class="container">
        <div class="card">
          <div class="card-body">
              <div class="row">
                 <div class="col-md-6">
                      <h3>Test Id : 13</h3>
                  </div>

                  <div class="col-md-6">
                    <div class="float-right">
                      <a href="#">
                          <img class="" src="{{asset('dashboard')}}/dist/img/print.png" style="width: 40px;height: 40px;">
                      </a>
                      <a href="{{url('/review-test')}}" class="btn btn-info">REVIEW TEST</a>
                      <a href="{{url('/results')}}" class="btn btn-info">TEST RESULTS</a>
                    </div>
                  </div>
              </div>

              <div class="row p-3">
                  <div class="col-md-4">
                      <canvas id="pie-chart" width="800" height="450"></canvas>
                  </div>
              <div class="col-md-4">
                   <br/>
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
              <div class="col-md-4">
                <br/>
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
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
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
                  labels: [""],   //"Africa", "Asia", "Europe", "Latin America", "North America"
                  datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["red"],      //, "#8e5ea2","#3cba9f","#e8c3b9","#c45850"
                    data: [100]     //,5267,734,784,433
                  }]
                },
                options: {
                  title: {
                    display: true,
                    // text: 'Predicted world population (millions) in 2050'
                  }
                }
            });
    </script>
@stop

