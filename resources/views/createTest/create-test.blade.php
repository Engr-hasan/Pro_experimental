@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <div class="pull-left introTestModeStep1">
                                    <h5>Test Mode</h5>
                                    <img id="testmodeTooltip" data-toggle="popover" data-container="body" data-placement="right" src="/assets/media/images/info.png" width="20" style="float: left; margin-left: 5px; margin-top: -3px; cursor: pointer;" data-original-title="" title="">
                                    <div id="testmodeTooltipDescription" style="display: none;">
                                        <div class="feed-activity-list" style="margin-top: 20px;">
                                            <table class="table" style="margin-bottom: 5px;">
                                                <tbody><tr>
                                                    <td>
                                                        <div>
                                                            <div class="col-lg-2 col-sm-3">
                                                                <span style="font-size: 15px">Tutor&nbsp;</span>
                                                            </div>
                                                            <div class="col-lg-10 col-sm-9">
                                                                <span style="color: #818181">Shows the correct answer and explanation after you answer the question.</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col-lg-2 col-sm-3"></div>
                                                            <div class="col-lg-10 col-sm-9">
                                                                <img src="img/untimed-tutor.jpg" height="45" style="margin-left: -11px;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <div class="col-lg-2 col-sm-3">
                                                                <span style="font-size: 15px">Untimed&nbsp;</span>
                                                            </div>
                                                            <div class="col-lg-10 col-sm-9">
                                                                <span style="color: #818181">Imposes no time limit on the test.</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col-lg-2 col-sm-3"></div>
                                                            <div class="col-lg-10 col-sm-9">
                                                                <img src="img/untimed.jpg" height="45" style="margin-left: -11px;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <div class="col-lg-2 col-sm-3">
                                                                <span style="font-size: 15px">Timed&nbsp;</span>
                                                            </div>
                                                            <div class="col-lg-10 col-sm-9">
                                                                <span style="color: #818181">Imposes a time limit on the test.</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col-lg-2 col-sm-3"></div>
                                                            <div class="col-lg-10 col-sm-9">
                                                                <img src="img/timed.jpg" height="45" style="margin-left: -11px;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <div class="col-lg-2 col-sm-3">
                                                                <span style="font-size: 15px">Timed&nbsp;Tutor&nbsp;</span>
                                                            </div>
                                                            <div class="col-lg-10 col-sm-9">
                                                                <span style="color: #818181">Combines timed and tutor mode functions.</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col-lg-2 col-sm-3"></div>
                                                            <div class="col-lg-10 col-sm-9">
                                                                <img src="img/timed-tutor.jpg" height="45" style="margin-left: -11px;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                            </tbody></table>

                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right ng-scope" ibox-tools=""><div class="ibox-tools dropdown" dropdown="">
    <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>
    
