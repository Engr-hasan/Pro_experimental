@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="ibox-content">
            <div class="col-sm-12 col-md-10">
                <div class="alert alert-info">
                    <ul class="ul-list">
                        <li>Subscribers who have subscribed for 6 months or more can reset their test information <b>Only Once</b> during the entire subscription.</li>
                        <li>Reset of Test info will DELETE ALL data related to the subscription including notes, highlights, performance and all previous tests. Flash card data will not be deleted.</li>
                        <li>Once the information is reset, the change is irreversible and the data is lost forever.</li>
                    </ul>

                </div>

                <!-- ngIf: message == '' --><div ng-if="message == ''" class="ng-scope">
                    <!-- ngIf: !isEligibleForReset --><div ng-if="!isEligibleForReset" class="alert alert-danger ng-scope">
                        Your subscription does not qualify for a reset or subscription has already been reset.
                    </div><!-- end ngIf: !isEligibleForReset -->

                    <div>
                        <!-- ngIf: isEligibleForReset -->
                    </div>
                </div><!-- end ngIf: message == '' -->
                <!-- ngIf: message.length > 0 -->
            </div>
            <div class="clearfix"></div>
        </div>
</div>
<!-- /.content-wrapper -->
@endsection
