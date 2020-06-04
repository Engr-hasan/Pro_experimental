@extends('layouts.dashboard')
@section('css')
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
            <div class="container pt-2">
                <!-- Test mode-->
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
                <!-- Test mode end-->

                <!-- Question mode -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Question Mode</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group clearfix">
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="unused" name="q_mode" id="radioSuccess2">
                                <label for="radioSuccess2">
                                    Unused
                                    <span class="badge bg-dark">3126</span>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="incorrect" name="q_mode" id="radioSuccess3">
                                <label for="radioSuccess3">
                                    Incorrect
                                    <span class="badge bg-dark">3126</span>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="marked" name="q_mode" id="radioSuccess4">
                                <label for="radioSuccess4">
                                    Marked
                                    <span class="badge bg-dark">3126</span>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="all" name="q_mode" id="radioSuccess5">
                                <label for="radioSuccess5">
                                    All
                                    <span class="badge bg-dark">3126</span>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="custom" name="q_mode" id="radioSuccess6">
                                <label for="radioSuccess6">
                                    Custom
                                    <span class="badge bg-dark">3126</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Question mode end-->

                <!-- Subject-->
                <div class="card">
                    <div class="card-header">
                        <div class="icheck-success d-inline">
                            <input type="checkbox" id="checkboxSuccess1">
                            <label for="checkboxSuccess1">
                                Subjects
                            </label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="checkboxSuccess2">
                                    <label for="checkboxSuccess2">
                                        Medicine
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess3">
                                    <label for="checkboxSuccess3">
                                        Obstetrics & Gynecology
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess4">
                                    <label for="checkboxSuccess4">
                                        Pediatrics
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="checkboxSuccess2">
                                    <label for="checkboxSuccess2">
                                         Psychiatry 
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess3">
                                    <label for="checkboxSuccess3">
                                        Surgery
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Subject end-->

                <!-- System -->
                <div class="card">
                    <div class="card-header">
                        <div class="icheck-success d-inline">
                            <input type="checkbox" id="checkboxSuccess1">
                            <label for="checkboxSuccess1">
                                Systems
                            </label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="checkboxSuccess2">
                                    <label for="checkboxSuccess2">
                                        Allergy & Immunology
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess3">
                                    <label for="checkboxSuccess3">
                                        Biostatistics & Epidemiology
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess4">
                                    <label for="checkboxSuccess4">
                                        Subjects
                                    </label>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="checkboxSuccess2">
                                    <label for="checkboxSuccess2">
                                        Ophthalmology
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess3">
                                    <label for="checkboxSuccess3">
                                        Miscellaneous (Multisystem)
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess4">
                                    <label for="checkboxSuccess4">
                                        Male Reproductive System
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- System end-->

                <!-- No of Question-->
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">No. of Questions</h5>
                    </div>
                    <div class="card-body">
                        <input class="form-group" name="" type="text">
                        <span>Max allowed per block &nbsp;&nbsp;&nbsp;<span class="badge bg-dark">0</span></span>
                    </div>
                </div>
                <!-- No of Question end-->
                <div class="col-md-12 col-lg-12">
                    <a href="#" class="btn btn-primary">Generate Test</a>
                </div>
                <br/>
            </div>
        </div>
    <!-- /.content-wrapper -->
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@stop

