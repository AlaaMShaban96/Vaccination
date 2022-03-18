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
					<button class="dbox__action__btn">تحميل</button>
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
					<button class="dbox__action__btn">تحميل</button>
				</div>				
			</div>
		</div>
	</div>
    <div class="row">
		<div class="col-md-4">
			<div class="dbox dbox--color-2">
				<div class="dbox__icon">
                    <i style='font-size:24px' class='fas'>&#xf01c;</i> 
                </div>
				<div class="dbox__body">
					<span class="dbox__count">الطلبات المستلمة</span>
					<span class="dbox__title">تحميل تقرير بالطلبات المستلمة كمن مدبر النظام</span>
				</div>
				
				<div class="dbox__action">
					<button class="dbox__action__btn">تحميل</button>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-3">
				<div class="dbox__icon">
                    <i style='font-size:24px' class='fas'>&#xf77c;</i>
                </div>
				<div class="dbox__body">
					<span class="dbox__count">الأطفال</span>
					<span class="dbox__title">تحميل تقرير بالأطفال في المركز </span>
				</div>
				
				<div class="dbox__action">
					<button class="dbox__action__btn">تحميل</button>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-1">
				<div class="dbox__icon">
					<i class="fas fa-syringe"></i>
				</div>
				<div class="dbox__body">
                    
                    <span class="dbox__count">   التطعيمات</span>
					<span class="dbox__title">تحميل تقرير بكافة التطعيمات المتوفرة</span>
				</div>
				
				<div class="dbox__action">
					<button class="dbox__action__btn">تحميل</button>
				</div>				
			</div>
		</div>
	</div>

</div>



 
@endsection
@section('script')
<!-- Resources -->


    <script src="{{asset('js/vaccinationCenters/reports.js')}}"></script>
@endsection