@extends('admin/master')
@section('content')
{{-- @if ($orders->isEmpty())
  <img src="image/errors/noData.jpg" width="50%" style="margin-right: 25%;">

@else --}}


    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#send"><i class="far fa-paper-plane"></i>   إرسال شحنة تطعيمات</button><br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">إسم المركز</th>
          <th scope="col"> التطعيمة </th>
          <th scope="col">موعد التعاطي</th>
          <th scope="col">الكمية </th>

        <th></th>
        </tr>
      </thead>
      <tbody>

       
          @foreach ($orders as $order)
          <tr>
          <td id="userName{{$order->id}}">{{$order->user->name}}</td>
        <td id="vaccinationName{{$order->id}}">{{$order->vaccination->name}}</td>
          <td>{{$order->vaccination->dose_time}}</td>
          <td id="orderQuantity{{$order->id}}">{{$order->quantity}}</td>
          <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#accept" onclick="accept_massege({{$order->id}});"><i class="fas fa-check"></i>   موافقة</button> </td>
        </tr>
          @endforeach
        
      </tbody>
    </table>
  
{{-- @endif --}}


    

<!-- order accept -->
<div class="modal fade" id="accept" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">


        <div  id="accept-massege" class="alert alert-light" role="alert"></div>
        <div  style=" display: none ;" id="error-order-massege" class="alert alert-danger" role="alert"></div>

        
        </div>
        <input type="hidden" id="order-id">
      <div class="modal-footer">
        
      <input type="button" class="btn btn-success" value=" موافق " onclick="acceptOrder();">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" > إلغـاء </button>
       
      </div>
     
    </div>
  </div>
</div>




<!-- send Vaccinations -->
<div class="modal fade" id="send" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">


        <div style=" display: none ;" id="success-alert" class="alert alert-success" role="alert"></div>
        <div style=" display: none ;" id="danger-alert" class="alert alert-danger" role="alert"></div>


  <div class="form-group">
    <label for="exampleInputPassword1">اسم المركز</label>
    <input type="text" name="v-name" class="form-control" id="c-name">

    <label for="exampleInputPassword1">اسم التطعيمة</label>
    <input type="text" name="v-name" class="form-control" id="v-name">

    <label for="exampleInputPassword1">موعد التعاطي</label>
    <select class="form-control" id="VaccinationDate" >
      <option>بعد الولادة مباشرة</option>
      <option>شهرين</option>
      <option>4 شهور </option>
      <option>6 شهور </option>
      <option>9 شهور </option>
      <option>12 شهر </option>
      <option>18 شهر </option>
      <option>6 سنوات</option>



    </select>
    <label for="exampleInputPassword1">الكميـة</label>
    <input type="number" name="" class="form-control" id="v-quantity">
  </div>

 
        </div>
      <div class="modal-footer">
        
      <input type="submit" class="btn btn-success" value=" حفـظ " onclick="send()">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" > إلغـاء </button>
       
      </div>
     
    </div>
  </div>
</div>



 

@section('script')
<script src="{{asset('js/admin/requests.js')}}"></script>
@endsection



@endsection
