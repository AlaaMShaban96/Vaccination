@extends('VaccinationCenters/master')
@section('body')

@if (empty(auth()->user()->vaccinations))
    
<img src="image/errors/noData.jpg" width="50%" style="margin-right: 22%;">

    
@else
    


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
          
            
            @foreach (auth()->user()->vaccinations  as $vaccination)
            <tr>
              <input type="hidden" name="{{$index= 5}}">
              
                  <th id="vaccination_id{{$index}}">{{$vaccination->id}}</th>
                  <td id="name{{$index}}">{{$vaccination->name}}</td>
                  <td id="dose_time{{$index}}">{{$vaccination->dose_time}}</td>
                  <td id="quantity{{$index}}">{{$vaccination->users()->where('user_id',auth()->user()->id)->first()->pivot->quantity}}</td>
              </tr>
                
            @endforeach
            

          
      </tbody>
    </table>
  @endif

@endsection