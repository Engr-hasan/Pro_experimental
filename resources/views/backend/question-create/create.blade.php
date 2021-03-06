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
                    <h3 class="card-title">Create Question</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('question-create.store')}}" method="post" role="form" id="subjectFormId">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                {{--<div class="form-group">
                                    <label>Test Mode Type: <span class="text-danger">*</span></label>
                                    <select name="test_mode_type" class="form-control" id="" required>
                                        <option class="form-group"disabled selected value="">Select One</option>
                                        <option class="form-group" value="tutor">Tutor</option>
                                        <option class="form-group" value="timed">Timed</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Question Mode: <span class="text-danger">*</span></label>
                                    <select name="question_mode_id" class="form-control" id="" required>
                                        <option class="form-group"disabled selected value="">Select One</option>
                                        @foreach($modes as $mode)
                                            <option class="form-group" value="{{ $mode->id }}">{{ $mode->name }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}
                                <div class="form-group">
                                    <label>Subject: <span class="text-danger">*</span></label>
                                    <select name="subject_id" class="form-control" id="" required>
                                        <option class="form-group"disabled selected value="">Select One</option>
                                        @foreach($subjects as $subject)
                                            <option class="form-group" value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>System: <span class="text-danger">*</span></label>
                                    <select name="system_id" class="form-control" id="" required>
                                        <option class="form-group"disabled selected value="">Select One</option>
                                        @foreach($systems as $system)
                                            <option class="form-group" value="{{ $system->id }}">{{ $system->system_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Question: <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="summary-ckeditor" rows="3" name="question" placeholder="Enter Your Question Here" required></textarea>
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
                                                <input class="custom-control-input" type="radio" id="customRadio1"
                                                       name="status" value="1" checked>
                                                <label for="customRadio1" class="custom-control-label">Active</label>
                                            </div>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2"
                                                       name="status" value="0">
                                                <label for="customRadio2" class="custom-control-label">Inactive</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm float-left">Submit</button>
                            <a href="{{url('/subjects-list')}}" class="btn btn-info btn-sm float-right">Close</a>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
@stop

