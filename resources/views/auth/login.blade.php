
@extends('auth/master')

@section('content')
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <h1 style="text-align: center;margin-bottom: 0%; color:red;">هادة الصفحة خاصة لي مراكز التطعيم و مدير النظام</h1>

        <div class="container">
            <div class="row">
                
              <div class="col-ml-6" >
                <img src="{{asset('index/img/ilstrator_img/login.svg')}}" alt="" style="width: 42%;margin-left: 27%;">

              </div>
                <div class="col-ml-6 ml-5" >
                    <div class="bradcam_text">
                     
                        <form class="form-signin" method="POST" action="{{ route('login') }}"> 
                            @csrf      
                          <h2 class="form-signin-heading" style="color:whitesmoke;">الرجاء تسجيل الدخول</h2>
                          <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني " required="" autofocus="" />
                          <br>
                          <input type="password" class="form-control" name="password" placeholder="كلمة السر" required=""/>      
                       
                          <br>
                          <button class="btn btn-lg btn-primary btn-block" type="submit">تسجيل الدخول</button> 
                           
                          @if ($errors->any())
                          <div class="btn-block  btn btn-lg btn-danger" style="disply:non;">
                          @foreach ($errors->all() as $error)
                              <div>{{$error}}</div>
                          @endforeach
                          </div>
                      @endif
                  
                        <a href="{{route('password.request')}}" class="stret-link" style="color:crimson;">تسيت كلمة المرور</a>
                
                      
                        </form>
                        
                        
                  
                
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>