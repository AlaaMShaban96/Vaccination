@extends('index/master')

@section('content')
    


    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>تطعيماتي</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <!-- about  -->
    <div class="features_area ">
        <div class="container">
            <div class="features_main_wrap">
                    <div class="row  align-items-center">
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <div class="features_info2">
                                    <h3> تحديت باخر الاخبار</h3>
                                    <p>يصلك اول باول اخبار الشحنات  التطعيمات المستلمة الب المراكز الصحية</p>
                                    {{-- <div class="about_btn">
                                        <a class="boxed-btn4" href="#">Download Now</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1 col-md-6 ">
                                <div class="about_draw wow fadeInUp"  data-wow-duration=".7s" data-wow-delay=".5s">
                                    <img src="{{asset('index/img/ilstrator_img/draw.png')}}" alt="">
                                </div>
                            </div>
                    </div>
            </div>
            <div class="features_main_wrap">
                    <div class="row  align-items-center">
                            <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1 col-md-6">
                                <div class="about_image wow fadeInLeft" data-wow-duration=".4s" data-wow-delay=".3s">
                                    <img src="{{asset('index/img/ilstrator_img/phone.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="features_info">
                                    <h3 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >سهولة في  
                                             البحت </h3>
                                    <p class="wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s"  >يمكنك الان عن طريق التطبيق البحت عن:</p>
                                    <ul>
                                        <li class="wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s" > مراكز الصحية </li>
                                        <li class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".6s" > تطعيمات </li>
                                        {{-- <li class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s" > Voluptatem quia voluptas sit aspernatur.</li> --}}
                                    </ul>
            
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- about  -->
    <div class="features_area ">
        <div class="container">
            <div class="features_main_wrap">
                    <div class="row  align-items-center">
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <div class="features_info2">
                                    <h3>مراقية ملف طفلك</h3>
                                    <p>من خلال التطبيق يمكنك مراقبة التطعيمات التي اخدها او التي سباخدها طفلك</p>
                                   
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1 col-md-6 ">
                                <div class="about_draw wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                                    <img src="{{asset('index/img/ilstrator_img/draw.png')}}" alt="">
                                </div>
                            </div>
                    </div>
            </div>
         
        </div>
    </div>
    <!--/ about  -->

    <!-- service_area_2  -->
    <div class="service_area_2 plus_margin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration=".4s" data-wow-delay=".5s">
                    <div class="man_thumb">
                        <img src="{{asset('index/img/ilstrator_img/man_walk.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6 ">
                    <div class="mobile_screen wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".5s">
                        <img src="{{asset('index/img/ilstrator_img/mobile_screen.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="service_content_wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single_service  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                            <span>01</span>
                            <h3>افتح متجر قوقل</h3>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_service  wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                            <span>02</span>
                            <h3>"اكتب في خانة البحث "<b>تطعيماتي</b></h3>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4  wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                        <div class="single_service">
                            <span>03</span>
                            <h3>استمتع بكل الخدمات</h3>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area_2  -->

    <!-- productivity_area  -->
    <div class="productivity_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-12 col-lg-6">
                    <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">من الان لاداعي للقلق <br>
                            حمل تطعيماتي</h3>
                </div>
                <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="app_download wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                        <a href="#" >
                                <img src="{{asset('index/img/ilstrator/app.svg')}}" alt="">
                        </a>
                        <a href="#">
                                <img src="{{asset('index/img/ilstrator/play.svg')}}" alt="">
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ productivity_area  -->

    @endsection