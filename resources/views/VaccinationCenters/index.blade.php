@extends('VaccinationCenters/master')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
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
                
                    <!-- Material form register -->
                    <form id="formRegister" action="#" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="vaccination_center_id" value="12345678">
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

                    <!-- Material form register -->
                
                    </div>
                    <!-- Card body -->
                
                </div>
                <!-- Card -->
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
          
        </div>
      </div>
    </div>
  </div>

    <form action="" method="post">
        <img src="{{asset('image/2682157.jpg')}}" style="width: 20%;margin-left: 38%;margin-top: 3%;">
        <input type="text" class="form-control"  placeholder="رقم الطفل" style="width: 30%;margin-right: 37%;margin-top: 2%;">
        <button type="button" class="btn btn-success" style="margin-left: 46%;">Success</button>
    </form>



    <div class="container" style="margin-top: 3%;">
        <div class="row">
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top " src="{{asset('image/babe.jpg')}}" alt="Card image cap"
                         style="width: 59%;margin-right: 20%;">
                    <div class="card-body">
                  
                    <h5><span class="badge badge-success">عبد الله عبد الصمد عبد القادر</span></h5>
                    <h5><span class="badge badge-success">عين زارة</span></h5>
                    <h5><span class="badge badge-success">0927780208</span></h5>
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
  
    <script  type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
      });

  //  $(document).ready(function(){

     $('#addChildren').click(function(){
     
          var name =$('#name').val();
          var date_of_birth =$('#date_of_birth').val();
          var home_adress =$('#home_adress').val();
          var telephone_number =$('#telephone_number').val();
          var vaccination_center_id =$('#vaccination_center_id').val();

          var data="name="+name+"&date_of_birth="+date_of_birth
                    +"&home_adress="+home_adress+"&telephone_number="+telephone_number
                    +"&vaccination_center_id="+vaccination_center_id;
        $.ajax({
          type:'POST',
          url:'/addchild',
          data:data,
          success:function(data){
            Swal.fire(
                'تم اضافة الطفل بنجاح',
                ' رقم الطفل هو '+data.id,
                
              )
              document.getElementById('name').value ="";
              document.getElementById('date_of_birth').value ="";
              document.getElementById('home_adress').value ="";
              document.getElementById('telephone_number').value ="";

            },
            error:function(data){
              var obj = JSON.parse(data.responseText);
              var message="تاكد من ادخال ";
                if(obj.errors.hasOwnProperty('name'))
                  message+= "- اسم الطفل"
                if(obj.errors.hasOwnProperty('date_of_birth'))
                  message+= "- تاريخ الميلاد";
                if(obj.errors.hasOwnProperty('telephone_number'))
                  message+= "- رقم ولي الامر";
                if(obj.errors.hasOwnProperty('home_adress'))
                  message+= "- عنوان السكن";

                  console.log(message);
              Swal.fire({
                icon: 'error',
                title: 'خطاء في الادخال',
                text: ''+message,
                
              })
              

          

            

            //  obj.forEach(el => {
            //     console.log(el);
            //   });
              

            
            }

          });
        });

    $('body').on('keydown', 'input, select', function(e) {
    if (e.key === "Enter") {
        var self = $(this), form = self.parents('form:eq(0)'), focusable, next;
        focusable = form.find('input,a,select,button,textarea').filter(':visible');
        next = focusable.eq(focusable.index(this)+1);
        if (next.length) {
            next.focus();
        } else {
            form.submit();
        }
        return false;
    }
});
    // });


    </script>
@endsection