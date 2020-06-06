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
    <div class="container">
      <br>
      <div class="card">
        <div class="card-body">
           <div class="row">
              <div class="col-md-6">
                  <h4>Test Id : 13</h4>
                  <h6>Custom Test Id : 173010724</h6>
              </div>
              <div class="col-md-6">
                 <br>
                 <div class="float-right">
                    <!-- Question list -->
                    <a href="#" class="btn btn-info"  data-toggle="modal" data-target="#exampleModal">QUESTION LIST</a>
                    
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Question List</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                             <h4>11957, 2400</h4>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end Question list -->

                    <a href="{{url('/test-analysis')}}" class="btn btn-info">TEST ANALYSIS</a>
                    <!-- Notes -->
                    <a href="#" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">NOTES</a>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Notes</h5>
                            </div>
                            <div class="modal-body" style="height: 400px;">
                                <strong>No notes available</strong>
                            </div>
                            <div class="modal-footer">
                              <div class="float-left">
                                <a href="" class="btn btn-secondary" data-dismiss="modal">Ok</a>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Notes end -->
                 </div>
              </div>
           </div>
        </div>

        <br><br><br>

        <div class="container">
          <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <ul class="nav nav-pills mb-3 float-right" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="btn btn-outline-primary active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
                  </li>
                  &nbsp;&nbsp;&nbsp;
                  <li class="nav-item">
                    <a class="btn btn-outline-primary" id="pills-currect-tab" data-toggle="pill" href="#pills-currect" role="tab" aria-controls="pills-currect" aria-selected="false">Currect</a>
                  </li>
                  &nbsp;&nbsp;&nbsp;
                  <li class="nav-item">
                    <a class="btn btn-outline-primary" id="pills-incorrect-tab" data-toggle="pill" href="#pills-incorrect" role="tab" aria-controls="pills-incorrect" aria-selected="false">Incurrect</a>
                  </li>
                  &nbsp;&nbsp;&nbsp;
                  <li class="nav-item">
                    <a class="btn btn-outline-primary" id="pills-marked-tab" data-toggle="pill" href="#pills-marked" role="tab" aria-controls="pills-marked" aria-selected="false">Marked</a>
                  </li>
                  &nbsp;&nbsp;&nbsp;
                  <li class="nav-item">
                    <a class="btn btn-outline-primary" id="pills-omitted-tab" data-toggle="pill" href="#pills-omitted" role="tab" aria-controls="pills-omitted" aria-selected="false">Omitted</a>
                  </li>
                </ul>
            </div>
          </div>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-currect" role="tabpanel" aria-labelledby="pills-currect-tab">
              <hr/>
               <h6>No Records Found</h6>
            </div>
            <div class="tab-pane fade" id="pills-incorrect" role="tabpanel" aria-labelledby="pills-incorrect-tab">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-marked" role="tabpanel" aria-labelledby="pills-marked-tab">
              <hr/>
               <h6>No Records Found</h6>
            </div>
            <div class="tab-pane fade" id="pills-omitted" role="tabpanel" aria-labelledby="pills-omitted-tab">
              <hr/>
                <h6>No Records Found</h6>
            </div>
          </div>

          <br>

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
    <script type="text/javascript">
          $(function () {
            $('#example1').DataTable({
              "paging": false,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });

            $('#example2').DataTable({
              "paging": false,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          });
    </script>
@stop

