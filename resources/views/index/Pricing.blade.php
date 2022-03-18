@extends('index/master')

@section('content')
    

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>إبحث عن طفلك</h3>
                        <form  action="/infoChildToPublic" method="GET" >
                         
                              <div class="input-group input-group-lg">
                            
                                <input type="number" name="id" placeholder="Enter ادخل رقم الطفل و تضغظ علي " class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                              </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

        <!-- prising_area  -->
        <div class="prising_area minus_padding" style=" direction: rtl;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
                            {{-- <h3>بحث عن ملف طفلك</h3> --}}



                            @if (empty($child))
                            @if ($errors->any())
                                <div class="btn-block  btn btn-lg btn-danger" >
                                @foreach ($errors->all() as $error)
                                    <div>{{$error}}</div>
                                @endforeach
                                </div>
                            @endif
                            {{-- <img src="image/errors/noData.jpg" width="50%" style="margin-right: 22%;"> --}}
                          
                          @else
                          <div class="container">
                              <div class="row">
                                  <div class="col-xl-4">
                          
                          
                          
                                      <div class="card" style="width: 18rem;" id="baby-info">
                                          <img class="card-img-top " src="{{asset('image/babe.jpg')}}" alt="Card image cap"
                                              style="width: 59%;margin-right: 20%;">
                                          <div class="card-body">
                                      
                                          {{-- <h5> رقم الطفل :<span class="badge badge-info" id="span-id">{{$child->id}}</span></h5> --}}
                                          <h5> الاسم :<span class="badge badge-info" id="span-name">{{$child->name}}</span></h5>
                                          {{-- <h5> السكن :<span class="badge badge-info" id="span-home_adress">{{$child->home_adress }}</span></h5> --}}
                                          <h5> المركز :<span class="badge badge-info" id="span-home_adress">{{$child->user->name }}</span></h5>
                                          <h5> العمر :<span class="badge badge-info" id="span-home_adress">{{$child->getAgeAttribute() }}</span></h5>
                                          {{-- <h5> رقم ولي الامر :<span class="badge badge-info" id="span-telephone_number">{{$child->telephone_number}}</span></h5> --}}
                                          <h5> تاريخ الميلاد :<span class="badge badge-info" id="span-telephone_number">{{$child->date_of_birth }}</span></h5>
                                          {{-- <a href="{{url('/infochild/{id}')}}" class="btn btn-primary" id="info-child">المزيد</a> --}}
                                          </div>
                                      </div>
                                      <br>
                                      
                                     
                                  </div>
                          
                          
                          
                                  <div class=" col-xl-8">
                                      <div >
                                      <div class="col" id="exceptVaccinations">
                                          <h3><span class="badge badge-success">التطعيمات المئخودة</span></h3>
                                          <table class="table table-dark">
                                              <thead>
                                              <tr>
                                                  <th scope="col">اسم الجرعة</th>
                                                  <th scope="col">موعد الجرعة</th>
                                                  <th scope="col">موقع التطعيم</th>
                                                  <th scope="col">تاريخ التطعيم</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                              
                                                  @foreach ($child->childfiles as $childfile)
                                                  {{-- <form action="/accept-order/{{$vaccination->id}}" method="post">
                                                  @csrf --}}
                                                  @foreach ($childfile->vaccinations as $item)
                          
                                                  <td>{{$item->name}}</td>
                                                  <td>{{$item->time->dose_time}}</td>
                                                  {{-- <td>{{$item->users->name}}</td>  --}}
                          
                                                  @endforeach
                                                 
                                                  <td>{{$childfile->user->name }}</td>
                                                  <td>{{$childfile->created_at->format('d-m-yy') }}</td>
                                                      
                                                      </tr>
                                                  {{-- </form> --}}
                                                  @endforeach
                                              
                                              
                                              </tbody>
                                          </table>
                                          {{-- {{$exceptVaccinations->links()}} --}}
                                      </div>
                          
                                      <div class="col" id="onlyVaccinations">
                          
                          
                                          <h3><span class="badge badge-danger">التطعيمات الغير مئخودة</span></h3>
                                          <table class="table table-dark">
                                              <thead>
                                              <tr>
                                                  {{-- <th scope="col">رقم اsلجرعة</th> --}}
                                                  <th scope="col">اسم الجرعة</th>
                                                  <th scope="col">موعد الجرعة</th>
                                               
                                              </tr>
                                              </thead>
                                              <tbody>
                                              
                                                  @foreach ($onlyVaccinations as $vaccination)
                                                  {{-- <form action="/accept-order/{{$vaccination->id}}" method="post">
                                                  @csrf --}}
                                                      <tr>
                                                      {{-- <th scope="row">{{$vaccination->id}}</th> --}}
                                                      <td >{{$vaccination->name}}</td>
                                                      <td>{{$vaccination->time->dose_time}}</td>
                                                      {{-- <td> <span id="">.</span></td> --}}
                                                      
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


     
                           
                        </div>
                    </div>
                </div>
           
        </div>

    
    
        </div>
        <!--/ prising_area  -->


    
@endsection