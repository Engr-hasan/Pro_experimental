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
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <canvas id="pieChart1"></canvas>
                            </div>
                            <div class="col-md-6 col-lg-6">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <canvas id="pieChart2"></canvas>
                            </div>
                            <div class="col-md-6 col-lg-6">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        //pie
        var ctxP = document.getElementById("pieChart1").getContext('2d');
        var ctzp = document.getElementById("pieChart2").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
                datasets: [{
                    data: [300, 50, 100, 40, 120],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'right',
                    labels: {
                        padding: 0,
                        boxWidth: 20
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = (value * 100 / sum).toFixed(2) + "%";
                            return percentage;
                        },
                        color: 'white',
                        labels: {
                            title: {
                                font: {
                                    size: '20'
                                }
                            }
                        }
                    }
                }
            }
        });
        var myPieChart = new Chart(ctzp, {
            type: 'pie',
            data: {
                labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
                datasets: [{
                    data: [300, 50, 100, 40, 120],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'right',
                    labels: {
                        padding: 0,
                        boxWidth: 20
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = (value * 100 / sum).toFixed(2) + "%";
                            return percentage;
                        },
                        color: 'white',
                        labels: {
                            title: {
                                font: {
                                    size: '20'
                                }
                            }
                        }
                    }
                }
            }
        });
    </script>
@stop
