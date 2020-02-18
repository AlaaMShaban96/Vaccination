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
<p> السادة مركز- {{$user->name}}</p>
<p>يمكنك الان تسحيل الدخول بستخدام كلمة السر الجديدة</p>
<p>الرمز الجديد هو {{$data['password']}}</p>
<p>بعد تسحيل الدخول ننصحكم بتغير كلمة السر لدواعي امنية</p>
<p>إدارة النظام</p>

    
</body>
</html>