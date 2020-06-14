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
    <div class="content-wrapper" id="wrapper">
        <div class="container pt-2">
            <form action="{{ route('create.test.store') }}" method="post">
                @csrf
                <!-- Test mode-->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">
                        <span> Test Mode
                            <img src="{{asset('dashboard')}}/dist/img/info.png" alt="Info"  data-toggle="popover"
                                 title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" style="width: 20px;height: 20px;">
                        </span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="test_mode" value="tutor" class="custom-control-input" id="customSwitch1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Tutor</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="test_mode" value="timed" class="custom-control-input" id="customSwitch2">
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
                            <h5 class="m-0">
                                Question Mode
                                <img src="{{asset('dashboard')}}/dist/img/info.png" alt="Info"  data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" style="width: 20px;height: 20px;">
                            </h5>
                        </div>
                        <div class="card-body" id="app"  v-on:click="seen = !seen">
                            <div class="form-group clearfix">
                                @foreach($q_modes as $mode)
                                    <div class="icheck-success d-inline" style="margin-right: 50px;">
                                        <input type="radio" value="{{$mode->id}}" name="question_mode" id="radioSuccess{{$mode->id}}">
                                        <label for="radioSuccess{{$mode->id}}">
                                            {{ $mode->name }}
                                            @if($mode->id==1)
                                                <input type="text" class="inputDesign" value="{{ $q_mode_counts1 }}" disabled>
                                            @elseif($mode->id==2)
                                                <input type="text" class="inputDesign" value="{{ $q_mode_counts2 }}" disabled>
                                            @elseif($mode->id==3)
                                                <input type="text" class="inputDesign" value="{{ $q_mode_counts3 }}" disabled>
                                            @elseif($mode->id==4)
                                                <input type="text" class="inputDesign" value="{{ $q_mode_counts4 }}" disabled>
                                            @else
                                                <input type="text" class="inputDesign" value="{{ $q_mode_counts5 }}" disabled>
                                            @endif
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Question mode end-->

                    <!-- Subject-->
                    <div class="card" v-if="seen" id="hide">
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
                                                <input type="checkbox" name="subjects[]" value="{{$singleData->id}}" id="subject_name{{$key}}">
                                                <label for="subject_name{{$key}}">
                                                    {{ $singleData->subject_name }}
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
                                @if(isset($systems))
                                    @foreach($systems as $key=> $singleData)
                                        <div class="col-md-6 mb-2">
                                            <div class="icheck-success d-inline">
                                                <input type="checkbox" name="systems[]" value="{{$singleData->id}}" id="system_name{{$key}}">
                                                <label for="system_name{{$key}}">
                                                    {{ $singleData->system_name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
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
                            <input class="form-group" name="number_of_question" type="text" style="width: 70px;">
                            <span>Max allowed per block &nbsp;&nbsp;&nbsp;<input type="text" class="inputDesign" name="unused" id="unused" value="0" disabled></span>
                        </div>
                    </div>
                    <!-- No of Question end-->
                    <div class="col-md-12 col-lg-12">
                        <a href="{{url('generate-test')}}" class="btn btn-primary">GENERATE TEST</a>
                    </div>
            </form>
            <br/>
        </div>
    </div>
<!-- /.content-wrapper -->
@endsection
@section('js')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>--}}
    <script type="text/javascript">
        /*$(document).ready(function () {
            new Vue({
                el:'#wrapper',
                data:{
                    seen: true
                }
            });
        });*/
       //Subjects
       $('#allSubjects').click(function(event) {
          if(this.checked) {
              $('div#subjects input[type=checkbox]').each(function() {
                  this.checked = true;
                  $( "#allSystems" ).prop( "disabled", false );
              });
          }
          else {
            $('div#subjects input[type=checkbox]').each(function() {
                  this.checked = false;
                $( "#allSystems" ).prop( "disabled", true );
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

       //system disable

            if (("#unusedCheckbox").prop("checked")) {
              $("input[id^='system_name']").prop("disabled", "true");
              $(this).prop("disabled", false);
            } else {
              $("input[id^='system_name']").prop("disabled", false);
            }
    </script>
@stop

