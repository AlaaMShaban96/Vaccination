@extends('VaccinationCenters/master')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-4">



            <div class="card" style="width: 18rem;" id="baby-info">
                <img class="card-img-top " src="{{asset('image/babe.jpg')}}" alt="Card image cap"
                    style="width: 59%;margin-right: 20%;">
                <div class="card-body">
            
                <h5> رقم الطفل :<span class="badge badge-info" id="span-id">{{$child->id}}</span></h5>
                <h5> الاسم :<span class="badge badge-info" id="span-name">{{$child->name}}</span></h5>
                <h5> السكن :<span class="badge badge-info" id="span-home_adress">{{$child->home_adress }}</span></h5>
                <h5> رقم ولي الامر :<span class="badge badge-info" id="span-telephone_number">{{$child->telephone_number}}</span></h5>
                <h5> تاريخ الميلاد :<span class="badge badge-info" id="span-telephone_number">{{$child->date_of_birth }}</span></h5>
                {{-- <a href="{{url('/infochild/{id}')}}" class="btn btn-primary" id="info-child">المزيد</a> --}}
                </div>
            </div>
            <br>
            
           
        </div>



        <div class="col-8">
            <div class="col" id="exceptVaccinations">
                <h3><span class="badge badge-success">التطعيمات المئخودة</span></h3>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">رقم الجرعة</th>
                        <th scope="col">اسم الجرعة</th>
                        <th scope="col">موعد الجرعة</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($exceptVaccinations as $vaccination)
                        {{-- <form action="/accept-order/{{$vaccination->id}}" method="post">
                        @csrf --}}
                            <tr>
                            <th scope="row">{{$vaccination->id}}</th>
                            <td>{{$vaccination->name}}</td>
                            <td>{{$vaccination->dose_time}}</td>
                            
                            </tr>
                        {{-- </form> --}}
                        @endforeach
                    
                    
                    </tbody>
                </table>
                {{$exceptVaccinations->links()}}
            </div>

            <div class="col" id="onlyVaccinations">


                <h3><span class="badge badge-danger">التطعيمات الغير مئخودة</span></h3>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">رقم الجرعة</th>
                        <th scope="col">اسم الجرعة</th>
                        <th scope="col">موعد الجرعة</th>
                        <th scope="col"> </th>
                    </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($onlyVaccinations as $vaccination)
                        {{-- <form action="/accept-order/{{$vaccination->id}}" method="post">
                        @csrf --}}
                            <tr>
                            <th scope="row" id="id{{$vaccination->id}}">{{$vaccination->id}}</th>
                            <td>{{$vaccination->name}}</td>
                            <td>{{$vaccination->dose_time}}</td>
                            <td id="take-{{$vaccination->id}}"><input type="submit" class="btn btn-danger" value="اخذ الجرعة" onclick="take_a_dose({{$vaccination->id}})"/></td>                            
                            </tr>
                        {{-- </form> --}}
                        @endforeach
                    
                    
                    </tbody>
                </table>
                {{$onlyVaccinations->links()}}



            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
        <script src="{{asset('js/infochild.js')}}"></script>
@endsection