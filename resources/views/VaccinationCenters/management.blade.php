@extends('VaccinationCenters/master')
@section('body')
<img src="{{asset('image/management.jpg')}}" style="width: 20%;margin-left: 38%;margin-top: 3%;">
<div class="row">
    <div class="col-8">
        <h3><span class="badge badge-success">ارسال طلب شحنة</span></h3>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">اسم الجرعات</th>
                <th scope="col">موعد الجرعة</th>
                <th scope="col">الكمية</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                <form action="" method="post">
                    <tr>
                        <th scope="row">1</th>
                            <td>Pvc</td>
                            <td>اربعه اشهر</td>
                            <td><input type="number" aria-label="Checkbox for following text input"></td>
                            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>  
                    </tr>
                    
                    <tr>
                        <th scope="row">1</th>
                            <td>Pvc</td>
                            <td>اربعه اشهر</td>
                            <td><input type="number" aria-label="Checkbox for following text input"></td>
                            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>  
                    </tr>
                    
                    <tr>
                        <th scope="row">1</th>
                            <td>Pvc</td>
                            <td>اربعه اشهر</td>
                            <td><input type="number" aria-label="Checkbox for following text input"></td>
                            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>  
                    </tr>
                    
                    <tr>
                        <th scope="row">1</th>
                            <td>Pvc</td>
                            <td>اربعه اشهر</td>
                            <td><input type="number" aria-label="Checkbox for following text input"></td>
                            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>  
                    </tr>
                    
                    <tr>
                        <th scope="row">1</th>
                            <td>Pvc</td>
                            <td>اربعه اشهر</td>
                            <td><input type="number" aria-label="Checkbox for following text input"></td>
                            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>  
                    </tr>
                </form>
            </tbody>
          </table>

    </div>

    <div class="col-4">
        <h3><span class="badge badge-warning">الموافقة علي وصول الشحنة</span></h3>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">اسم الجرعة</th>
                <th scope="col">كمية الجرعات</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <form action="" method="post">
                    <td>PVC</td>
                    <td>10</td>
                    <td><button type="submit" class="btn btn-success">تم الاستلام</button></td>
                </form>
              </tr>
              <tr>
                <th scope="row">1</th>
                <form action="" method="post">
                    <td>PVC</td>
                    <td>10</td>
                    <td><button type="submit" class="btn btn-success">تم الاستلام</button></td>
                </form>
              </tr>
              <tr>
                <th scope="row">1</th>
                <form action="" method="post">
                    <td>PVC</td>
                    <td>10</td>
                    <td><button type="submit" class="btn btn-success">تم الاستلام</button></td>
                </form>
              </tr>
              <tr>
                <th scope="row">1</th>
                <form action="" method="post">
                    <td>PVC</td>
                    <td>10</td>
                    <td><button type="submit" class="btn btn-success">تم الاستلام</button></td>
                </form>
              </tr>
              
            </tbody>
          </table>
    </div>
</div>
@endsection