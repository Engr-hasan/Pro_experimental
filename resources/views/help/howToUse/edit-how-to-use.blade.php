@extends('layouts.dashboard')
@section('css')
@stop
@section('content')
    <div class="content-wrapper">
        <br>
        <div class="container">
            @include('layouts.msg')
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit How to Use</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{url('/update-how-to-use',$data->id)}}" method="post" role="form" id="HowToUseFormId">
                  @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>How to Use Title: </label>
                        <input type="text" class="form-control" name="how_to_use_title" value="{{$data->how_to_use_title}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>How to Use Description: </label>
                        <textarea class="form-control" rows="3" name="how_to_use_description" required>{{$data->how_to_use_description}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- checkbox -->
                       <div class="form-group">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="1" {{$data->status == 1 ? 'checked' : ''}}>
                                  <label for="customRadio1" class="custom-control-label">Active</label>
                                </div>
                            </div>
                            <div class="col-md-11">
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="0" {{$data->status == 0 ? 'checked' : ''}}>
                              <label for="customRadio2" class="custom-control-label">Inactive</label>
                            </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm float-left">Submit</button>
                    <a href="{{url('/list-how-to-use')}}" class="btn btn-info btn-sm float-right">Close</a>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@section('js')

@stop

