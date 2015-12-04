@extends('admin.layout.layout')
		
@section('title', 'Page Title')

@section('content')

     <script type="text/javascript" src="{{asset('assets/dist/js/pages/dashboard2.js')}}"></script> 

     <script type="text/javascript">
      $(function () {

                //-------------
                //- BAR CHART -
                //-------------
                var barChartCanvas = $("#barChart").get(0).getContext("2d");
                var barChart = new Chart(barChartCanvas);

                    // var barChartData = salesChartData;

                var barChartData = {
                labels: ["Day 1", "Day 2", "Day 3"],
                datasets: [
                  {
                    label: "Candidate 1",
                    fillColor: "rgb(210, 214, 222)",
                    strokeColor: "rgb(210, 214, 222)",
                    pointColor: "rgb(210, 214, 222)",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgb(220,220,220)",
                    data: [0, 0, 0]
                  },
                  {
                    label: "Candidate 2",
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [0, 0, 0]
                  },
                  {
                    label: "Candidate 3",
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [0, 0, 0]
                  }
                ]
              };

              barChartData.datasets[1].fillColor = "#00a65a";
              barChartData.datasets[1].strokeColor = "#00a65a";
              barChartData.datasets[1].pointColor = "#00a65a";
              var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: "rgba(0,0,0,.05)",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
              };

              barChartOptions.datasetFill = false;
              barChart.Bar(barChartData, barChartOptions);
      });
     </script>

		<section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Candidate</span>
                  <span class="info-box-number">{{$count}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-check-square-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Votes</span>
                  <span class="info-box-number">{{$count}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <?php 
            $agk12 = 160;
            $agk13 = 200;
            $agk14 = 280;
            $agk15 = 350;
            $voters = $agk15+$agk14+$agk13+$agk12; 
            ?>
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Voters</span>
                  <span class="info-box-number">{{$voters}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-user-times"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Golput</span>
                  <span class="info-box-number">{{ $voters-$count }}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Monthly Recap Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong>Vote</strong>
                      </p>
                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" class="hidden" style="height: 180px;"></canvas>
                      </div><!-- /.chart-responsive -->
                      <div class="chart-responsive">
                        <canvas id="pieChart" class="hidden" height="150"></canvas>
                      </div><!-- ./chart-responsive -->
                      <div class="chart">
                        <canvas id="barChart" style="height:200px"></canvas>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->



        </section><!-- /.content -->
@stop

        