@extends('admin/master')
@section('content')
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addcity" > إضافة مدينة جديدة +</button><br>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">رقم المدينة</th>
      <th scope="col">إسم المدينة</th>
     <th></th>
    </tr>
  </thead> 

  <tbody>
    @foreach ($cities as $city)
    <tr>
      <th scope="row" id="id">{{$city->id}}</th>
        <td id="name{{$city->id}}">{{$city->name}}</td>

      <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editcity" onclick="editCity({{$city->id}})">تعديل</button> 
    </tr>
    @endforeach
  </tbody>
</table>


<!-- Add new city -->
<div class="modal fade" id="addcity" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">


        <div style=" display: none ;" id="success-alert" class="alert alert-success" role="alert"></div>
        <div style=" display: none ;" id="danger-alert" class="alert alert-danger" role="alert"></div>


  <div class="form-group">
    <label for="exampleInputPassword1">اسم المدينة</label>
    <input type="text" name="cityname" class="form-control" id="cityname">
  </div>

 
        </div>
      <div class="modal-footer">
        
      <input type="submit" class="btn btn-success" value=" حفـظ " onclick="addcity()">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="refresh()"> إلغـاء </button>
       
      </div>
     
    </div>
  </div>
</div>



<!-- edit city -->
<div class="modal fade" id="editcity" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">


        <div style=" display: none ;" id="success-alert" class="alert alert-success" role="alert"></div>
        <div style=" display: none ;" id="danger-alert" class="alert alert-danger" role="alert"></div>


  <div class="form-group">
    <label for="exampleInputPassword1">اسم المدينة</label>
    <input type="text" name="cityname" class="form-control" id="editCityName">
    <input type="hidden" name="" id="editCityId">
  </div>

 
        </div>
      <div class="modal-footer">
     
      <input type="submit" class="btn btn-success" value=" تعديل " onclick="updateCity()">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" > إلغـاء </button>
       
      </div>
     
    </div>
  </div>
</div>

@section('script')
<script src="{{asset('js/admin/city.js')}}"></script>
@endsection


@endsection