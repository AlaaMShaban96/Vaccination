{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>

    <title>تغير كلمة السر</title>
    <style>
body {
      font-family:'Tajawal';font-size: 22px;
  }
@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}

    </style>
</head>
<body>
    <div class="wrapper">
        <form class="form-signin" method="POST" action="{{ url('send-password') }}"> 
            @csrf      
          <h2 class="form-signin-heading">ادخل البريد الالكتروني</h2>
          <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني " required="" autofocus="" />
          <br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">تغير كلمة السر</button>   
          @if ($errors->any())
          <div class="btn-block  btn btn-lg btn-danger" style="disply:non;">
          @foreach ($errors->all() as $error)
              <div>{{$error}}</div>
          @endforeach
          </div>
      @endif
        </form>
        
      </div>

</body>
</html> --}}

@extends('auth/master')

@section('content')
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
              <div class="col-ml-6" >
                <img src="{{asset('index/img/ilstrator_img/email.svg')}}" alt="" style="width: 42%;margin-left: 27%;">

              </div>
                <div class="col-ml-6 ml-5" >
                    <div class="bradcam_text">
                     
                      <form class="form-signin" method="POST" action="{{ url('send-password') }}"> 
                        @csrf      
                      <h2 class="form-signin-heading">ادخل البريد الالكتروني</h2>
                      <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني " required="" autofocus="" />
                      <br>
                      <button class="btn btn-lg btn-primary btn-block" type="submit">تغير كلمة السر</button>   
                      @if ($errors->any())
                      <div class="btn-block  btn btn-lg btn-danger" style="disply:non;">
                      @foreach ($errors->all() as $error)
                          <div>{{$error}}</div>
                      @endforeach
                      </div>
                      @endif
                    </form>
                      
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
