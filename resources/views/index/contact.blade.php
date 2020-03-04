@extends('index/master')

@section('content')
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>اتصل بنا</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <iframe width="100%" height="600" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.940291133636!2d13.206625115165679!3d32.87329918094301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a892fcb32eca83%3A0x619d434092d48989!2sCollege%20Of%20Electronic%20Technology!5e0!3m2!1sen!2sly!4v1583271279227!5m2!1sen!2sly" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br />
                   
                </div>
    
    
                <div class="row">
                   
                   
                    <div class="col">
                        <div class="media contact-info">
                          
                            <div class="media-body">
                                <h3>طرابلس ,طرابلس</h3>
                                <p>شارع النصر</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="media contact-info">
                          
                            <div class="media-body">
                                <h3>18927780208</h3>
                                <p>وقت الدوام من 9 صباحا الي 2 مساءا</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="media contact-info">
                           
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>ارسل لنا اي شكوي علي الاميل</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
   
    
    
        <!--contact js-->
   
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
        </script>
    </body>
    
    </html>