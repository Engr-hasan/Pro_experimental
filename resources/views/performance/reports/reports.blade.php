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
    <script type="text/javascript">
          
    </script>
@stop