</div></div>

                            </div>
                            <div class="ibox-content form-inline">
                                <!-- <div class="radio">
                            <label class="radio-inline">
                                <input icheck key="1" type="radio" name="testModeRadio3" value="2" ng-model="createTestOptions.testMode">&nbsp;&nbsp;Tutor&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        </div>
                        <div class="radio">
                            <label class="radio-inline">
                                <input icheck key="1" type="radio" name="testModeRadio2" value="1" ng-model="createTestOptions.testMode">&nbsp;&nbsp;Untimed&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        </div>
                        <div class="radio">
                            <label class="radio-inline">
                                <input icheck key="1" type="radio" name="testModeRadio1" value="0" ng-model="createTestOptions.testMode">&nbsp;&nbsp;Timed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        </div>
                        <div class="radio">
                            <label class="radio-inline">
                                <input icheck key="1" type="radio" name="testModeRadio4" value="4" ng-model="createTestOptions.testMode">&nbsp;&nbsp;Timed Tutor&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        </div>
                    </div>-->
                                <div>
                                    <div class="pull-left create-test-option">
                                        <div class="pull-left">
                                            <label class="switch" style="margin-bottom: 0px;">
                                                <input type="checkbox" name="checkboxTutor" ng-model="createTestOptions.tutorTestMode" ng-checked="createTestOptions.tutorTestMode" class="ng-pristine ng-untouched ng-valid" checked="checked">
                                                <div class="slider round"></div>
                                            </label>
                                        </div>
                                        <div class="pull-left questionModeTitle">
                                            <span>Tutor</span>
                                        </div>
                                    </div>
                                    <div class="pull-left create-test-option">
                                        <div class="pull-left">
                                            <label class="switch" style="margin-bottom: 0px;">
                                                <input type="checkbox" name="checkboxTimed" ng-model="createTestOptions.timedTestMode" ng-checked="createTestOptions.timedTestMode" class="ng-pristine ng-untouched ng-valid">
                                                <div class="slider round"></div>
                                            </label>
                                        </div>
                                        <div class="pull-left questionModeTitle">
                                            <span>Timed</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <div class="pull-left introQuestionModeStep2">
                                    <h5>Question Mode</h5>
                                    <img id="questionmodeTooltip" data-toggle="popover" data-container="body" data-placement="right" src="/assets/media/images/info.png" width="20" style="float: left; margin-left: 5px; margin-top: -3px; cursor: pointer;" data-original-title="" title="">

                                    <div id="questionmodeTooltipDescription" style="display: none">
                                        <div class="form-group ToolTipPadding">
                                            <div class="feed-activity-list" style="margin-top: 20px;">
                                                <table class="table">
                                                    <tbody><tr>
                                                        <td>
                                                            <span style="font-size: 15px">Unused</span>
                                                        </td>
                                                        <td><span style="color: #818181">Selects questions from a set of new/unseen questions.</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span style="font-size: 15px">Incorrect</span>
                                                        </td>
                                                        <td><span style="color: #818181">Selects questions that were answered incorrectly.</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span style="font-size: 15px">Marked</span>
                                                        </td>
                                                        <td><span style="color: #818181">Selects questions that were previously marked/flagged.</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span style="font-size: 15px">All</span>
                                                        </td>
                                                        <td><span style="color: #818181">Selects questions from a set of previously seen and unseen questions.</span></td>
                                                    </tr>
                                                </tbody></table>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="pull-right ng-scope" ibox-tools=""><div class="ibox-tools dropdown" dropdown="">
    <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>
    
</div></div>
                            </div>
                            <div class="ibox-content form-inline">
                                <div class="radio create-test-option">
                                    <label class="radio-inline">
                                        <div class="iradio_square-blue checked" style="position: relative;"><input icheck="" key="1" type="radio" ng-change="questionModeChange()" name="questionMode" value="1" ng-model="createTestOptions.questionMode" class="ng-pristine ng-untouched ng-valid" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Unused
                                    </label>&nbsp;<span class="badge label-plain ng-binding">3125</span>&nbsp;&nbsp;
                                </div>
                                <div class="radio create-test-option">
                                    <label class="radio-inline">
                                        <div class="iradio_square-blue" style="position: relative;"><input icheck="" key="1" type="radio" ng-change="questionModeChange()" name="questionMode" value="2" ng-model="createTestOptions.questionMode" class="ng-pristine ng-untouched ng-valid" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Incorrect
                                    </label>&nbsp;<span class="badge label-plain ng-binding">106</span>&nbsp;&nbsp;
                                </div>
                                <div class="radio create-test-option">
                                    <label class="radio-inline">
                                        <div class="iradio_square-blue" style="position: relative;"><input icheck="" key="1" type="radio" ng-change="questionModeChange()" name="questionMode" value="3" ng-model="createTestOptions.questionMode" class="ng-pristine ng-untouched ng-valid" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Marked
                                    </label>&nbsp;<span class="badge label-plain ng-binding">1</span>&nbsp;&nbsp;
                                </div>
                                <div class="radio create-test-option">
                                    <label class="radio-inline">
                                        <div class="iradio_square-blue" style="position: relative;"><input icheck="" key="1" type="radio" ng-change="questionModeChange()" name="questionMode" value="0" ng-model="createTestOptions.questionMode" class="ng-pristine ng-untouched ng-valid" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;All
                                    </label>&nbsp;<span class="badge label-plain ng-binding">3360</span>&nbsp;&nbsp;
                                </div>
                                <div class="radio create-test-option">
                                    <label class="radio-inline">
                                        <div class="iradio_square-blue" style="position: relative;"><input icheck="" key="1" type="radio" name="questionMode" value="4" ng-model="createTestOptions.questionMode" class="ng-pristine ng-untouched ng-valid" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Custom&nbsp;&nbsp;
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div ng-hide="createTestOptions.questionMode == questionModeTypes.custom">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title" style="height: 55px;">
                                    <div class="pull-left header introSubjectsStep3">
                                        <label class="">
                                            <div class="icheckbox_square-blue" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="selectAllSubjectsChange()" ng-model="selectAllSubjects" class="ng-pristine ng-untouched ng-valid" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Subjects
                                        </label>

                                    </div>
                                    <div class="pull-right ng-scope" ibox-tools=""><div class="ibox-tools dropdown" dropdown="">
    <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>
    
