<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>تطعيمات الاطفال</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
  
    <link rel="stylesheet" href="{{ asset('index/css/bootstrap.min.css')}}">
  
    <link rel="stylesheet" href="{{ asset('index/css/animate.min.css')}}">
    
    <link rel="stylesheet" href="{{ asset('index/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('index/css/style.css')}}">
    

    <!-- <link rel="stylesheet" href="css/responsive.css')}}"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header >
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <!-- <img src="img/logo.png" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav >
                                    <ul id="navigation">
                                    <li><a class="active" href="{{url('/')}}">الصفحة الرئسية</a></li>
                                    <li><a href="{{url('/app')}}">تطعيماتي</a></li>
                                    <li><a href="{{url('/myChildrenInfo')}}">طفلي</a></li>
        
                                    <li><a href="{{url('/about')}}">حول</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                <a  href="{{url('/login')}}">تسجيل الدخول</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

@yield('content')
     <!-- footer start -->
     <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                {{-- <a href="#">
                                    <img src="{{ asset('index/img/logo.png')}}" alt="">
                                </a> --}}
                                <h4 style="color:white;">تطعيماتي</h4>
                            </div>
                            <p>
                                اول تطبيق في ليبيا يوفر خدمات الاستفسار و المراقبة لي ملف طفلك

                            </p>
                           

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    خدماتنا
                            </h3>
                            <ul>
                                <li>التعرف علي اماكن التطعيمات</li>
                                <li>مراقبة ملف طفلك</li>
                                <li>التعرف علي التطعيمات في المراكز</li>
                              
                            </ul>

                        </div>
                    </div>
                    {{-- <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                   تحميل
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        ... تحميل للايفون قريبا

                                    </a>
                                </li>
                                <li><a href="#">
                                     تحميل للاندرويد 
                                    </a>
                                </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> جمبع حقوق النشر محفوظة لفريق AMteame
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- JS here -->

   
    <script src="{{ asset('index/js/vendor/jquery-1.12.4.min.js')}}"></script>
   
    <script src="{{ asset('index/js/bootstrap.min.js')}}"></script>
   
    <script src="{{ asset('index/js/wow.min.js')}}"></script>
    
    <script src="{{ asset('index/js/jquery.slicknav.min.js')}}"></script>
   
    

   

    <script src="{{ asset('index/js/main.js')}}"></script>
</body>

</html>