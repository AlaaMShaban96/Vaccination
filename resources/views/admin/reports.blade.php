@extends('admin/master')
@section('head')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->
@endsection
@section('content')

<div class="container" >
	<div class="row">
		<div class="col-md-4">
			<div class="dbox dbox--color-1">
				<div class="dbox__icon">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">المراكز الصحية</span>
					<span class="dbox__title">تحميل تقرير بالمراكز الصحية بالنظام</span>
				</div>
				
				<div class="dbox__action">
					<button class="dbox__action__btn">تحميل</button>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-2">
				<div class="dbox__icon">
					<i class="far fa-user-circle"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">الأطفال</span>
					<span class="dbox__title">تحميل تقرير بالأطفال في مركز معين</span>
				</div>
				
				<div class="dbox__action">
					<button class="dbox__action__btn">More Info</button>
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
{{-- </div>


<div class="container"> --}}
	<div class="row">
		<div class="col-md-4">
			<div class="dbox dbox--color-1">
				<div class="dbox__icon">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">المراكز الصحية</span>
					<span class="dbox__title">تحميل تقرير بالمراكز الصحية بالنظام</span>
				</div>
				
				<div class="dbox__action">
					<button class="dbox__action__btn">تحميل</button>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-2">
				<div class="dbox__icon">
					<i class="far fa-user-circle"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">الأطفال</span>
					<span class="dbox__title">تحميل تقرير بالأطفال في مركز معين</span>
				</div>
				
				<div class="dbox__action">
					<button class="dbox__action__btn">More Info</button>
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

@endsection