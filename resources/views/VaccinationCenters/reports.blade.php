@extends('VaccinationCenters/master')

@section('head')
<link rel="stylesheet" href="{{ asset("css/user/report.css")}}">
@endsection
@section('body')
<div class="container">

    <div class="row">
		<div class="col-md-4">
			<div class="dbox dbox--color-1">
				<div class="dbox__icon">
                    <i style='font-size:24px' class='far'>&#xf0e0;</i>
                </div>
				<div class="dbox__body">
					<span class="dbox__count">الطلبات المرسلة</span>
					<span class="dbox__title">تحميل تقرير بالطلبات المرسل إلي النظام</span>
				</div>

				<div class="dbox__action">
                <a href="{{ url('/report/orders-PDF')}}" class="dbox__action__btn">تحميل</a >
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-2">
				<div class="dbox__icon">
                    <i style='font-size:24px' class='fas'>&#xf77c;</i>
                </div>
				<div class="dbox__body">
					<span class="dbox__count">الأطفال</span>
					<span class="dbox__title">تحميل تقرير بالأطفال في المركز </span>
				</div>

				<div class="dbox__action">
                    <a href="{{ url('/report/child-PDF')}}" class="dbox__action__btn">تحميل</a >
                    </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-3">
				<div class="dbox__icon">
					<i class="fas fa-syringe"></i>
				</div>
				<div class="dbox__body">

                    <span class="dbox__count">   التطعيمات</span>
					<span class="dbox__title">تحميل تقرير بكافة التطعيمات المتوفرة</span>
				</div>

				<div class="dbox__action">
                    <a href="{{ url('/report/avalibel-vaccin-PDF')}}" class="dbox__action__btn">تحميل</a >
                    </div>
			</div>
		</div>
	</div>
    <div class="row">
		{{-- <div class="col-md-4"> --}}
			{{-- <div class="dbox dbox--color-2"> --}}
				<div id="myChart" style="width:100%; max-width:600px; height:300px;">
                </div>
			{{-- </div> --}}
		{{-- </div> --}}
	</div>

</div>




@endsection
@section('script')
<!-- Resources -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Contry', 'Mhl'],
      ['قيد الارسال',{{ $status[1] ?? 0}}],
      ['قيد الاستلام',{{ $status[2] ?? 0}}],
      ['تم الاستلام',{{ $status[3] ?? 0}}],

    ]);

    var options = {
      title:'احصائيات الطلبات'
    };

    var chart = new google.visualization.PieChart(document.getElementById('myChart'));
      chart.draw(data, options);
    }
    </script>

    <script src="{{asset('js/vaccinationCenters/reports.js')}}"></script>
@endsection
