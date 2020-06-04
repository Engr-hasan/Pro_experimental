@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('dashboard')}}/dist/css/welcome/qbank-all.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/dist/css/welcome/introjs.css">
@stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
     <div class="ibox ">
        <div class="ibox-content">
            <div class="pull-left input-group col-xs-12 col-sm-6 col-md-8 col-lg-5">
                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="option.keyword" maxlength="100" ng-keyup="filterFunction()">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-primary">
                        Search
                    </button>
                </span>
                
            </div>

            <div class="pull-right text-right">
                <!-- ngIf: filteredData.length > 0 -->
                <!-- ngIf: filteredData.length > 0 -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="ibox-content inspinia-timeline">
           
            <!-- ngIf: filteredData.length > 0 -->
            <!-- ngIf: filteredData.length == 0 --><div ng-if="filteredData.length == 0" class="ng-scope">No notes available</div><!-- end ngIf: filteredData.length == 0 -->
        </div>
</div>
<!-- /.content-wrapper -->
@endsection
@section('js')
    <script src="{{asset('dashboard')}}/dist/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
  
    </script>
@stop