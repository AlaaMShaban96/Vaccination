<!DOCTYPE html>
<html  dir="rtl" lang="ar" >
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <style>
        body {
          font-family: DejaVu Sans, sans-serif;
        font-size:11px; }
        thead{

          background-color:lavender;
        }
        table{
          width: 100%;
          border-style: ridge;
        }
      </style>
</head>
<body  dir="rtl" >

  <h2 style=" text-align: center" > نظام الرعاية الصحية</h2>

  <table border="1">
    <thead>
      <tr>
        <th style="text-align: center;" >رقم الجرعة</th>
        <th style="text-align: center;" >اسم الجرعة</th>
        <th style="text-align: center;" >موعد الجرعة</th>
        <th style="text-align: center;" > الكمية المستلمة </th>
        <th style="text-align: center;" > تاريخ الاستلام </th>
      </tr>
    </thead>
    <tbody>



          @foreach ($vaccinations  as $vaccin)
          <tr>
                <td style="text-align: center;" >{{$vaccin->id}}</td>
                <td style="text-align: center;" >{{$vaccin->name}}</td>
                <td style="text-align: center;" >{{$vaccin->time->dose_time}}</td>
                <td style="text-align: center;" >{{$vaccin->users()->where('user_id',auth()->user()->id)->first()->pivot->quantity}}</td>
                <td style="text-align: center;" >{{$vaccin->updated_at->format('d-m-Y')}}</td>
            </tr>
          @endforeach

        </tbody>
      </table>

</body>
</html>
