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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-7">
                        <h4 class="page-title">Direct User Role</h4>
                    </div>

                </div>
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-12">

                            {{ BootForm::open(['url'=>route('direct-user-permission.store')]) }}
                            <div class="table-responsive">
                                <table class="display datatable table table-stripped">
                                    <thead>
                                    <th>Permissions \ Users</th>
                                    @foreach($permissions as $permission)
                                        <th class="text-center">
                                            {{ $permission->name }}
                                        </th>
                                    @endforeach
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            @foreach($permissions as $permission)
                                                <td class="text-center">
                                                    <div class="pretty p-switch p-fill p-success">
                                                        <input name="matrix[{{ $user->id }}][]" value="{{ $permission->id }}"
                                                        type='checkbox' {{$cross_check($model_has_permissions, $permission->id,$user->id) }}/>
                                                        <div class="state p-primary"> <label></label>  </div>
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $users->links() }}
                            </div>

                            <div class="btn-group m-t-10">
                                <button type="submit" class="tcb-animate-b tcb-success tcb-small"><i
                                        class="fa fa-save"></i> Save
                                </button>
                                <button type="button" class="tcb-animate-b tcb-warning tcb-small"
                                        onclick="location.reload();"><i class="fa fa-refresh"></i> Refresh
                                </button>
                                <a onclick="window.history.back();" class="tcb-animate-b tcb-default tcb-small"><i
                                        class="fa fa-reply" aria-hidden="true"></i>&nbsp; Back</a>
                            </div>
                            {{ BootForm::close() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('js')
    <!-- jQuery -->
    {{--    <script src="{{asset('dashboard')}}/plugins/jquery/jquery.min.js"></script>--}}
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
            $('#example2').DataTable({
                "paging": true,
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
