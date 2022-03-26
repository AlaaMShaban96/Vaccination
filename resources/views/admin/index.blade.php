@extends('admin/master')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">

      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
       <div class="card-header">
         <h4> المراكز الصحية <a href="{{url('/users')}}" class="badge badge-danger" id="notification-child">{{$users->count()}}</a></h4>
       </div>

      </div>

    </div>
    <div class="col">

      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header">
        <h4>
           طلبات الجرعات  <a href="{{url('admin/requsts')}}" class="badge badge-danger">{{$orders->count()}}</a>
        </h4>
      </div>
      </div>

    </div>
    <div class="col">

    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header">
      <h4>التطعيمات <a href="{{url('admin/vaccinations')}}" class="badge badge-danger">{{$vaccinations->count()}}</a></h4>
    </div>
    </div>

    </div>

  </div>
</div>

<div class="row">
    <div class="col-4">
        <h5>المراكز الصحية</h5>
        <h6>اكتر المراكز طلب لجرعات خلال شهر ({{date('m')}}|{{date('M')}})</h6>
        <ul class="list-group">
            @foreach ($top5User as $user)
                <li class="list-group-item">{{$user->name}} <span class="badge badge-success"> {{$user->orders_count}}</span></li>
            @endforeach
          </ul>
    </div>
    <div class="col-8">
        <h6> كمية التطعيمات خلال السنة {{date('Y')}}</h6>

        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    </div>
</div>



{{-- <img src="image/t.jpg" width="100%"> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>
    var ordersStatus = @json($ordersStatus);
    var xValues = [];
    var yValues = [];
    var max=0;

    for (var key in ordersStatus) {
        var value = ordersStatus[key];
        max=max<value?value:max;
        yValues.push(value);
        xValues.push(key);
    }
    console.log(xValues,yValues);
    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 1, max:max}}],
        },
        // title: {
        //     display: true,
        //     text: "كمية التطعيمات خلال السنة"
        // }
      }
    });
    </script>
@endsection
