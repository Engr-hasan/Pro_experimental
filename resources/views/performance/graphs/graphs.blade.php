@extends('layouts.dashboard')
@section('css')
  
@stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="card">
      <div class="card-header">
        <h5>
            <strong>Performance by Test</strong>
            <small>
                <span style="background-color: rgba(26,179,148,1); margin-left: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Your Score&nbsp;&nbsp;
                    <span style="background-color: rgba(220,220,220,1)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Average Score&nbsp;&nbsp;
                <span style="background-color: rgba(245,151,0,1)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Cumulative Performance
            </small>
        </h5>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <canvas id="line-chart" width="800" height="300"></canvas>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix"></div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5>
            <strong>Performance by Date</strong>
            <small>
                <span style="background-color: rgba(26,179,148,1); margin-left: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Your Score&nbsp;&nbsp;
                    <span style="background-color: rgba(220,220,220,1)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Average Score&nbsp;&nbsp;
                <span style="background-color: rgba(245,151,0,1)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Cumulative Performance
            </small>
        </h5>
      </div>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
@section('js')
    <!-- jQuery -->
    <script type="text/javascript" src="https://cdnjs.com/libraries/Chart.js"></script>
    <script type="text/javascript">
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
