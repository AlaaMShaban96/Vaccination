@extends('VaccinationCenters/master')
@section('head')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/user_profile.css')}}">
<style>

</style>
    
@endsection
@section('body')
<div class="container emp-profile">
    
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                <img src="{{ asset('image/user_profile.jpg')}}" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                مركز {{auth()->user()->name}}
                            </h5>
                            <h6 style="margin-bottom: 7%;" >
                                مركز صحى مختص بتطعيمات الاطفال
                            </h6>
                            
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">معلومات المركز</a>
                        </li>
    
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <button class="profile-edit-btn btn-warning " style="color:black;" name="btnAddMore" value="" data-toggle="modal" data-target="#staticBackdrop">تعديل  <i class="fas fa-user-edit"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work" style="margin-top:1%;">
                    <h4>الخدمات</h4>
                    <span >الاطفال</span><br/>
                    <span >ارسال طلب</span><br/>
                    <span >استلام شحنة</span><br/>
                    <span >التطعيمات المتوفرة</span><br/>
                    <span >تقارير</span><br/>
                 
                </div>
            </div>
            <div class="col-md-8" style="margin-top: -4%;">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>رقم المركز</label>
                                    </div>
                                    <div class="col-md-6">
                                    <p>{{auth()->user()->id}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>اسم المركز</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{auth()->user()->name}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>البريد الاكتروني</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{auth()->user()->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>رقم الهاتف</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{auth()->user()->phone_number}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>المدينة</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{auth()->user()->city->name}}</p>
                                    </div>
                                </div>
                    </div>
                   
                </div>
            </div>
        </div>
         
</div>







<!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                <div class="modal-body">
                <div class="card">
        
                    <!-- Card body -->
                    <div class="card-body">
                    <div id="done">
                    
                    </div>
                    <!-- Material form register -->
                
        
                
            
                    <!-- Material input text -->
                
                
            <!-- Material input email -->
        
                    
                    
                    
                        <div class="md-form">
                            <label for="phone_number" class="font-weight-light">رقم الهاتف</label>
                        <input type="number" name="phone_number" id="phone_number" class="form-control" value="{{auth()->user()->phone_number}}" >
                        
                        </div>
                        <div class="md-form">
                            <label for="phone_number" class="font-weight-light">الرمز السري الحالي</label>
                        <input type="text" name="password" id="password" class="form-control" value="0" >
                        
                        </div>
                        <div class="md-form">
                            <label for="phone_number" class="font-weight-light">الرمز السري الجديد</label>
                        <input type="text" name="resetPassword" id="resetPassword" class="form-control" value="0" >
                        
                        </div>
                    <div id="error">
                    
                    </div>
                    <!-- Material form register -->
                
                    </div>
                    <!-- Card body -->
        
                </div>
                <!-- Card -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeEdit">اغلاق</button>
                    <button type="submit" class="btn btn-warning"  onclick="update()"  id="addChildren" >تعديل</button>
                </div>
                <div class="alert alert-danger" style="display: none;" role="alert" id="errur">
            
                </div>
            </div>
            </div>
        </div>
       
        
        
   
@endsection
@section('script')
  <script src="{{asset('js/vaccinationCenters/user_profile.js')}}"></script>    
@endsection