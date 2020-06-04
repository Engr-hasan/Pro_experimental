@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="ibox-content">
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-5 center-xs center-sm nopadding">
                    <div class="input-group">
                        <input id="searchText" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="searchKeyword" maxlength="100" placeholder="Enter QuestionId or Keywords">
                        <span class="input-group-btn">
                            <button type="submit" ng-disabled="!searchComplete" class="btn btn-primary" ng-click="btnSearchClick()" autofocus="autofocus">Search</button>
                             <img id="searchTooltip" data-toggle="popover" data-container="body" data-placement="right" src="/assets/media/images/info.png" width="20" style="cursor: pointer;margin-left:5px;margin-top:-2px;" data-original-title="" title="">
                             <div id="searchTooltipDescription" style="display: none;">
                                <div class="feed-activity-list">
                                    Search from the questions you have already used by entering the question ID or keywords
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <img ng-show="!searchComplete" src="img/ajax-loader.gif" style="height: 40px" class="ng-hide">
                <div class="clearfix"></div>
                <small><i>Search will be performed only on used questions.</i></small>
            </div>
</div>
<!-- /.content-wrapper -->
@endsection
