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
    @include('layouts.msg')
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
                <th width="5%" class="text-center">ID</th>
                <th width="20%" class="text-center">FAQ Title</th>
                <th width="45%" class="text-center">FAQ Description</th>
                <th width="10%" width="5%" class="text-center">Status</th>
                <th width="10%" class="text-center">Created</th>
                <th width="10%" class="text-center">Action</th>
              </tr>
              </thead>
              <tbody>
              @if(isset($data))
                @foreach($data as $key=> $singleData)
                  <tr>
                    <td align="center">{{ $key + 1 }}</td>
                    <td style="text-align: justify;" align="center">{{ $singleData->faq_title }}</td>
                    <td style="text-align: justify;" align="center">{{ $singleData->faq_description }}</td>
                    <td align="center">
                      @if($singleData->status == 1)
                        <button type="button" class="btn btn-block btn-success btn-xs">Active</button>
                      @else
                        <button type="button" class="btn btn-block btn-danger btn-xs">Inactive</button>
                      @endif
                    </td>
                    <td align="center">{{ $singleData->created_at->format('d/m/Y') }}</td>
                    <td align="center">
                      <a href="{{url('/faq-edit/'.$singleData->id)}}">
                        <span class="badge bg-primary">Edit</span>
                      </a>
                      <a href="{{url('/faq-delete/'.$singleData->id)}}" onclick="return confirm('Are you sure to Delete?')">
                        <span class="badge bg-danger">Delete</span>
                      </a>
                    </td>
                  </tr>
                  @endforeach
              @endif
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
