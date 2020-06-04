@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="wrapper wrapper-content animated fadeInRight top-margin10 ng-scope">

    <div id="testScore" class="row">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Performance by Test 
                    <small>
                        <span style="background-color: rgba(26,179,148,1); margin-left: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Your Score&nbsp;&nbsp;
                            <span style="background-color: rgba(220,220,220,1)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Average Score&nbsp;&nbsp;
                        <span style="background-color: rgba(245,151,0,1)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Cumulative Performance
                    </small>
                </h5>
                <div ibox-tools="" class="ng-scope"><div class="ibox-tools dropdown" dropdown="">
    <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>
    
</div></div>
            </div>
            <div class="ibox-content">
                <div id="testChart" style="margin-right: 20px;"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 1066px; height: 300px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="1066" height="300" aria-label="A chart." style="overflow: hidden;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_256"><rect x="50" y="45" width="1016" height="210"></rect></clipPath></defs><rect x="0" y="0" width="1066" height="300" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="50" y="45" width="1016" height="210" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(https://www.uworld.com/ClientApp/V2/apps/Qbank/index.html#_ABSTRACT_RENDERER_ID_256)"><g><rect x="50" y="45" width="1" height="210" stroke="none" stroke-width="0" fill="#f0f0f0"></rect><rect x="388" y="45" width="1" height="210" stroke="none" stroke-width="0" fill="#f0f0f0"></rect><rect x="727" y="45" width="1" height="210" stroke="none" stroke-width="0" fill="#f0f0f0"></rect><rect x="1065" y="45" width="1" height="210" stroke="none" stroke-width="0" fill="#f0f0f0"></rect><rect x="50" y="212" width="1016" height="1" stroke="none" stroke-width="0" fill="#f0f0f0"></rect><rect x="50" y="170" width="1016" height="1" stroke="none" stroke-width="0" fill="#f0f0f0"></rect><rect x="50" y="129" width="1016" height="1" stroke="none" stroke-width="0" fill="#f0f0f0"></rect><rect x="50" y="87" width="1016" height="1" stroke="none" stroke-width="0" fill="#f0f0f0"></rect><rect x="50" y="45" width="1016" height="1" stroke="none" stroke-width="0" fill="#f0f0f0"></rect></g><g><rect x="50" y="254" width="1016" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g><g><path d="M50.5,64.31C50.5,64.31,276.05555555555554,97.40166666666667,388.8333333333333,106.11000000000001C501.61111111111114,114.81833333333336,614.3888888888888,118.30166666666668,727.1666666666666,116.56C839.9444444444445,114.81833333333336,1065.5,95.66000000000003,1065.5,95.66000000000003" stroke="#b3b3b3" stroke-width="2" fill-opacity="1" fill="none"></path><path d="M50.5,254.5C50.5,254.5,276.05555555555554,254.5,388.8333333333333,254.5C501.61111111111114,254.5,614.3888888888888,254.5,727.1666666666666,254.5C839.9444444444445,254.5,1065.5,254.5,1065.5,254.5" stroke="#1ab394" stroke-width="2" fill-opacity="1" fill="none"></path><path d="M50.5,254.5C50.5,254.5,276.05555555555554,254.5,388.8333333333333,254.5C501.61111111111114,254.5,614.3888888888888,254.5,727.1666666666666,254.5C839.9444444444445,254.5,1065.5,254.5,1065.5,254.5" stroke="#f59700" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g></g><g><g><text text-anchor="middle" x="50.5" y="272.56666666666666" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1</text></g><g><text text-anchor="middle" x="388.8333333333333" y="272.56666666666666" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2</text></g><g><text text-anchor="middle" x="727.1666666666666" y="272.56666666666666" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">3</text></g><g><text text-anchor="end" x="45.666666666666664" y="217.6" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">20</text></g><g><text text-anchor="end" x="45.666666666666664" y="175.8" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">40</text></g><g><text text-anchor="end" x="45.666666666666664" y="134.00000000000003" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">60</text></g><g><text text-anchor="end" x="45.666666666666664" y="92.20000000000002" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">80</text></g><g><text text-anchor="end" x="45.666666666666664" y="50.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">100</text></g></g></g><g><g><text text-anchor="middle" x="558" y="292.23333333333335" font-family="Arial" font-size="14" font-style="italic" stroke="none" stroke-width="0" fill="#222222">Test IDs</text><rect x="50" y="280.33333333333337" width="1016" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g><g><text text-anchor="middle" x="16.23333333333333" y="150" font-family="Arial" font-size="14" font-style="italic" transform="rotate(-90 16.23333333333333 150)" stroke="none" stroke-width="0" fill="#222222">Score</text><path d="M4.333333333333327,255L4.33333333333334,45L18.33333333333334,45L18.33333333333333,255Z" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></path></g></g><g></g></svg></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 310px; left: 1076px; white-space: nowrap; font-family: Arial; font-size: 14px; font-weight: bold;">71</div><div></div></div></div>
                <!-- ngIf: performanceGraphs.testGraph.length == 0 -->
            </div>
        </div>
    </div>


    <div id="testDateScore" class="row">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Performance by Date
                    <small>
                        <span style="background-color: rgba(26,179,148,1); margin-left: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Your Score&nbsp;&nbsp;
                            <span style="background-color: rgba(220,220,220,1)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Average Score&nbsp;&nbsp;
                        <span style="background-color: rgba(245,151,0,1)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Cumulative Performance
                    </small>
                </h5>
                <div ibox-tools="" class="ng-scope"><div class="ibox-tools dropdown" dropdown="">
    <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>
    
</div></div>
            </div>
            <div class="ibox-content">
                <div id="dateChart"></div>

            </div>
        </div>
    </div>



</div>
</div>
<!-- /.content-wrapper -->
@endsection
