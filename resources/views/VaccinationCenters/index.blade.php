@extends('VaccinationCenters/master')

@section('body')
<div class="container">
  <div class="row">
    <div class="col">
      
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
       <div class="card-header">
         <h4> الاطفال <a href="{{url('/infochildren')}}" class="badge badge-danger" id="notification-child">{{$child->count()}}</a></h4>
       </div>
      
      </div>

    </div>
    <div class="col">

      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header">
        <h4>
           طلبات الاستلام  <a href="{{url('/receive')}}" class="badge badge-danger">{{$orders->where('status','=',2)->count()}}</a>
        </h4>
      </div>
      </div>

    </div>
    <div class="col">

    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header">
      <h4>التطعيمات <a href="{{url('/my-vaccination-available')}}" class="badge badge-danger">{{$vaccinations->count()}}</a></h4>
    </div>
    </div>

    </div>
 
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop" 
       style="display: list-item;margin-top: 1%;margin-right: 4%;">
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
                    <input type="hidden" id="user_id" name="user_id" value="12345678">

                   
                      {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                      {{-- <input type="hidden" id="user_id" name="user_id" value="12345678"> --}}
                      <!-- Material input text -->
                        <div class="md-form">
                            <label for="name" class="font-weight-light">اسم الطفل</label>
                            <input type="text" id="name" class="form-control" >
                        
                        </div>
                
                        <!-- Material input email -->
                        <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>  
                        <label for="date_of_birth" class="font-weight-light">مواليد الطفل</label>
                        <input type="Date" id="date_of_birth" class="form-control" >
                      
                        </div>
                        <div class="md-form">
                            <label for="home_adress" class="font-weight-light">عنوان السكن</label>
                            <input type="text" id="home_adress" class="form-control" >
                        
                        </div>
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
      <input type="text" class="form-control" id="childeId" placeholder="رقم الطفل" style="width: 30%;margin-right: 37%;margin-top: 2%;">
      <button type="button" class="btn btn-success" style="margin-right: 37%;" id="search">بحت</button>
    </form>

    <div class="alert alert-danger" role="alert" id="errur" style="display: none">
           
    </div>
    

    <div class="container" style="margin-top: 3%;">
        <div class="row">
            <div class="col-4">

                <div class="card" style="width: 18rem; display: none ;" id="baby-info">
                    <img class="card-img-top " src="{{asset('image/babe.jpg')}}" alt="Card image cap"
                         style="width: 59%;margin-right: 20%;">
                    <div class="card-body">
                  
                    <h5> رقم الطفل :<span class="badge badge-success" id="span-id">12345678</span></h5>
                    <h5> الاسم :<span class="badge badge-success" id="span-name">عبد الله عبد الصمد عبد القادر</span></h5>
                    <h5> السكن :<span class="badge badge-success" id="span-home_adress">عين زارة</span></h5>
                    <h5> رقم ولي الامر :<span class="badge badge-success" id="span-telephone_number">0927780208</span></h5>
                    <a href="{{url('/infochild/{id}')}}" class="btn btn-primary" id="info-child">المزيد</a>
                    </div>
                </div>
            </div>


          <div class="col-8">
            <div id="vaccination_table">

              </div>
              
            </div>
          </div>
      </div>   
  
@endsection
@section('script')

    <script src="{{asset('js/index.js')}}"></script>
@endsection