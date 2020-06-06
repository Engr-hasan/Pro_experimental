@extends('layouts.dashboard')
@section('css')

@stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                  <div class="col-md-9">
                      <h4 class="page-title">Role</h4>
                  </div>
                  <div class="col-md-3 text-right m-b-30">
                      <a href="{{ route('role.index') }}" class="btn btn-primary rounded">
                          <i class="fa fa-list"></i> See List</a>
                      <!-- Button trigger modal -->
                  </div>
                  <br>
                  <div class="col-md-12 col-lg-12">
                      <form action="{{ route('role.update',$role) }}" method="post">
                          @csrf
                          @method('put')
                          <div class="modal-body">
                              <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Role:</label>
                                  <input type="text" name="name" value="{{ $role->name }}" class="form-control" id="recipient-name">
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                      </form>
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
