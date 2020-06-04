@extends('layouts.dashboard')
@section('css')
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
                    <!-- /.col-md-6 -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Notes</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <!--<div class="search-input-wrapper">-->
                                        <input id="searchTextField"
                                               class="form-control ng-pristine ng-valid ng-valid-maxlength ng-touched"
                                               type="text" ng-model="searchKeyword" maxlength="50">
                                        <!--<span title="Clear" ng-click="clearSearch();">&times;</span>-->
                                        <!--</div>-->
                                        <!--<input id="searchText" type="text" class="form-control" ng-model="searchKeyword" maxlength="100" placeholder="Search flash cards" />-->
                                        <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary" ng-click="searchFlashCards()"
                                                style="border-radius:0px;">Search</button>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                    <!-- /.col-md-6 -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-lg-6">
                                    <p>No Notes available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('js')

@stop

