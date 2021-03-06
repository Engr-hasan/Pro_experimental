@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('dashboard')}}/dist/css/welcome/styles.css">
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div ng-show="userReport != undefined" id="welcomeDiv" class="ng-scope">
            <div class="wrapper wrapper-content ibox-content animated fadeInRight top-margin10"
                 style="border-top:0px;margin-bottom:60px;">
                <!-- ngIf: subExpiry.days < 7 && !globalConstants.isDemo && !globalConstants.isTrial -->
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Statistics</h5>
                        <div ibox-tools="" class="ng-scope">
                            <div class="ibox-tools dropdown" dropdown="">
                                <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="ibox-content nopadding">
                        <div class="col-xs-12 col-lg-6  ">
                            <div class="col-xs-12 col-sm-5 ">
                                <div id="usagechart">
                                    <div style="position: relative;">
                                        <iframe name="Drawing_Frame_25349" id="Drawing_Frame_25349" width="178"
                                                height="232" frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0"></iframe>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7  welcome-graph-vertical-align">
                                <!-- ngIf: !globalConstants.qbankIsSim -->
                                <div ng-if="!globalConstants.qbankIsSim" class="ng-scope">
                                    <ul class="list-group ">
                                        <li class="list-group-item">
                                            <span class="badge badge-plain ng-binding">3367</span>
                                            Total Questions
                                        </li>
                                        <li class="list-group-item ">
                                            <span class="badge badge-plain ng-binding">235</span>
                                            <span class="badge badge-correct ng-binding">7%</span>
                                            Used Questions
                                        </li>
                                        <li class="list-group-item">

                                            <span class="badge badge-plain ng-binding">3132</span>
                                            <span class="badge badge-incorrect ng-binding">93%</span>
                                            Unused Questions
                                        </li>
                                    </ul>
                                </div>
                                <!-- end ngIf: !globalConstants.qbankIsSim -->

                                <!-- ngIf: globalConstants.qbankIsSim -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <div class="col-xs-12 col-sm-5 ">
                                <div ng-show="showQuestionStats" id="questionlistChart" class="">
                                    <div style="position: relative;">
                                        <iframe name="Drawing_Frame_39706" id="Drawing_Frame_39706" width="178"
                                                height="232" frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0"></iframe>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div ng-show="showQuestionStats" class="col-xs-12 col-sm-7 welcome-graph-vertical-align">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge badge-correct ng-binding">8%</span>
                                        Total Correct
                                    </li>
                                    <li class="list-group-item ">
                                        <span class="badge badge-incorrect ng-binding">85%</span>
                                        Total Incorrect
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-omitted ng-binding">8%</span>
                                        Total Omitted
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <!-- ngIf: globalConstants.qbankId != clientConstants.qbankIds.pa -->
                <div class="ibox float-e-margins ng-scope"
                     ng-if="globalConstants.qbankId != clientConstants.qbankIds.pa" style="margin-bottom:0px;">
                    <div class="ibox-title">
                        <h5>Percentile Rank </h5>

                        <div ibox-tools="" class="ng-scope">
                            <div class="ibox-tools dropdown" dropdown="">
                                <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>

                            </div>
                        </div>

                    </div>
                    <div class="ibox-content nopadding">
                        <div class="col-xs-12 col-lg-6">
                            <div id="percentileRankChart" style="height: 300px;margin-bottom:20px;">
                                <div style="position: relative;">
                                    <div dir="ltr" style="position: relative; width: 500px; height: 300px;">
                                        <div aria-label="A chart."
                                             style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                            <svg width="500" height="300" aria-label="A chart."
                                                 style="overflow: hidden;">
                                                <defs id="defs">
                                                    <clipPath id="_ABSTRACT_RENDERER_ID_348">
                                                        <rect x="20" y="40" width="460" height="260"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect x="0" y="0" width="500" height="300" stroke="none"
                                                      stroke-width="0" fill="#ffffff"></rect>
                                                <g>
                                                    <rect x="20" y="40" width="460" height="260" stroke="none"
                                                          stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g clip-path="url(https://www.uworld.com/ClientApp/V2/apps/Qbank/index.html#_ABSTRACT_RENDERER_ID_348)">
                                                        <g>
                                                            <rect x="22" y="40" width="1" height="260" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                            <rect x="114" y="40" width="1" height="260" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                            <rect x="206" y="40" width="1" height="260" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                            <rect x="298" y="40" width="1" height="260" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                            <rect x="389" y="40" width="1" height="260" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                            <rect x="20" y="299" width="460" height="1" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                            <rect x="20" y="234" width="460" height="1" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                            <rect x="20" y="170" width="460" height="1" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                            <rect x="20" y="105" width="460" height="1" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                            <rect x="20" y="40" width="460" height="1" stroke="none"
                                                                  stroke-width="0" fill="#f2f2f2"></rect>
                                                        </g>
                                                        <g>
                                                            <rect x="21.5" y="41" width="0.5" height="258" stroke="none"
                                                                  stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="25.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="30.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="35.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="39.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="44.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="48.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="53.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="58.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="62.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="67.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="71.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="76.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="81.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="85.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="90.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="94.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="99.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="103.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="108.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="113.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="117.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="122.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="126.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="131.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="136.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="140.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="145.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="149.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="154.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="159.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="163.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="168.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="172.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="177.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="182.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="186.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="191.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="195.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="200.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="204.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="209.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="214.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="218.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="223.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="227.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="232.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="237.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="241.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="246.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="250.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="255.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="260.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="264.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="269.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="273.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="278.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="283.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="287.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="292.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="296.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="301.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="305.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="310.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="315.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="319.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="324.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="328.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="333.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="338.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="342.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="347.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="351.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="356.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="361.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="365.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="370.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="374.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="379.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="383.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="388.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="393.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="397.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="402.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="406.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="411.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="416.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="420.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="425.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="429.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="434.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="439.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="443.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="448.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="452.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="457.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="462.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="466.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="471.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="475.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#69c869"></rect>
                                                            <rect x="22.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="26.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="31.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="36.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="40.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="45.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="49.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="54.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="59.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="63.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="68.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="72.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="77.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="82.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="86.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="91.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="95.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="100.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="104.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="109.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="114.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="118.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="123.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="127.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="132.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="137.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="141.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="146.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="150.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="155.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="160.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="164.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="169.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="173.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="178.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="183.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="187.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="192.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="196.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="201.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="205.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="210.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="215.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="219.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="224.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="228.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="233.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="238.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="242.5" y="41" width="0.5" height="258"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="247.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="251.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="256.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="261.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="265.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="270.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="274.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="279.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="284.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="288.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="293.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="297.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="302.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="306.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="311.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="316.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="320.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="325.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="329.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="334.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="339.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="343.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="348.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="352.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="357.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="362.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="366.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="371.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="375.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="380.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="384.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="389.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="394.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="398.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="403.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="407.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="412.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="417.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="421.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="426.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="430.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="435.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="440.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="444.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="449.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="453.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="458.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="463.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="467.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="472.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                            <rect x="476.5" y="299" width="0.5" height="0.5"
                                                                  stroke="none" stroke-width="0" fill="#f05a5b"></rect>
                                                        </g>
                                                        <g>
                                                            <rect x="22" y="40" width="1" height="260" stroke="none"
                                                                  stroke-width="0" fill="#ffffff"></rect>
                                                            <rect x="20" y="299" width="460" height="1" stroke="none"
                                                                  stroke-width="0" fill="#333333"></rect>
                                                        </g>
                                                        <g>
                                                            <path
                                                                d="M22.795,299.5L27.384999999999998,299.11923115L31.975,298.0075384L36.565,296.21014315L41.155,293.7713344L45.745,290.73446875L50.335,287.1419704L54.925,283.03533115L59.515,278.4551104L64.10499999999999,273.44093515L68.695,268.0315L73.285,262.26456715L77.875,256.1769664L82.465,249.80459515L87.05499999999999,243.18241840000002L91.645,236.34446875000003L96.235,229.3238464L100.825,222.15271915L105.41499999999999,214.86232239999998L110.005,207.48295915L114.595,200.04399999999998L119.185,192.57388315000003L123.77499999999999,185.1001144L128.365,177.64926715000001L132.95499999999998,170.2469824L137.54500000000002,162.91796875L142.135,155.68600240000004L146.725,148.57392715000003L151.315,141.6036544L155.905,134.79616315L160.495,128.17150000000004L165.085,121.74877915000008L169.67499999999998,115.54618240000002L174.265,109.58095915000001L178.855,103.86942640000001L183.445,98.42696874999999L188.035,93.2680384L192.625,88.40615514999996L197.215,83.85390640000003L201.805,79.62294715000002L206.39499999999998,75.72399999999999L210.98499999999999,72.16685514999998L215.575,68.96037039999999L220.165,66.11247114999995L224.755,63.63015039999996L229.345,61.51946874999996L233.935,59.78555439999997L238.525,58.432603150000006L243.11499999999998,57.4638784L247.70499999999998,56.88171115L252.295,56.6875L256.885,56.88171115L261.475,57.46387840000003L266.065,58.432603150000006L270.655,59.785554400000024L275.245,61.519468750000044L279.835,63.63015040000002L284.425,66.11247114999995L289.015,68.96037039999999L293.605,72.16685514999998L298.195,75.72399999999999L302.78499999999997,79.62294715000002L307.375,83.85390640000003L311.965,88.40615514999999L316.555,93.26803840000002L321.145,98.42696875000004L325.735,103.86942640000001L330.325,109.58095915000001L334.91499999999996,115.54618240000002L339.505,121.74877914999996L344.09499999999997,128.1715L348.685,134.79616314999996L353.275,141.6036544L357.865,148.57392715000003L362.455,155.68600239999998L367.045,162.91796875L371.635,170.24698240000004L376.22499999999997,177.64926715000004L380.815,185.1001144L385.405,192.57388315000003L389.995,200.04400000000004L394.585,207.48295915000006L399.175,214.86232239999998L403.765,222.15271915L408.35499999999996,229.32384639999998L412.945,236.34446875L417.53499999999997,243.18241840000002L422.125,249.80459515L426.715,256.1769664L431.305,262.26456715L435.895,268.0315L440.485,273.44093515000003L445.075,278.4551104L449.66499999999996,283.03533115000005L454.255,287.1419704L458.84499999999997,290.73446874999996L463.435,293.7713344L468.025,296.21014315L472.615,298.0075384L477.205,299.11923115"
                                                                stroke="#689bf7" stroke-width="2" fill-opacity="1"
                                                                fill="none"></path>
                                                        </g>
                                                        <g>
                                                            <rect x="21" y="41" width="1" height="12" stroke="none"
                                                                  stroke-width="0" fill="#999999"></rect>
                                                            <rect x="242" y="41" width="1" height="12" stroke="none"
                                                                  stroke-width="0" fill="#999999"></rect>
                                                        </g>
                                                    </g>
                                                    <g></g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <rect x="9.5" y="52.5" width="24" height="16"
                                                                      stroke="none" stroke-width="0" fill-opacity="0"
                                                                      fill="#ffffff"></rect>
                                                                <g>
                                                                    <text text-anchor="middle" x="21" y="64.9"
                                                                          font-family="Arial" font-size="14"
                                                                          font-style="italic" stroke="#ffffff"
                                                                          stroke-width="3" fill="#69c869"
                                                                          aria-hidden="true">0th
                                                                    </text>
                                                                    <text text-anchor="middle" x="21" y="64.9"
                                                                          font-family="Arial" font-size="14"
                                                                          font-style="italic" stroke="none"
                                                                          stroke-width="0" fill="#69c869">0th
                                                                    </text>
                                                                </g>
                                                                <rect x="11.5" y="53" width="19" height="14"
                                                                      stroke="none" stroke-width="0" fill-opacity="0"
                                                                      fill="#ffffff"></rect>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <rect x="226.5" y="52.5" width="32" height="16"
                                                                      stroke="none" stroke-width="0" fill-opacity="0"
                                                                      fill="#ffffff"></rect>
                                                                <g>
                                                                    <text text-anchor="middle" x="242" y="64.9"
                                                                          font-family="Arial" font-size="14"
                                                                          font-style="italic" stroke="#ffffff"
                                                                          stroke-width="3" fill="#f05a5b"
                                                                          aria-hidden="true">48th
                                                                    </text>
                                                                    <text text-anchor="middle" x="242" y="64.9"
                                                                          font-family="Arial" font-size="14"
                                                                          font-style="italic" stroke="none"
                                                                          stroke-width="0" fill="#f05a5b">48th
                                                                    </text>
                                                                </g>
                                                                <rect x="228.5" y="53" width="27" height="14"
                                                                      stroke="none" stroke-width="0" fill-opacity="0"
                                                                      fill="#ffffff"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g></g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div aria-hidden="true"
                                         style="display: none; position: absolute; top: 310px; left: 510px; white-space: nowrap; font-family: Arial; font-size: 14px; font-style: italic;">
                                        48th
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6 welcome-percentile-graph-vertical-align">
                            <ul class="list-group col-xs-12 col-sm-6 col-lg-7">
                                <li class="list-group-item">
                                    <span class="badge badge-plain ng-binding">8%</span>

                                    <span style="background-color: #69c869;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Your
                                    Score&nbsp;<i class="ng-binding">(0<sup class="ng-binding">th</sup> rank)</i>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-plain ng-binding">66%</span>

                                    <span style="background-color: #f05a5b">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Median
                                    Score&nbsp;<i class="ng-binding">(48<sup class="ng-binding">th</sup> rank)</i>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-plain ng-binding">14</span>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Average Time Spent (sec)
                                </li>
                            </ul>
                            <!-- ngIf: !globalConstants.qbankIsSim -->
                            <ul ng-if="!globalConstants.qbankIsSim"
                                class="list-group col-xs-12 col-sm-6 col-lg-5 ng-scope">
                                <li class="list-group-item">
                                    <span class="badge badge-plain ng-binding">16</span>
                                    Tests Created
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-plain ng-binding">4</span>
                                    Tests Completed
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-plain ng-binding">12</span>
                                    Suspended Tests
                                </li>

                            </ul><!-- end ngIf: !globalConstants.qbankIsSim -->

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div><!-- end ngIf: globalConstants.qbankId != clientConstants.qbankIds.pa -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('js')
    <script type="text/javascript">
        var _loaded = false;

        function CHART_loaded() {
            _loaded = true;
        }
    </script>
@stop