</div></div>
                                </div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-nopad col-sm-nopad">
                                            <!-- ngRepeat: s in createTestOptions.superDivisionsForDisplay.slice(0, superDivisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.superDivisionsForDisplay.slice(0, superDivisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding">
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-disabled="!s.isEnabled" ng-change="superDivisionChange()" ng-model="s.isChecked" required="" class="ng-pristine ng-untouched ng-invalid ng-invalid-required" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Medicine&nbsp;<span class="badge ng-binding label-plain" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">1229</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.superDivisionsForDisplay.slice(0, superDivisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.superDivisionsForDisplay.slice(0, superDivisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding">
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-disabled="!s.isEnabled" ng-change="superDivisionChange()" ng-model="s.isChecked" required="" class="ng-pristine ng-untouched ng-invalid ng-invalid-required" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Obstetrics &amp; Gynecology&nbsp;<span class="badge ng-binding label-plain" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">473</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.superDivisionsForDisplay.slice(0, superDivisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.superDivisionsForDisplay.slice(0, superDivisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding">
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-disabled="!s.isEnabled" ng-change="superDivisionChange()" ng-model="s.isChecked" required="" class="ng-pristine ng-untouched ng-invalid ng-invalid-required" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Pediatrics&nbsp;<span class="badge ng-binding label-plain" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">569</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.superDivisionsForDisplay.slice(0, superDivisionsToRenderinColumn) -->
                                        </div>
                                        <div class="col-sm-6 col-xs-nopad col-sm-nopad">
                                            <!-- ngRepeat: s in createTestOptions.superDivisionsForDisplay.slice(superDivisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.superDivisionsForDisplay.slice(superDivisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding">
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-disabled="!s.isEnabled" ng-change="superDivisionChange()" ng-model="s.isChecked" required="" class="ng-pristine ng-untouched ng-invalid ng-invalid-required" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Psychiatry&nbsp;<span class="badge ng-binding label-plain" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">299</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.superDivisionsForDisplay.slice(superDivisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.superDivisionsForDisplay.slice(superDivisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding">
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-disabled="!s.isEnabled" ng-change="superDivisionChange()" ng-model="s.isChecked" required="" class="ng-pristine ng-untouched ng-invalid ng-invalid-required" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Surgery&nbsp;<span class="badge ng-binding label-plain" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">555</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.superDivisionsForDisplay.slice(superDivisionsToRenderinColumn) -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--hasSystems-->
                            <div class="ibox float-e-margins" ng-show="hasSystems">
                                <div class="ibox-title" style="height: 55px;">
                                    <div class="pull-left header introQuestionsStep4">
                                        <label>
                                            <div class="icheckbox_square-blue" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="selectAllSystemsChange()" ng-model="selectAllSystems" class="ng-pristine ng-untouched ng-valid" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Systems
                                        </label>
                                    </div>
                                    <div class="pull-right ng-scope" ibox-tools=""><div class="ibox-tools dropdown" dropdown="">
    <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>
    
</div></div>
                                </div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-nopad col-sm-nopad">
                                            <!-- ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Allergy &amp; Immunology&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Biostatistics &amp; Epidemiology&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Cardiovascular System&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Dermatology&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Ear, Nose &amp; Throat (ENT)&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Endocrine, Diabetes &amp; Metabolism&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Female Reproductive System &amp; Breast&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Gastrointestinal &amp; Nutrition&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;General Principles&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Hematology &amp; Oncology&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Infectious Diseases&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(0, divisionsToRenderinColumn) -->
                                        </div>
                                        <div class="col-sm-6 col-xs-nopad col-sm-nopad">
                                            <!-- ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Male Reproductive System&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Miscellaneous (Multisystem)&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Nervous System&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Ophthalmology&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Poisoning &amp; Environmental Exposure&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Pregnancy, Childbirth &amp; Puerperium&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Psychiatric/Behavioral &amp; Substance Abuse&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Pulmonary &amp; Critical Care&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Renal, Urinary Systems &amp; Electrolytes&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Rheumatology/Orthopedics &amp; Sports&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) --><div class="col-xs-nopad col-sm-nopad ng-scope" ng-repeat="s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn)">
                                                <div class="checkbox">
                                                    <label ng-class="{disablecolor: !s.isEnabled}" class="ng-binding disablecolor">
                                                        <div class="icheckbox_square-blue disabled" style="position: relative;"><input icheck="" key="1" type="checkbox" ng-change="divisionChange()" ng-disabled="!s.isEnabled" ng-model="s.isChecked" class="ng-pristine ng-untouched ng-valid" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Social Sciences (Ethics/Legal/Professional)&nbsp;<span class="badge ng-binding label-plain-disabled" ng-class="{'label-plain-disabled': !s.isEnabled,'label-plain' : s.isEnabled}">0</span>
                                                    </label>
                                                </div>
                                            </div><!-- end ngRepeat: s in createTestOptions.divisionsForDisplay.slice(divisionsToRenderinColumn) -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="5" class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>No. of Questions</h5>
                                    <div ibox-tools="" class="ng-scope"><div class="ibox-tools dropdown" dropdown="">
    <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>
    
</div></div>
                                </div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="form-group" ng-class="{ 'has-error' : ctForm.questionCount.$invalid}">
                                            <div>
                                                <div class="pull-left introQuestionsCountStep5" style="padding-left: 10px;">
                                                    <input type="text" name="questionCount" class="form-control createTestQuestionBox ng-pristine ng-untouched ng-valid ng-valid-maxlength ng-valid-integer" style="width: 50px" ng-model="createTestOptions.questionCount" min="1" max="0" maxlength="2" numbersonly="" integer="">
                                                </div>
                                                <div class="pull-left" style="padding-left: 10px; margin-top: 10px;">Max allowed per block <span class="badge badge-plain ng-binding">0</span></div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div>
                                                <p ng-show="ctForm.questionCount.$invalid" class="control-label ng-binding ng-hide">Please enter a number between 1 and 0</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- ngIf: createTestOptions.questionMode == questionModeTypes.custom -->
                        <div class="ibox float-e-margins">

                            <input type="submit" ng-disabled="!generateTestComplete" class="btn btn-primary introGenerateTestStep6" value="Generate Test" ng-click="submitData()">
                            <img ng-show="!generateTestComplete" src="img/ajax-loader.gif" style="height: 40px" class="ng-hide">
                        </div>
                    </div>
</div>
<!-- /.content-wrapper -->
@endsection
