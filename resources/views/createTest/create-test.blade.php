@extends('layouts.dashboard')
@section('css')
    <style>
        
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
                                  <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
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
                                <input type="radio" value="unused" name="q_mode" id="radioSuccess2" checked>
                                <label for="radioSuccess2">
                                    Unused
                                    <input type="text" value="43"  style="border: 1px solid gray;padding: 4px;width: 40px;height: 20px;text-align: center;border-radius: 15px;color: #2196F3;" disabled>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="incorrect" name="q_mode" id="radioSuccess3">
                                <label for="radioSuccess3">
                                    Incorrect
                                    <input type="text" value="243"  style="border: 1px solid gray;padding: 4px;width: 40px;height: 20px;text-align: center;border-radius: 15px;color: #2196F3;" disabled>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="marked" name="q_mode" id="radioSuccess4">
                                <label for="radioSuccess4">
                                    Marked
                                    <input type="text" value="443"  style="border: 1px solid gray;padding: 4px;width: 40px;height: 20px;text-align: center;border-radius: 15px;color: #2196F3;" disabled>
                                </label>
                            </div>
                            <div class="icheck-success d-inline" style="margin-right: 50px;">
                                <input type="radio" value="all" name="q_mode" id="radioSuccess5">
                                <label for="radioSuccess5">
                                    All
                                    <input type="text" value="343"  style="border: 1px solid gray;padding: 4px;width: 40px;height: 20px;text-align: center;border-radius: 15px;color: #2196F3;" disabled>
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
                <!-- Question mode end-->

                <!-- Subject-->
                <div class="card" id="subCard">
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
                            @if(isset($subjects))
                                @foreach($subjects as $key=> $singleData)
                                    <div class="col-md-6 mb-2">
                                        <div class="icheck-success d-inline">
                                            <input type="checkbox" id="subject_name{{$key}}">
                                            <label for="subject_name{{$key}}">
                                                {{ $singleData->subject_name }}
                                                <input type="text" value="0534535"  style="border: 1px solid gray;padding: 4px;width: 40px;height: 20px;text-align: center;border-radius: 15px;color: #2196F3;" disabled>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Subject end-->

                <!-- System -->
                <div class="card" id="sysCard">
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
                            @if(isset($systems))
                                @foreach($systems as $key=> $singleData)
                                    <div class="col-md-6 mb-2">
                                        <div class="icheck-success d-inline">
                                            <input type="checkbox" id="system_name{{$key}}">
                                            <label for="system_name{{$key}}">
                                                {{ $singleData->system_name }}
                                                <input type="text" value="0"  style="border: 1px solid gray;border-radius: 100%;padding: 4px;width: 20px;height: 20px;text-align: center;color: #2196F3;" disabled>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- System end-->

                <!-- custom -->

                <div class="card" style="display: none;" id="customCard">
                    <div class="card-header">
                        <h5>Instructions on using Custom mode</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"style="height: 300px; overflow: auto">
                                <p style="text-align: justify;">
                                    This mode is intended to allow for faculty/group review; the faculty/group leader can designate the question IDs to allow the entire group to create the same test within each subscription.

                                    If you are a group member (not the faculty/group leader), you will need to enter the list of question IDs provided by your group leader. Separate each question ID with a comma (,) without spaces or other characters. Only unused questions can be utilized to create a custom test.

                                    If you were not provided a list of question IDs but were given a test ID instead, enter the test ID and click “Retrieve Questions” to automatically generate the list of question IDs. Only unused questions can be utilized to create a custom test.

                                    You can enter only numbers or commas (,) in the space provided. Please do not enter spaces or other characters as this will result in an error prompt.

                                    The maximum number of questions you can select is the same as the maximum number allowed per block/test.

                                    You will not be able to include the question if it has been deactivated or if its ID is invalid.

                                    Some questions are part of a question set and must be included within the same test. In such cases, you must provide the question IDs for each question in the set. If you omit one or more question IDs in the set, the software will not generate the test. Instead, it will provide a list of question IDs that must be entered to complete the question set.

                                    If you are a group leader or member of a study group and need additional assistance using this feature, please contact us at support@uworld.com
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6>Retrieve Questions of a Test #</h6>
                                <form action="#">
                                    <span>
                                        <div class="float-left">
                                            <input type="text" placeholder="Enter Test Id">
                                        </div>
                                        <div>
                                            <input type="submit" class="btn btn-secondary btn-sm" value="Retrieve" style="margin-left: 10px;">
                                        </div>
                                    </span>
                                    <br>
                                    <strong>OR</strong>
                                    <br><br>
                                    <h6>Enter Question Ids separated by comma (,)</h6>
                                    <textarea name="" id="" cols="40" rows="7"></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- custom -->

                <!-- No of Question-->
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">No. of Questions</h5>
                    </div>
                    <div class="card-body">
                        <input class="form-group" name="" type="text" style="width: 70px;">
                        <span>Max allowed per block &nbsp;&nbsp;&nbsp;<input type="text" name="unused" id="unused" value="0"  style="border:0px;border-radius: 100%;padding: 4px;width: 20px;height: 20px;text-align: center;background-color: #d1dade;color: black;" disabled></span>
                    </div>
                </div>
                <!-- No of Question end-->
                <div class="col-md-12 col-lg-12">
                    <a href="{{url('generate-test')}}" class="btn btn-primary">GENERATE TEST</a>
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
                   
                    $('#allSystems').prop("disabled", false);
                    $('div#systems input[type=checkbox]').each(function() {
                       this.checked = false;
                       $(this).prop("disabled", false);
                    });
              });
          }
          else {
            $('div#subjects input[type=checkbox]').each(function() {
                  this.checked = false;

                $('#allSystems').prop("disabled", true);
                $('div#systems input[type=checkbox]').each(function() {
                   this.checked = false;
                   $(this).prop("disabled", true);
                });
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

       //system disabled default
        $('#allSystems').prop("disabled", true);
        $('div#systems input[type=checkbox]').each(function() {
           this.checked = false;
           $(this).prop("disabled", true);
        });


       //custom
       $('#radioSuccess6').change(function(){
            if(this.checked){
                $('#customCard').show();
                $('#subCard').hide();
                $('#sysCard').hide();
            }
        });
       $('#radioSuccess2, #radioSuccess3, #radioSuccess4, #radioSuccess5').change(function(){
            if(this.checked){
                $('#customCard').hide();
                $('#subCard').show();
                $('#sysCard').show();
            }
        });
        //custom
    </script>
@stop
