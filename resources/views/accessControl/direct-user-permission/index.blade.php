@extends('layouts.dashboard')
@section('css')
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

@stop
