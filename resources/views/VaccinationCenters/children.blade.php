@extends('VaccinationCenters/master')
@section('body')

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">رقم الطفل</th>
        <th scope="col">اسم الطفل</th>
        <th scope="col">المواليد</th>
        <th scope="col"> مكان الميلاد</th>
        <th scope="col">رقم ولي الامر</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($children as $child)

            <tr id="row{{$child->id}}">
            <th scope="row" id="id{{$child->id}}">{{$child->id}}</th>
              <td id="name{{$child->id}}">{{$child->name}}</td>
              <td id="date_of_birth{{$child->id}}">{{$child->date_of_birth }}</td>
              <td id="home_adress{{$child->id}}">{{$child->home_adress }}</td>
              <td id="telephone_number{{$child->id}}">{{$child->telephone_number }}</td>
              <td>
                <button type="button" class="btn btn-warning" onclick="show_for_edit({{$child->id}})" data-toggle="modal" data-target="#staticBackdrop">

                  تعديل
                  <i class="fas fa-user-edit"></i>
                </button>
              </td>

              <td>
              <a href="/infochild?id={{$child->id}}" class="btn btn-primary" >
                عرض
                <i class="far fa-eye"></i>

              </a>

              </td>
              <td>
                <button type="button" class="btn btn-light"  data-toggle="modal" onclick="chick_pefor_delete({{$child->id}})" data-target="#delete_Child-id">
                  طباعة
                  <i class="fas fa-cloud-download-alt"></i>

                </button>
              </td>
            </tr>

          @endforeach


    </tbody>
  </table>
  {{$children->links()}}


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <div class="card">

          <!-- Card body -->
          <div class="card-body">
            <div id="done">

            </div>
          <!-- Material form register -->



            <input type="hidden" id="id" name="id">
            <!-- Material input text -->
              <div class="md-form">
                  <label for="name" class="font-weight-light">اسم الطفل</label>
                  <input type="text" id="name" class="form-control " >

              </div>

              <!-- Material input email -->
              <div class="md-form">
              <label for="date_of_birth" class="font-weight-light">مواليد الطفل</label>
              <input type="Date" id="date_of_birth" class="form-control" >

              </div>
              <div class="md-form ">
                <label for="home_adress">العنوان</label>
                <select id="home_adress" class="form-control">

                  @foreach ($cities as $city)

                <option  value="{{$city->name}}">{{$city->name}}</option>
                @endforeach

                </select>
              </div>

              <div class="md-form">
                  <label for="telephone_number" class="font-weight-light">رقم ولي الامر</label>
                  <input type="text" id="telephone_number" class="form-control" >

              </div>
          <div id="error">

          </div>
          <!-- Material form register -->

          </div>
          <!-- Card body -->

      </div>
      <!-- Card -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeEdit">اغلاق</button>
        <button type="button" class="btn btn-warning"  onclick="edit()"  id="addChildren" >تعديل</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="delete_Child-id" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <input type="hidden" id="idDelete">
       <h4>هل تود طباعة تقرير علي الطفل <span class="badge badge-warning" id="nameDelete">Warning</span> </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal" id="closeDelete">الغاء</button>
        <a type="a" class="btn btn-light" >طباعة</a>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
        <script src="{{asset('js/vaccinationCenters/children.js')}}"></script>
@endsection
