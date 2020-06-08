@extends('layouts.dashboard')
@section('css')
    <style>
        .inputDesign{
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;color: #fff!important;background-color: #343a40!important;
            width: 60px;height: 20px;
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
                        <div class="row">
                            <div class="col-md-2">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                  <label class="custom-control-label" for="customSwitch1">Tutor</label>
                                </div>
                            </div> 
                            <div class="col-md-1">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                  <label class="custom-control-label" for="customSwitch2">Timed</label>
                                </div>
                            </div> 
                            <div class="col-md-9"></div>   
                        </div>   
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
                                    <input type="text" class="inputDesign" name="unused" id="unused" value="3126" disabled>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="incorrect" name="q_mode" id="radioSuccess3">
                                <label for="radioSuccess3">
                                    Incorrect
                                    <input type="text" class="inputDesign" name="incorrect" id="incorrect" value="3126" disabled>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="marked" name="q_mode" id="radioSuccess4">
                                <label for="radioSuccess4">
                                    Marked
                                    <input type="text" class="inputDesign" name="marked" id="marked" value="3126" disabled>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="all" name="q_mode" id="radioSuccess5">
                                <label for="radioSuccess5">
                                    All
                                    <input type="text" class="inputDesign" name="all" id="all" value="3126" disabled>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="custom" name="q_mode" id="radioSuccess6">
                                <label for="radioSuccess6">
                                    Custom
                                    <span class="badge bg-dark">Custom section</span>
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
                            <input type="checkbox" id="allSubjects">
                            <label for="allSubjects">
                                Subjects
                            </label>
                        </div>
                    </div>
                    <div class="card-body" id="subjects">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="checkboxSuccess22">
                                    <label for="checkboxSuccess22">
                                        Medicine
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess33">
                                    <label for="checkboxSuccess33">
                                        Obstetrics & Gynecology
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess44">
                                    <label for="checkboxSuccess44">
                                        Pediatrics
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="checkboxSuccess55">
                                    <label for="checkboxSuccess55">
                                         Psychiatry 
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess66">
                                    <label for="checkboxSuccess66">
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
                            <input type="checkbox" id="allSystems">
                            <label for="allSystems">
                                Systems
                            </label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row" id="systems">
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
                                    <input type="checkbox" id="checkboxSuccess5">
                                    <label for="checkboxSuccess5">
                                        Allergy & Immunology
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess6">
                                    <label for="checkboxSuccess6">
                                        Biostatistics & Epidemiology
                                    </label>
                                </div>
                                <div class="icheck-success">
                                    <input type="checkbox" id="checkboxSuccess7">
                                    <label for="checkboxSuccess7">
                                        Subjects
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
                        <input class="form-group" name="" type="text" style="width: 70px;">
                        <span>Max allowed per block &nbsp;&nbsp;&nbsp;<input type="text" class="inputDesign" name="unused" id="unused" value="0" disabled></span>
                    </div>
                </div>
                <!-- No of Question end-->
                <div class="col-md-12 col-lg-12">
                    <a href="#" class="btn btn-primary">GENERATE TEST</a>
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

    <script type="text/javascript">
       //Subjects 
       $('#allSubjects').click(function(event) {
          if(this.checked) {
              $('div#subjects input[type=checkbox]').each(function() {
                  this.checked = true;
              });
          }
          else {
            $('div#subjects input[type=checkbox]').each(function() {
                  this.checked = false;
              });
          }
        });

       //Systems
       $('#allSystems').click(function(event) {
          if(this.checked) {
              $('div#systems input[type=checkbox]').each(function() {
                  this.checked = true;
              });
          }
          else {
            $('div#systems input[type=checkbox]').each(function() {
                  this.checked = false;
              });
          }
        });
    </script>
@stop

