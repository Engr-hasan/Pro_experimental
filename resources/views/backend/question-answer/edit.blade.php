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
                    <h3 class="card-title">Update Answer</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('question-answer.update',$answer->id)}}" method="post" role="form" id="subjectFormId">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Question: <span class="text-danger">*</span></label>
                                    <select name="question_create_id" class="form-control" id="" required>
                                        <option class="form-group"disabled selected value="">Select One</option>
                                        @foreach($questions as $question)
                                            <option class="form-group" {{ $question->id == $answer->question_create_id ? 'selected' : '' }} value="{{ $question->id }}">
                                                {!! \Str::limit($question->question, '60') !!}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- text input -->
                                <div class="form-group">
                                    <label>Answer: <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="answer" id="" value="{{ $answer->answer }}"
                                           required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- checkbox -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1"
                                                       name="status" value="1" {{$answer->status == 1 ? 'checked' : ''}}>
                                                <label for="customRadio1"
                                                       class="custom-control-label">Active</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2"
                                                       name="status" value="0" {{$answer->status == 0 ? 'checked' : ''}}>
                                                <label for="customRadio2"
                                                       class="custom-control-label">Inactive</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox" style="margin-left: 6px">
                                                    <br> <input type="checkbox" class="custom-control-input" value="1"
                                                                id="customCheck" name="correct_answer" {{$answer->correct_answer == 1 ? 'checked' : ''}}>
                                                    <label class="custom-control-label" for="customCheck">If it is correct answer then <span class="badge badge-danger">Checked</span> otherwise skip</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm float-left">Submit</button>
                            </div>
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

