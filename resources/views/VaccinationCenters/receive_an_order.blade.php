@extends('VaccinationCenters/master')
@section('body')
<h3><span class="badge badge-warning">الموافقة علي وصول الشحنة</span></h3>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">اسم الجرعة</th>
        <th scope="col">كمية الجرعات</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($orders as $order)
         <th scope="row">{{$order->id}}</th>
          <td>{{$order->name}}</td>
          <td>{{$order->quantity}}</td>
          <td><button type="submit" class="btn btn-success">تم الاستلام</button></td>
        @endforeach
      </tr>
      
    </tbody>
  </table>
  {{$orders->links()}}
    
@endsection

