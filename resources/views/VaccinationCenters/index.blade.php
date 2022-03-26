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
					<span class="dbox__count">الطلبات المرسلة  (<span >{{$orders->count()}}</span>)</span>
				</div>

				<div class="dbox__action">
                <a href="{{url('/receive')}}" class="dbox__action__btn">عرض</a >
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-2">
				<div class="dbox__icon">
                    <i style='font-size:24px' class='fas'>&#xf77c;</i>
                </div>
				<div class="dbox__body">
					<span class="dbox__count">الأطفال  (<span  id="notification-child">{{$children->count()}}</span>) </span>
				</div>

				<div class="dbox__action">
					<button class="dbox__action__btn" data-toggle="modal" data-target="#staticBackdrop">اضافة</button>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-3">
				<div class="dbox__icon">
          <i class="fas fa-syringe"></i>
				</div>
				<div class="dbox__body">

           <span class="dbox__count">التطعيمات (<span >{{auth()->user()->vaccinations()->count()}}</span>) </span>
				</div>

				<div class="dbox__action">
					<a href="{{url('/receive')}}" class="dbox__action__btn">عرض</a>
				</div>
			</div>
		</div>
  </div>
  <div class="row">
		<div class="col">
      <form id="getchilde" action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="number" class="form-control" id="childeId" placeholder="رقم الطفل" style="width: 30%;margin-right: 37%;margin-top: 2%;">
        <button type="button" class="btn btn-success" style="margin-right: 47%;height: 45px;width: 84px;margin-top: 1%;" id="search"> <i class="fas fa-search"></i> بحث</button>
      </form>
    </div>
  </div>
  {{-- <div class="row">
    <div class="col">

      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <a href="{{url('/infochildren')}}" class="badge badge-primary" >
         <div class="card-header">
            <h4>
                الاطفال<span class="badge badge-danger" id="notification-child"> {{$children->count()}}</span>
              </h4>
          </div>
        </a>
      </div>

    </div>
    <div class="col">

      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <a href="{{url('/receive')}}" class="badge badge-secondary">
             <div class="card-header">
               <h4>
                  طلبات الاستلام <span class="badge badge-danger"> {{$orders->where('status','=',2)->count()}}</span>
               </h4>
             </div>
          </a>
      </div>

    </div>
    <div class="col">

    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
      <a href="{{url('/my-vaccination-available')}}" class="badge badge-success">
        <div class="card-header">
          <h4 >التطعيمات <span class="badge badge-danger"> {{ auth()->user()->vaccinations()->count()}}</span> </h4>
        </div>
      </a>
    </div>

    </div>

  </div>
</div> --}}

<!-- Button trigger modal -->

  {{-- <img  src="{{asset('image/add_child.png')}}" alt="Card image cap" style="width: 6%;margin-right: 4%;" data-toggle="modal" data-target="#staticBackdrop"
  style="margin-top: 1%;margin-right: 4%; "> --}}

  {{-- <h5 style="margin-top: 1%;margin-right: 3.5%; ">اضافة طفل</h5> --}}
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

            <div class="modal-body">
                        <!-- Card -->
                <div class="card">

                    <!-- Card body -->
                    <div class="card-body">
                      <div id="done">

                      </div>
                    <!-- Material form register -->

                        <div class="md-form">
                            <label for="name" class="font-weight-light">  اسم الطفل</label>
                            <input type="text" id="name" class="form-control"  >

                        </div>

                        <!-- Material input email -->
                        <div class="md-form">
                        <label for="date_of_birth" class="font-weight-light">  مواليد الطفل</label>
                        <input type="Date" id="date_of_birth" class="form-control"  >

                        </div>
                        <div class="md-form ">
                          <label for="home_adress"> العنوان</label>
                          <select id="home_adress" class="form-control">

                            @foreach ($cities as $city)

                          <option  value="{{$city->name}}">{{$city->name}}</option>
                          @endforeach

                          </select>
                        </div>

                        <div class="md-form">
                            <label for="telephone_number" class="font-weight-light" >  رقم ولي الامر</label>
                            <input type="text" id="telephone_number" class="form-control" placeholder="يحب ان يكون قمة اكبر من 0 و عدد 10 ارقام" >

                        </div>


                        <button type="submit" class="btn btn-primary" style="margin-top: 9%;width: 107px;" id="addChildren" >تسجيل <i class="fas fa-folder-plus"></i></button>

                    <div id="error">

                    </div>
                    <!-- Material form register -->

                    </div>
                    <!-- Card body -->

                </div>
                <!-- Card -->
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cleaning()" >اغلاق <i class="fas fa-times"></i></button>

        </div>
      </div>
    </div>
  </div>


    {{-- <form id="getchilde" action="">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="number" class="form-control" id="childeId" placeholder="رقم الطفل" style="width: 30%;margin-right: 37%;margin-top: 2%;">
      <button type="button" class="btn btn-success" style="margin-right: 47%;height: 45px;width: 84px;margin-top: 1%;" id="search">بحت</button>
    </form> --}}

    <div class="alert alert-danger" role="alert" id="errur" style="display: none">

    </div>


    <div class="container" style="margin-top: 1%;padding-right: 37%;">
        <div class="row">
          <form  id="form-child" action="/infochild" method="get">
            <div class="col-4">

                <div class="card" style="width: 18rem; display: none ;" id="baby-info">
                    <img class="card-img-top " src="{{asset('image/babe.jpg')}}" alt="Card image cap"
                         style="width: 50%;margin-right: 20%;">

                        <div class="card-body">
                        <input type="hidden" name="id" id="span-child-id">
                          <h5> رقم الطفل :<span class="badge badge-success" id="span-id">12345678</span></h5>
                          <h5> الاسم :<span class="badge badge-success" id="span-name">عبد الله عبد الصمد عبد القادر</span></h5>
                          {{-- <h5> السكن :<span class="badge badge-success" id="span-home_adress">عين زارة</span></h5> --}}
                          {{-- <h5> رقم ولي الامر :<span class="badge badge-success" id="span-telephone_number">0927780208</span></h5> --}}
                          {{-- <a href="{{url('/infochild/{id}')}}" id="info-child"></a> --}}
                          <input type="submit" value="عرض  ملف الطفل"  class="btn btn-primary" >
                          </div>

                </div>
            </div>
          </form>


          </div>
      </div>

@endsection
@section('script')

    <script src="{{asset('js/vaccinationCenters/index.js')}}"></script>
@endsection
