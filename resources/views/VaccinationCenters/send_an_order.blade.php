@extends('VaccinationCenters/master')
@section('body')
{{-- <img src="{{asset('image/management.jpg')}}" style="width: 20%;margin-left: 38%;margin-top: 3%;"> --}}
      {{-- <div class="container"> --}}

        <table class="table table-dark" id="Table1">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">اسم الجرعات</th>
                <th scope="col">موعد الجرعة</th>
                <th scope="col">الكمية</th>
                <th scope="col">لم يحصل عليها</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                
                  
                  @foreach ($vaccinations as $vaccination)
                  <tr>
                    <input type="hidden" name="{{$index= $vaccination->id}}">
                    
                      {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <th id="vaccination_id{{$index}}">{{$vaccination->id}}</th>
                        <td id="name{{$index}}">{{$vaccination->name}}</td>
                        <td id="dose_time{{$index}}">{{$vaccination->time->dose_time}}</td>
                        <td><input id="quantity{{$index}}" class="quantity" type="number" aria-label="Checkbox for following text input"></td>
                        <td> {{ $chilren->count() - $vaccination->childfiles->count() }}  طفل </td>
                        <td><button type="submit" class="btn btn-success"  onclick="send({{$index}})"> ارسل الطلب <i class="fas fa-paper-plane"></i></button></td>                         
                    </tr>
                      
                  @endforeach
                  

                
            </tbody>
          </table>
      {{$vaccinations->links()}}
      {{-- </div> --}}
     
          <div class="alert alert-success" role="alert" id="succsful">
            
          </div>
          <div class="alert alert-danger" role="alert" id="errur">
           
          </div>
         
@endsection
@section('script')
  <script src="{{asset('js/vaccinationCenters/send_an_order.js')}}"></script>    
@endsection