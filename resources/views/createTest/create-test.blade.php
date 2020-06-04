@extends('layouts.dashboard')
@section('css')
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">--}}
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="" method="post" class="form-control">
                        @csrf
                        <!-- /.col-md-6 -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Test Mode</h5>
                                </div>
                                <div class="card-body">
                                    <label class="switch">
                                        <input class="form-group" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>

                                    <label class="switch">
                                        <input class="form-group" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                            <!-- /.col-md-6 -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Question Mode</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group clearfix">
                                        <div class="icheck-success d-inline" style="margin-right: 50px;">
                                            <input type="radio" value="unused" name="q_mode" id="radioSuccess2">
                                            <label for="radioSuccess2">Unused</label>
                                            <span class="badge label-plain ng-binding">3126</span>
                                        </div>
                                        <div class="icheck-success d-inline" style="margin-right: 50px;">
                                            <input type="radio" value="incorrect" name="q_mode" id="radioSuccess3">
                                            <label for="radioSuccess3">
                                                Incorrect
                                            </label>
                                        </div>
                                        <div class="icheck-success d-inline" style="margin-right: 50px;">
                                            <input type="radio" value="marked" name="q_mode" id="radioSuccess4">
                                            <label for="radioSuccess4">
                                                Marked
                                            </label>
                                        </div>
                                        <div class="icheck-success d-inline" style="margin-right: 50px;">
                                            <input type="radio" value="all" name="q_mode" id="radioSuccess5">
                                            <label for="radioSuccess5">
                                                All
                                            </label>
                                        </div>
                                        <div class="icheck-success d-inline" style="margin-right: 50px;">
                                            <input type="radio" value="custom" name="q_mode" id="radioSuccess6">
                                            <label for="radioSuccess6">
                                                Custom
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </form>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@stop

