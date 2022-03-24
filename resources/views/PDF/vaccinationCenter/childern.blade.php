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
        <th style="text-align: center;" >الرقم </th>
        <th style="text-align: center;" >الاسم</th>
        <th style="text-align: center;" >تاريخ الميلاد</th>
        <th style="text-align: center;" > رقم ولي الامر</th>
        <th style="text-align: center;" > تاريخ التسجيل</th>


      </tr>
    </thead>
    <tbody>



          @foreach ($children  as $child)
          <tr>
                <td style="text-align: center;" >{{$child->id}}</td>
                <td style="text-align: center;" >{{$child->name}}</td>
                <td style="text-align: center;" >{{$child->date_of_birth}}</td>
                <td style="text-align: center;" >{{$child->telephone_number}}</td>
                <td style="text-align: center;" >{{$child->created_at->format('d-m-Y')}}</td>
            </tr>
          @endforeach

        </tbody>
      </table>

</body>
</html>
