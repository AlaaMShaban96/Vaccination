@extends('index/master')

@section('content')
    


    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-6">
                        <div class="slider_text ">
                            <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s" >تطعيماتي <br>
                               طفلك في ايدي امينة</h3>
                            <div class="video_service_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                <a href="#" class="boxed-btn3">حملةالان</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="phone_thumb wow fadeInDown" data-wow-duration="1.1s" data-wow-delay=".2s">
                            <img src="{{ asset('index/img/ilstrator/phone.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <h3>احفظ وقتك و سلامة طفلك  <br>
                                استعمل تطعيماتي</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                        <div class="thumb">
                                <img src="{{ asset('index/img/icon/2.svg')}}" alt="">
                        </div>
                        <h3>التعرف علي اماكن توفر <br> التطعيمات</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                        <div class="single_service text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                                <div class="thumb">
                                        <img src="{{ asset('index/img/icon/1.svg')}}" alt="">
                                </div>
                                <h3>مراقبة ملف طفلك <br> 
                                        عن بعد</h3>
                            </div>
                </div>
                <div class="col-lg-4 col-md-4">

                            <div class="single_service text-center wow fadeInUp " data-wow-duration=".8s" data-wow-delay=".6s">
                                <div class="thumb">
                                        <img src="{{ asset('index/img/icon/3.svg')}}" alt="">
                                </div>
                                <h3>التعرف علي التطعيمات المتوفرة في
                                        المراكز الصحية</h3>
                            </div>
                </div>
            </div>
        </div>
    </div>


    @endsection