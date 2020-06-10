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
                        <h3 class="card-title float-left"><i class="nav-icon fas fa-th"></i> Answer List</h3>
                        {{--<a href="{{route('question-create.create')}}" class="btn btn-primary btn-sm float-right">
                            <strong>+ Create Question Answer</strong>
                        </a>--}}
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#myModal">
                            + Create Question Answer
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="5%" class="text-center">ID</th>
                            <th width="30%" class="text-center">Question</th>
                            <th width="20%" class="text-center">Answer</th>
                            <th width="15%" width="5%" class="text-center">Status</th>
                            <th width="15%" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(isset($answers))
                                @foreach($answers as $key=> $answer)
                                    <tr>
                                        <td align="center">{{ $key + 1 }}</td>
                                        <td style="text-align: justify;" align="center">{!! \Str::limit($answer->question->question, '80') !!}</td>
                                        <td style="text-align: justify;" align="center">
                                            @if($answer->correct_answer==1)
                                                <span class="badge badge-success">{{ $answer->answer }}</span>
                                            @else
                                                <span>{{ $answer->answer }}</span>
                                            @endif
                                        </td>
                                        <td align="center">
                                            @if($answer->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td align="center">
                                            <a class="btn btn-success" href="{{route('question-answer.edit',$answer->id)}}">
                                                <span class="badge bg-success">Edit</span>
                                            </a>
                                            <form action="{{ route('question-answer.destroy',$answer->id) }}"
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

    <div class="container">
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Create Answer</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="{{route('question-answer.store')}}" method="post" role="form" id="subjectFormId">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Question: <span class="text-danger">*</span></label>
                                        <select name="question_create_id" class="form-control" id="" required>
                                            <option class="form-group"disabled selected value="">Select One</option>
                                            @foreach($questions as $question)
                                                <option class="form-group" value="{{ $question->id }}">{!! \Str::limit($question->question, '60') !!}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Answer: <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="answer" id="" placeholder="Enter Answer"
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
                                                           name="status" value="1" checked>
                                                    <label for="customRadio1"
                                                           class="custom-control-label">Active</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio2"
                                                           name="status" value="0">
                                                    <label for="customRadio2"
                                                           class="custom-control-label">Inactive</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-checkbox" style="margin-left: 6px">
                                                        <br> <input type="checkbox" class="custom-control-input" value="1"
                                                               id="customCheck" name="correct_answer">
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

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

        CKEDITOR.replace('summary-ckeditor');
    </script>
@stop
