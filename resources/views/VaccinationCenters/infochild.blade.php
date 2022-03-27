@extends('VaccinationCenters/master')
@section('head')
<style>

#fond  {
    /* background: greenyellow; */
    color: whitesmoke;

}
#notfond {
    /* background: red; */
    color: red;

}
.fond {
    background: green;
    border-color: green;
    /* color: whitesmoke; */

}
 .notfond{
    /* background: red; */
    /* color: red; */

}
</style>

@endsection
@section('body')
<form  action="/infochild" method="GET" class="form-inline">
    <button type="submit" class="btn btn-success mb-2">بحت</button>

    <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">رقم الطفل</label>
        <input type="number"  name="id" class="form-control"  placeholder="ادخل رقم الطفل">
      </div>
  </form>

@if (!empty($child))
  <img src="image/errors/noData.jpg" width="50%" style="margin-right: 22%;">

@else
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
                <h5> المركز :<span class="badge badge-info" id="span-home_adress">{{$child->user->name }}</span></h5>
                <h5> العمر :<span class="badge badge-info" id="span-home_adress">{{$child->getAgeAttribute() }}</span></h5>
                <h5> رقم ولي الامر :<span class="badge badge-info" id="span-telephone_number">{{$child->telephone_number}}</span></h5>
                <h5> تاريخ الميلاد :<span class="badge badge-info" id="span-telephone_number">{{$child->date_of_birth }}</span></h5>
                {{-- <a href="{{url('/infochild/{id}')}}" class="btn btn-primary" id="info-child">المزيد</a> --}}
                </div>
            </div>
            <br>


        </div>



        <div class="col-8">
            <div style="overflow-y: scroll; height:625px;">
            <div class="col" id="exceptVaccinations">
                <h3><span class="badge badge-success">التطعيمات المأخودة</span></h3>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">نوع التطعيمة</th>
                        <th scope="col">موعد الجرعة</th>
                        <th scope="col">موقع التطعيم</th>
                        <th scope="col">تاريخ التطعيم</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($child->childfiles as $childfile)

                        @foreach ($childfile->vaccinations as $item)

                            <td>{{$item->name}}</td>
                            <td>{{$item->time->dose_time}}</td>

                        @endforeach

                        <td>{{$childfile->user->name }}</td>
                        <td>{{$childfile->created_at->format('d-m-yy') }}</td>

                            </tr>

                        @endforeach


                    </tbody>
                </table>

            </div>

            <div class="col" id="onlyVaccinations">


                <h3><span class="badge badge-danger">التطعيمات الغير مأخودة</span></h3>
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
                            <td id="{{$vaccination->users()->where('user_id',auth()->user()->id)->get() =="[]"? "notfond":'fond' }}">{{$vaccination->name}}</td>
                            <td>{{$vaccination->time->dose_time}}</td>
                            {{-- <td> <span id="">.</span></td> --}}
                            <td id="take-{{$vaccination->id}}"><input type="submit" class="btn btn-danger {{$vaccination->users()->where('user_id',auth()->user()->id)->get() =="[]"? "notfond":'fond' }}" value="اخذ الجرعة" onclick="take_a_dose({{$vaccination->id}})"/></td>
                            </tr>
                        {{-- </form> --}}
                        @endforeach


                    </tbody>
                </table>
                {{-- {{$onlyVaccinations->links()}} --}}



            </div>
        </div>
        </div>
    </div>
</div>
@endif
@endsection
@section('script')
        <script src="{{asset('js/vaccinationCenters/infochild.js')}}"></script>
@endsection
