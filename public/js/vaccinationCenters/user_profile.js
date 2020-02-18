
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
      });
function update() {

 
  var phone_number =  document.getElementById('phone_number').value
  var password     =  document.getElementById('password').value
  var resetPassword=  document.getElementById('resetPassword').value

 var data= ('phone_number=' + phone_number +'&password=' + password +'&resetPassword='+ resetPassword );
 $.ajax({
    type:'POST',
    url:'/user-profile/edit/update',
    data:data,
    success:function(data){
        
        window.location.reload(true);
    },
    error:function(data){

      var obj = JSON.parse(data.responseText);
      var message="تاكد من ادخال ";
     
      console.log(obj);
       if (obj.hasOwnProperty('errors')) {
          if(obj.errors.hasOwnProperty('phone_number'))
            message+= " تاكد من ادخال رقم الهاتف وحجمة 10 ارقام";
      
          if(obj.errors.hasOwnProperty('password'))
            message+= "الرمز السري الحالي غير صحيحة";
      
            document.getElementById('errur').innerHTML=message;
            $("#errur").show();
            setTimeout(function() {
                $('#errur').fadeOut('fast');
            }, 2000);
       }
       
    }
});
    
}