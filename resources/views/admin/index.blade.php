@extends('admin/master')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
       <div class="card-header">
         <h4> المراكز الصحية <a href="{{url('/users')}}" class="badge badge-danger" id="notification-child">{{$users->count()}}</a></h4>
       </div>
      
      </div>

    </div>
    <div class="col">

      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header">
        <h4>
           طلبات الجرعات  <a href="{{url('admin/requsts')}}" class="badge badge-danger">{{$orders->count()}}</a>
        </h4>
      </div>
      </div>

    </div>
    <div class="col">

    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header">
      <h4>التطعيمات <a href="{{url('admin/vaccinations')}}" class="badge badge-danger">{{$vaccinations->count()}}</a></h4>
    </div>
    </div>

    </div>
 
  </div>
</div>

    

<img src="image/t.jpg" width="80%">
@endsection