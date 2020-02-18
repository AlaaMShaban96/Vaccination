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
        <th style="text-align: center;" > الكمية المرسلة </th>
        <th style="text-align: center;" > الكمية المستلمة </th>
        <th style="text-align: center;" > تاريخ الارسال</th>
        <th style="text-align: center;" > تاريخ الاستلام </th>
        <th style="text-align: center;" >  حالة الطلب </th>
       
      </tr>
    </thead>
    <tbody>
        
           
            
          @foreach ($orders  as $order)
          <tr>
                <td style="text-align: center;" >{{$order->id}}</td>
                <td style="text-align: center;" >{{$order->vaccination->name}}</td>
                <td style="text-align: center;" >{{$order->vaccination->dose_time}}</td>
                <td style="text-align: center;" >{{$order->quantity}}</td>
                <td style="text-align: center;" >{{$order->response_quantity}}</td>
                <td style="text-align: center;" >{{$order->created_at->format('d-m-yy')}}</td>
                <td style="text-align: center;" >{{$order->updated_at->format('d-m-yy')}}</td>
                <td style="text-align: center;" >{{$order->status ==3 ? 'تم الاستلام' : 'قيد الانتظار..'}}</td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
    
</body>
</html>