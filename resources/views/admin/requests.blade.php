@extends('admin/master')
@section('content')
{{-- @if ($orders->isEmpty())
  <img src="image/errors/noData.jpg" width="50%" style="margin-right: 25%;">

@else --}}


    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#send"><i class="far fa-paper-plane"></i>   إرسال شحنة تطعيمات</button><br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">تاريخ الطلب</th>
          <th scope="col">إسم المركز</th>
          <th scope="col">نوع التطعيم</th>
          <th scope="col">موعد التعاطي</th>
          <th scope="col">الكمية المتوفرة</th>
          <th scope="col">الكمية المطلوبة</th>
          <th scope="col"> الكمية المراد إرسالها</th>
        <th></th>


        </tr>
      </thead>
      <tbody>

        <tr>
          @foreach ($orders as $order)
        <td>{{$order->created_at->format('yy/m/d')}}</td> 
          <td id="userName{{$order->id}}">{{$order->user->name}}</td>
        <td id="vaccinationName{{$order->id}}">{{$order->vaccination->name}}</td>
          <td>{{$order->vaccination->time->dose_time}}</td>
          <td>{{$order->vaccination->quantity}}</td>
          <td id="orderQuantity{{$order->id}}">{{$order->quantity}}</td>
          <td ><input type="number"  class="form-control" id="response_quantity{{$order->id}}" value="{{$order->quantity}}"></td>
          <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#accept" onclick="accept_dialog({{$order->id}})">  موافقة</button> </td>
        </tr>

          @endforeach
      </tbody>
    </table>
    {{$orders->links()}}
{{-- @endif --}}


    

<!-- order accept -->
<div class="modal fade" id="accept" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <div  id="accept-massege" class="alert alert-light" role="alert"></div>
        <div  style=" display: none ; " id="error-order-massege" class="alert alert-danger" role="alert"></div>
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


        <div style=" display: none ;" id="send-success" class="alert alert-success" role="alert"></div>
        <div style=" display: none ;" id="send-danger" class="alert alert-danger" role="alert"></div>


  <div class="form-group">
    
        <label for="exampleInputPassword1">اسم المركز</label>
         <select id="send_user" class="form-control">
        <option selected value="">إختر المركز</option>
        @foreach ($users as $user)   
      <option  value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
      </select>

      <label for="exampleInputPassword1">اسم التطعيم</label>
      <select id="send_vaccination" class="form-control">
     <option selected value="">إختر التطعيم</option>
     @foreach ($vaccinations as $vaccination)   
   <option  value="{{$vaccination->id}}">{{$vaccination->name}}</option>
   @endforeach
   </select>

    <label for="exampleInputPassword1">الكميـة</label>
    <input type="number" name="" class="form-control" id="send_quantity">

    
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
