@extends('VaccinationCenters/master')
@section('body')
<h3><span class="badge badge-warning">الموافقة علي وصول الشحنة</span></h3>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">رقم الطلب</th>
        <th scope="col">اسم الجرعة</th>
        <th scope="col">موعد الجرعة</th>
        <th scope="col">كمية الجرعات</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($orders as $order)
        <form action="/accept-order/{{$order->id}}" method="post">
          @csrf
            <tr>
            <th scope="row">{{$order->id}}</th>
              <td>{{$order->vaccination->name}}</td>
              <td>{{$order->vaccination->dose_time}}</td>
              <td>{{$order->response_quantity}}</td>
              <td><button type="submit" class="btn btn-success" >تأكيد</button></td>
            </tr>
        </form>
          @endforeach
     
      
    </tbody>
  </table>
  {{$orders->links()}}
    <br>
    @if ($errors->any())
     <div class="alert alert-danger" role="alert" id="#errur" >
      okkkk
      </div> 
     @endif
     @if (session()->has('message'))
       <div class="alert alert-success" role="alert" id="succsful" >
        {{session()->get('message')}}
       </div>  
     @endif
       
    
   
   
@endsection
@section('script')
  <script src="{{asset('js/vaccinationCenters/receive_an_order.js')}}"></script>    
@endsection