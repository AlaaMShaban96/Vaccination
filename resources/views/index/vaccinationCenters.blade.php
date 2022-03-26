@extends('index/master')

@section('content')


    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>المراكز الصحية</h3>
                        <form  action="{{url('/vaccinationCenters')}}" method="post" >
                            @csrf
                              <div class="input-group input-group-lg">
                                <select class="js-example-basic-single form-control" aria-label="Sizing example input" name="user_id">
                                    {{-- <option value="AL">Alabama</option>
                                      ...
                                    <option value="WY">Wyoming</option> --}}
                                  </select>
                                {{-- <input type="number" name="id" placeholder="Enter ادخل رقم الطفل و تضغظ علي " class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"> --}}

                                <button type="submit" class="btn btn-info"  >بحت</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

        <!-- prising_area  -->
        <div class=" minus_padding" style=" direction: rtl;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
                            {{-- <h3>بحث عن ملف طفلك</h3> --}}


                            @if (empty($user)|| !isset($user))
                                <img src="image/errors/noData.jpg" width="50%" style="margin-right: 22%;">
                            @else
                            <table class="table table-dark" id="Table1">
                                <thead>
                                    <tr>
                                    <th scope="col">رقم الجرعة</th>
                                    <th scope="col">اسم الجرعة</th>
                                    <th scope="col">موعد الجرعة</th>
                                    {{-- <th scope="col">الكمية</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->vaccinations  as $vaccination)
                                    <tr>
                                        <th >{{$vaccination->id}}</th>
                                        <td >{{$vaccination->name}}</td>
                                        <td >{{$vaccination->time->dose_time}}</td>
                                        {{-- <td >{{$vaccination->users()->where('user_id',auth()->user()->id)->first()->pivot->quantity}}</td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>

        </div>



        </div>
        <!--/ prising_area  -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    var array = @json($users);
    var data=[{id: "",text:""}];
    array.forEach(element => {
        data.push( {
                    id: element.id,
                    text: element.name
                });
    });
    console.log(data);
    $(".js-example-basic-single").select2({
    data: data
    });
    // // $(document).ready(function() {
    //     $('.js-example-basic-single').select2();
    // // });
</script>
@endsection
{{-- @push('script') --}}

{{-- @endpush --}}
