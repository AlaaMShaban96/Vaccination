@extends('VaccinationCenters/master')

@section('body')
<div class="container">
  <div class="row">
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
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop" 
       style="display: list-item;margin-top: 1%;margin-right: 4%; ">
    اضافة طفل
  </button>
  
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
                            <label for="name" class="font-weight-light">اسم الطفل</label>
                            <input type="text" id="name" class="form-control"  >
                        
                        </div>
                
                        <!-- Material input email -->
                        <div class="md-form">
                        <label for="date_of_birth" class="font-weight-light">مواليد الطفل</label>
                        <input type="Date" id="date_of_birth" class="form-control"  >
                      
                        </div>
                        <div class="md-form ">
                          <label for="home_adress">العنوان</label>
                          <select id="home_adress" class="form-control">
                           
                            @foreach ($cities as $city)
                                
                          <option  value="{{$city->name}}">{{$city->name}}</option>
                          @endforeach
                       
                          </select>
                        </div>
                      
                        {{-- <div class="md-form">
                            <label for="home_adress" class="font-weight-light"  >عنوان السكن</label>
                            <input type="text" id="home_adress" class="form-control" >
                        
                        </div> --}}
                        <div class="md-form">
                            <label for="telephone_number" class="font-weight-light">رقم ولي الامر</label>
                            <input type="text" id="telephone_number" class="form-control" >
                        
                        </div>
                      
                
                        <button type="submit" class="btn btn-primary" style="margin-top: 9%;width: 107px;" id="addChildren" >تسجيل</button>
                    
                    <div id="error">
                    
                    </div>
                    <!-- Material form register -->
                
                    </div>
                    <!-- Card body -->
                
                </div>
                <!-- Card -->
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cleaning()" >اغلاق</button>
          
        </div>
      </div>
    </div>
  </div>

    {{-- <img src="{{asset('image/2682157.jpg')}}" style="width: 20%;margin-left: 38%;margin-top: 3%;"> --}}

    <form id="getchilde" action="">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="number" class="form-control" id="childeId" placeholder="رقم الطفل" style="width: 30%;margin-right: 37%;margin-top: 2%;">
      <button type="button" class="btn btn-success" style="margin-right: 37%;" id="search">بحت</button>
    </form>

    <div class="alert alert-danger" role="alert" id="errur" style="display: none">
           
    </div>
    

    <div class="container" style="margin-top: 3%;">
        <div class="row">
          <form  id="form-child" action="/infochild" method="get">
            <div class="col-4">

                <div class="card" style="width: 18rem; display: none ;" id="baby-info">
                    <img class="card-img-top " src="{{asset('image/babe.jpg')}}" alt="Card image cap"
                         style="width: 59%;margin-right: 20%;">
                     
                        <div class="card-body">
                        <input type="hidden" name="id" id="span-child-id">
                          <h5> رقم الطفل :<span class="badge badge-success" id="span-id">12345678</span></h5>
                          <h5> الاسم :<span class="badge badge-success" id="span-name">عبد الله عبد الصمد عبد القادر</span></h5>
                          <h5> السكن :<span class="badge badge-success" id="span-home_adress">عين زارة</span></h5>
                          <h5> رقم ولي الامر :<span class="badge badge-success" id="span-telephone_number">0927780208</span></h5>
                          {{-- <a href="{{url('/infochild/{id}')}}" id="info-child"></a> --}}
                          <input type="submit" value="المزيد"  class="btn btn-primary" >
                          </div>
                      
                </div>
            </div>
          </form>

          <div class="col-8">
            <div id="vaccination_table">

              </div>
              
            </div>
          </div>
      </div>   
  
@endsection
@section('script')

    <script src="{{asset('js/vaccinationCenters/index.js')}}"></script>
@endsection