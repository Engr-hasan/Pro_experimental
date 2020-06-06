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

                <br><br>

                <h4>Percentile Rank</h4>
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <canvas id="line-chart" width="800" height="450"></canvas>
                    </div>
                <div class="col-md-3">
                    <br><br><br>
                     <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>
                            <span>Correct</span>
                            <div class="float-right">
                                <span class="badge bg-dark">34%</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span>Incorrect</span>
                            <div class="float-right">
                                <span class="badge bg-dark">34%</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span>Omitted</span>
                            <div class="float-right">
                                <span class="badge bg-dark">34%</span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <br><br><br>
                     <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>
                            <span>Correct</span>
                            <div class="float-right">
                                <span class="badge bg-dark">34%</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span>Incorrect</span>
                            <div class="float-right">
                                <span class="badge bg-dark">34%</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span>Omitted</span>
                            <div class="float-right">
                                <span class="badge bg-dark">34%</span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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
    <script type="text/javascript" src="https://cdnjs.com/libraries/Chart.js"></script>
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




        //line chart
            new Chart(document.getElementById("line-chart"), {
              type: 'line',
              data: {
                labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                datasets: [{ 
                    data: [4486,5114,6706,7067,8807,5011,4334,4221,7283,2178],
                    label: "Africa",
                    borderColor: "#3e95cd",
                    fill: false
                  }/*, { 
                    data: [282,350,411,502,635,809,947,1402,3700,5267],
                    label: "Asia",
                    borderColor: "#8e5ea2",
                    fill: false
                  }, { 
                    data: [168,170,178,190,203,276,408,547,675,734],
                    label: "Europe",
                    borderColor: "#3cba9f",
                    fill: false
                  }, { 
                    data: [40,20,10,16,24,38,74,167,508,784],
                    label: "Latin America",
                    borderColor: "#e8c3b9",
                    fill: false
                  }, { 
                    data: [6,3,2,2,7,26,82,172,312,433],
                    label: "North America",
                    borderColor: "#c45850",
                    fill: false
                  }*/
                ]
              },
              options: {
                title: {
                  display: true,
                  // text: 'World population per region (in millions)'
                }
              }
            });
    </script>
@stop
