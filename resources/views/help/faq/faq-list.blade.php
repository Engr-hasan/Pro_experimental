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
<div class="content-wrapper">
    <div class="container mt-2">
      <div class="card">
        <div class="card-header">
          <div>
            <h3 class="card-title float-left">FAQ List</h3>
            <a href="{{url('/faq-create')}}" class="btn btn-primary btn-sm float-right">
              <strong>+ Create FAQ</strong>
            </a>
          </div>
        </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>SCORE</th>
                <th>NAME</th>
                <th>DATE</th>
                <th>MODES</th>
                <th>SUBJECTS</th>
                <th>SYSTEMS</th>
                <th># QS  </th>
                <th>ACTION</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <span class="bg-info p-2" style="border-radius: 100%">0%</span>
                </td>
                <td align="center">12</td>
                <td align="center">Jun 02, 2020 11:57 PM</td>
                <td align="center">Tutor - Unused</td>
                <td align="center">Medicine</td>
                <td align="center">Dermatology</td>
                <td align="center">10</td>
                <td align="center">
                  <a href="{{url('/resume')}}">Resume</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/results')}}">Results</a> &nbsp;&nbsp;&nbsp;<a href="{{url('/analysis')}}">Analysis</a>
                </td>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
    </div>
</div>
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
            $("#example1").DataTable({
              "responsive": true,
              "autoWidth": false,
            });
          });
    </script>
@stop
