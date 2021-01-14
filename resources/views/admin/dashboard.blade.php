@extends('admin._layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
        <div class="inner">
            <h3>{{$admin_count}}</h3>

            <p>Administrators</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
            <!-- <i class="ion ion-bag"></i> -->
        </div>
        <a href="{{url('admin/admins')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
        <div class="inner">
            <h3>{{$user_count}}</h3>

            <p>User Registrations</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{url('admin/users')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
        <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
        <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> -->
</div>
<div class="row">
<div class="col-xs-12">
    <!-- DONUT CHART -->
    <div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Quality Statistics</h3>

    </div>
    <div class="box-body">
        <canvas id="pieChart" style="height:250px"></canvas>
    </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('adminlte/bower_components/chart.js/Chart.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
   
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      
      {
        value    : {{$pass}},
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Pass'
      },
      {
        value    : {{$alter}},
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Alter'
      },
      {
        value    : {{$washing}},
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : 'Washing'
      },
      {
        value    : {{$sewing}},
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Sewing'
      },
      {
        value    : {{$finishing}},
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Finishing'
      },
      {
        value    : {{$reject}},
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Reject'
      },
      {
        value    : {{$other}},
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : 'Other'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    
  })
</script>
@endsection