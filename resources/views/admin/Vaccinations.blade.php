@extends('admin/master')
@section('content')

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addVaccinations"><i class="fas fa-syringe"></i>    إضافة تطعيمة جديدة</button><br>
@if (empty($vaccinations))
  <img src="image/errors/noData.jpg" width="50%" style="margin-right: 22%;">

@else
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">إسم التطعيمة</th>
            <th scope="col">موعد التعاطي</th>
            <th scope="col">الكميـة</th>
        <th> </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($vaccinations as $vaccination)


        <tr>
            <th scope="row">{{$vaccination->id}}</th>
            <td id="name{{$vaccination->id}}">{{$vaccination->name}}</td>
            <td id="dose_time{{$vaccination->id}}">{{$vaccination->time->dose_time}}</td>
            <td id="quantity{{$vaccination->id}}">{{$vaccination->quantity}}</td>
            <td> <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#editVaccinations" onclick="editVaccinations({{$vaccination->id}})">تعديل</button> </td>

        </tr>
        @endforeach

        </tbody>
    </table>
    {{$vaccinations->links()}}
@endif


<!-- Add Vaccinations -->
<div class="modal fade" id="addVaccinations" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">


        <div style=" display: none ;" id="success-alert" class="alert alert-success" role="alert"></div>
        <div style=" display: none ;" id="danger-alert" class="alert alert-danger" role="alert"></div>


  <div class="form-group">
    <label for="exampleInputPassword1">اسم التطعيمة</label>
    <input type="text" name="v-name" class="form-control" id="VaccinationName">

    <label for="exampleInputPassword1">موعد التعاطي</label>
    <select class="form-control" id="VaccinationDate" >

      @foreach ($times as $time)
           <option value="{{$time->id}}">{{$time->dose_time}}</option>
      @endforeach

    </select>
    <label for="exampleInputPassword1">الكميـة</label>
    <input type="number" name="" class="form-control" id="VaccinationQuantity">
  </div>


        </div>
      <div class="modal-footer">

      <input type="submit" class="btn btn-success" value=" حفـظ " onclick="addVaccinations()">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="refresh()"> إلغـاء </button>

      </div>

    </div>
  </div>
</div>



<!-- edit Vaccinations -->
<div class="modal fade" id="editVaccinations" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">


        <div style=" display: none ;" id="editsuccess-alert" class="alert alert-success" role="alert"></div>
        <div style=" display: none ;" id="editdanger-alert" class="alert alert-danger" role="alert"></div>


  <div class="form-group">

    <input type="hidden" name="" id="VId">

    <label for="exampleInputPassword1">اسم التطعيمة</label>
    <input type="text" name="cityname" class="form-control" id="VName">

    <label for="exampleInputPassword1">موعد التعاطي</label>
    <select class="form-control" id="VDate">
      <option >اختر موعد التطعيمة</option>
      @foreach ($times as $time)
       <option value="{{$time->id}}">{{$time->dose_time}}</option>
      @endforeach

    </select>
    <label for="exampleInputPassword1">الكميـة</label>
    <input type="number" name="" class="form-control" id="VQuantity">
  </div>


        </div>
      <div class="modal-footer">

      <input type="submit" class="btn btn-success" value=" تعديل " onclick="updateVaccinations()">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" > إلغـاء </button>

      </div>

    </div>
  </div>
</div>

@section('script')
<script src="{{asset('js/admin/vaccinations.js')}}"></script>
@endsection


@endsection
