@extends('admin/master')
@section('content')
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add"> إضافة حساب جديد +</button>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">الإسم</th>
      <th scope="col">إسم المستخدم</th>
     
      <th scope="col">نوع الحساب</th>
      <th scope="col">رقم الهاتف</th>
      <th scope="col">العنوان</th>
      <th scope="col">حالة الحساب</th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
        
    <tr>
    <td id="name{{$user->id}}">{{$user->name}}</td>
    <td id="email{{$user->id}}">{{$user->email}}</td>
    {{-- <td id="password{{$user->id}}">{{$user->password}}</td> --}}
    <td id="account_type{{$user->id}}">{{$user->account_type === 1 ? "مدير نظام" : "مركز صحي"}}</td>
    <td id="phone_number{{$user->id}}">{{$user->phone_number}}</td>
    <td id="city_name{{$user->id}}">{{$user->city->name}}</td>
    <td id="status{{$user->id}}">{{$user->status === 1 ? "مفعل" : "غير مفعل"}}</td>

    <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit" onclick="edit_user({{$user->id}});">تعديل</button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete" onclick="set_user_id({{ $user->id }});">إلغاء تفعيل</button> </td>

    </tr>
    @endforeach

   
   
    
  </tbody>
</table>


<!-- Add new Account -->
<div class="modal fade" id="add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div style=" display: none ;" id="success-alert" class="alert alert-success" role="alert"></div>
        <div style=" display: none ;" id="danger-alert" class="alert alert-danger" role="alert"></div>
      </div>
      <form>
      
      <div class="modal-body">
 
        <div class="form-group">
          <label for="exampleInputEmail1">الإسم</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
        </div>

      <div class="form-group">
    <label for="exampleInputEmail1">إسم المستخدم</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">كلمة المرور</label>
    <input type="text" class="form-control" id="password">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">رقم الهاتف</label>
    <input type="number" class="form-control" id="phone_number" aria-describedby="emailHelp">
  </div>

  <div class="form-group col-md-4">
    <label for="inputState">العنوان</label>
    <select id="city_id" class="form-control">
      <option selected>إختر المدينة</option>
      @foreach ($cities as $city)
          
    <option  value="{{$city->id}}">{{$city->name}}</option>
    @endforeach
 
    </select>
  </div>

  <div class="form-group col-md-4">
      <label for="inputState">توع الحساب</label>
      <select id="account_type" class="form-control">
        <option selected value="2">مركز صحي</option>
        <option value="1">مدير نظام</option>
      </select>
    </div>


        </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-success" value=" حفـظ " onclick="add_user();">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> إلغـاء </button>
       
      </div>
      </form>
    </div>
  </div>
</div>





<!-- edit Account -->
<div class="modal fade" id="edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div style=" display: none ;" id="success-alert" class="alert alert-success" role="alert"></div>
        <div style=" display: none ;" id="danger-alert" class="alert alert-danger" role="alert"></div>
      </div>
      <form>
      
      <div class="modal-body">
 
        <div class="form-group">
          <label for="exampleInputEmail1">الإسم</label>
          <input type="text" class="form-control" id="editname" aria-describedby="emailHelp">
        </div>

      <div class="form-group">
    <label for="exampleInputEmail1">إسم المستخدم</label>
    <input type="text" class="form-control" id="editemail" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">كلمة المرور</label>
    <input type="text" class="form-control" id="editpassword">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">رقم الهاتف</label>
    <input type="number" class="form-control" id="editphone_number" aria-describedby="emailHelp">
  </div>

  <div class="form-group col-md-4">
    <label for="inputState">العنوان</label>
    <select id="editcity_id" class="form-control">
      <option selected>إختر المدينة</option>
      @foreach ($cities as $city)   
    <option  value="{{$city->id}}">{{$city->name}}</option>
    @endforeach
 
    </select>
  </div>

  

        </div>
        <input type="hidden" name="" id="edituserid">
      <div class="modal-footer">
      <input type="submit" class="btn btn-success" value=" حفـظ " onclick="update_user();">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> إلغـاء </button>
       
      </div>
      </form>
    </div>
  </div>
</div>








<!-- disActive Account -->
<div class="modal fade" id="delete" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="staticBackdropLabel">تنبيــه</h5>

      </div>
      <form>
      
      <div class="modal-body">
        <input type="hidden" id="disactive_user_id">
 <h3>هل أنت متأكد من إلغـاء تفعيل هذا الحساب ؟</h3>
        </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-danger" value=" إلغاء تفعيل " onclick="disActive();">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> إلغـاء </button>
       
      </div>
      </form>
    </div>
  </div>
</div>


@section('script')
<script src="{{asset('js/admin/users.js')}}"></script>
@endsection

@endsection