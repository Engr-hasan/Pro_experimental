@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('dashboard')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('dashboard')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
          href="{{asset('dashboard')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
                        <h3 class="card-title float-left"><i class="nav-icon fas fa-th"></i> Question List</h3>
                        <a href="{{route('question-create.create')}}" class="btn btn-primary btn-sm float-right">
                            <strong>+ Create Question</strong>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="5%" class="text-center">ID</th>
{{--                            <th width="15%" class="text-center">Test Mode Type</th>--}}
                            <th width="35%" class="text-center">Question</th>
                            <th width="15%" width="5%" class="text-center">Status</th>
                            <th width="15%" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($questions))
                            @foreach($questions as $key=> $question)
                                <tr>
                                    <td align="center">{{ $key + 1 }}</td>
{{--                                    <td align="center">{{ $question->test_mode_type }}</td>--}}
                                    <td style="text-align: justify;" align="center">{!! \Str::limit($question->question, '100') !!}</td>
                                    <td align="center">
                                        @if($question->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td align="center">
                                        <a class="btn btn-success" href="{{route('question-create.edit',$question->id)}}">
                                            <span class="badge bg-success">Edit</span>
                                        </a>
                                        <form action="{{ route('question-create.destroy',$question->id) }}"
                                              method="post">
                                            @method('DELETE')
                                            @csrf
                                            <br><button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                                    onclick="return confirm('Sure! You want to Delete?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
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
