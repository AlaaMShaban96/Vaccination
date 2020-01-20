@extends('VaccinationCenters/master')

@section('body')


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" 
       style="display: list-item;margin-top: 1%;margin-right: 4%;">
    اضافة طفل
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">تسجيل طفل</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
            {{-- <span aria-hidden="true">&times;</span> --}}
          </button>
        </div>
            <div class="modal-body">
                        <!-- Card -->
                <div class="card">

                    <!-- Card body -->
                    <div class="card-body">
                      <div id="done">
                    
                      </div>
                    <!-- Material form register -->
                    <form id="formRegister" action="#" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" id="vaccination_center_id" name="vaccination_center_id" value="12345678">
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
                    </form>
                    <div id="error">
                    
                    </div>
                    <!-- Material form register -->
                
                    </div>
                    <!-- Card body -->
                
                </div>
                <!-- Card -->
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cleaning()">اغلاق</button>
          
        </div>
      </div>
    </div>
  </div>

    {{-- <img src="{{asset('image/2682157.jpg')}}" style="width: 20%;margin-left: 38%;margin-top: 3%;"> --}}

    <form id="getchilde" action="#">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="text" class="form-control" id="childeId" placeholder="رقم الطفل" style="width: 30%;margin-right: 37%;margin-top: 2%;">
      <button type="button" class="btn btn-success" style="margin-right: 37%;" id="search">بحت</button>
    </form>



    <div class="container" style="margin-top: 3%;">
        <div class="row">
            <div class="col">

                <div class="card" style="width: 18rem;" id="baby-info">
                    <img class="card-img-top " src="{{asset('image/babe.jpg')}}" alt="Card image cap"
                         style="width: 59%;margin-right: 20%;">
                    <div class="card-body">
                  
                    <h5><span class="badge badge-success" id="span-name">عبد الله عبد الصمد عبد القادر</span></h5>
                    <h5><span class="badge badge-success" id="span-home_adress">عين زارة</span></h5>
                    <h5><span class="badge badge-success" id="span-telephone_number">0927780208</span></h5>
                    <a href="#" class="btn btn-primary">المزيد</a>
                    </div>
                </div>
            </div>


          <div class="col">
            <h3><span class="badge badge-warning">الجرعات الغير مئخودة</span></h3>
            <table class="table">

                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم</th>
                    <th scope="col"> الفتره</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pvc</td>
                    <td>اربعه اشهر</td>
                    <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pvc</td>
                    <td>اربعه اشهر</td>
                    <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pvc</td>
                    <td>اربعه اشهر</td>
                    <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pvc</td>
                    <td>اربعه اشهر</td>
                    <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pvc</td>
                    <td>اربعه اشهر</td>
                    <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                  </tr>
                  
                </tbody>
              </table>


          </div>
        </div>
    </div>   
  
@endsection
@section('script')
{{--    --}}
    <script src="{{asset('js/index.js')}}"></script>
@endsection