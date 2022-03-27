@extends('VaccinationCenters/master')
@section('body')


<table class="table table-dark" id="Table1">
    <thead>
      <tr>
        <th scope="col">رقم الجرعة</th>
        <th scope="col">اسم الجرعة</th>
        <th scope="col">موعد الجرعة</th>
        <th scope="col"> الكمية المرسلة </th>
        <th scope="col"> الكمية المستلمة </th>
        <th scope="col"> تاريخ الارسال</th>
        <th scope="col"> تاريخ الاستلام </th>
        <th scope="col">  حالة الطلب </th>

      </tr>
    </thead>
    <tbody>


          @foreach ($orders  as $order)
          <tr>
                <th>{{$order->id}}</th>
                <td>{{$order->vaccination->name}}</td>
                <td>{{$order->vaccination->time->dose_time}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->response_quantity}}</td>
                <td>{{$order->created_at->format('d-m-Y')}}</td>
                <td>{{$order->updated_at->format('d-m-Y')}}</td>
                <td>{{$order->status ==3 ? 'تم الاستلام' : 'قيد الانتظار..'}}</td>
            </tr>

          @endforeach



    </tbody>
  </table>
  {{$orders->links()}}

@endsection
