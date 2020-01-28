@extends('VaccinationCenters/master')
@section('body')
<table class="table table-striped" id="Table1">
    <thead>
      <tr>
        <th scope="col">رقم الجرعة</th>
        <th scope="col">اسم الجرعة</th>
        <th scope="col">موعد الجرعة</th>
        <th scope="col">الكمية</th>
       
      </tr>
    </thead>
    <tbody>
        
          
          @foreach ($vaccinations as $vaccination)
          <tr>
            <input type="hidden" name="{{$index= 5}}">
            
                <th id="vaccination_id{{$index}}">{{$vaccination->vaccination->id}}</th>
                <td id="name{{$index}}">{{$vaccination->vaccination->name}}</td>
                <td id="dose_time{{$index}}">{{$vaccination->vaccination->dose_time}}</td>
                <td id="quantity{{$index}}">{{$vaccination->quantity}}</td>
            </tr>
              
          @endforeach
          

        
    </tbody>
  </table>
{{$vaccinations->links()}}


@endsection