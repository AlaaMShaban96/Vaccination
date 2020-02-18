<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
@yield('head')
<link rel="stylesheet" href="{{asset('css/master.css')}}">
<style>
  body {
      font-family:'Tajawal';font-size: 20px;
  }
</style>

<title>مراكز تطعيمات</title>
   
    <style>
    
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active" style="color:white;"> {{auth()->user()->name}} </li>
                {{-- <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li> --}}
            </ul>
            <form class="form-inline my-2 my-md-0"> </form>
        </div>
    </nav>
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper"> 
            <ul class="sidebar-nav">
                <li > <a href="{{ url("/user-profile") }}"> حسابي </a> </li>
                <li> <a href="{{url('/user/index')}}">لوحة التحكم</a> </li>
                <li> <a href="{{url('/send')}}">ارسال طلب</a> </li>
                <li> <a href="{{url('/orders')}}"> طلبات المرسلة</a> </li>
                <li> <a href="{{url('/receive')}}">استلام شحنة</a> </li>
                <li> <a href="{{url('/my-vaccination-available')}}"> التطعيمات </a> </li>
                <li> <a href="{{url('/infochildren')}}">الاطفال</a> </li>
                {{--  <a href="{{url('/reports')}}">تقرير</a> </li> --}}
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
               تسجيل الخروج
              </a> </li>   
              <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
               
            </ul>
        </div> <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            
               @yield('body') 
             
            </div>
        </div> <!-- /#page-content-wrapper -->
    </div> <!-- /#wrapper -->
    <!-- Bootstrap core JavaScript -->
   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
    <script>
       


      $(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $(window).resize(function(e) {
          if($(window).width()<=768){
            $("#wrapper").removeClass("toggled");
          }else{
            $("#wrapper").addClass("toggled");
          }
        });
      });

        
    </script>
    

@yield('script')
</body>
</html>