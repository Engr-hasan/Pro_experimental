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
                    <h3 class="card-title">Answer Explanation</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('answer-explanation.update',$explanation->id)}}" method="post" role="form" id="subjectFormId">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Question: <span class="text-danger">*</span></label>
                                    <select name="question_create_id" class="form-control" id="question_create_id" required>
                                        <option class="form-group"disabled selected value="">Select One</option>
                                        @foreach($questions as $question)
                                            <option class="form-group" value="{{ $question->id }}" {{ $explanation->question_create_id == $question->id ? 'selected' : '' }}>
                                                {!! \Str::limit($question->question, '100') !!}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Answer: <span class="text-danger">*</span></label>
                                    @if($explanation)
                                        <select name="question_answer_list_id" class="form-control" id="question_answer_list_id" required>
                                            @foreach($answers as $answer)
                                                <option class="form-group" value="{{ $answer->id }}" {{ $explanation->question_answer_list_id == $answer->id ? 'selected' : '' }}>
                                                    {{ $answer->answer }}
                                                </option>
                                            @endforeach
                                        </select>
                                    @else
                                        <select name="question_answer_list_id" class="form-control" id="question_answer_list_id" required>
                                        </select>
                                    @endif
                                </div>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Topic: <span class="text-danger">*</span></label>
                                    <input class="form-control" name="topic" value="{{ $explanation->topic }}" required></input>
                                </div>
                                <div class="form-group">
                                    <label>Explanation: <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="summary-ckeditor" rows="3" name="explanation" required>
                                        {!! $explanation->explanation !!}
                                    </textarea>
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
                                                <input class="custom-control-input" {{ $explanation->status == 1 ? 'checked' : '' }}
                                                       type="radio" id="customRadio1" name="status" value="1">
                                                <label for="customRadio1" class="custom-control-label">Active</label>
                                            </div>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" {{ $explanation->status == 0 ? 'checked' : '' }}
                                                       type="radio" id="customRadio2" name="status" value="0">
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
        $('document').ready(function () {
            $('#question_create_id').change(function () {
                var id = $('#question_create_id').val();
                $.ajax({
                    url: '{{ url('get-answer') }}',
                    type: 'get',
                    data: {id: id},
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        $('#question_answer_list_id').html(data);
                    }
                });
            });
        });
    </script>
@stop

