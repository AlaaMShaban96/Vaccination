 $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
});

function acceptOrder() 
{
  $('#error-order-massege').hide();
var id = document.getElementById("order-id").value;
var response_quantity = document.getElementById("response_quantity"+id).value;
data = "response_quantity="+response_quantity;
 if(response_quantity <= 0)
 {
  $('#error-order-massege').show();
  document.getElementById("error-order-massege").innerHTML = "يجب أدخال الكمية بقيمة موجبة !";
 }
 else
 {
  $.ajax({
    type:'POST',
    url:'/accept_order/'+id,
    data:data,


    success:function(data){
      window.location.reload(true);
    },

    error:function(data) {
      $('#error-order-massege').show();
      document.getElementById("error-order-massege").innerHTML = "الكمية المطلوبة غير متوفرة حاليا!";
    }

  }); 
}
}

function accept_dialog(id)
  {
   
    var name = document.getElementById("userName"+id).innerHTML;  
    var v = document.getElementById("vaccinationName"+id).innerHTML;  
      

    
    document.getElementById("accept-massege").innerHTML = "هل أنت متأكد من إرسال "+document.getElementById("response_quantity"+id).value+" شحنة من تطيعمة "+v+" إلى مركز "+name+" ؟";
    document.getElementById("order-id").value = id;

 }






function send() {

  
  var send_user = document.getElementById('send_user').value;
  var send_vaccination = document.getElementById('send_vaccination').value;
  var send_quantity = document.getElementById('send_quantity').value;

        var data="vaccination_id="+send_vaccination+"&response_quantity="+send_quantity+"&quantity="+send_quantity+"&user_id="+send_user+"&status=2";
       
        if(send_quantity<0)
        {
          $('#send-success').hide();
          $('#send-danger').show();
          document.getElementById('send-danger').innerHTML= "تأكد من إدخال كمية صالحة";
        }
        else {
$.ajax({
  type:'POST',
  url:'/send_order',
  data:data,



  success:function(){
    $('#send-danger').hide();
      $('#send-success').show();
      document.getElementById('send-success').innerHTML= "تم إرسال الشحنة بنجاح";
      document.getElementById('send_quantity').value = "";
      
   
  },

  error:function(data)
  {
    var obj = JSON.parse(data.responseText);
    var message ="تاكد من ادخال ";
  console.log(obj)
      if(obj.errors.hasOwnProperty('vaccination_id'))
        message +=" التطعيم";

        if(obj.errors.hasOwnProperty('quantity'))
        message +=" الكمية";

        if(obj.errors.hasOwnProperty('user_id'))
        message +=" اسم المركز";
        $('#send-success').hide();
    $('#send-danger').show();
    document.getElementById('send-danger').innerHTML= message;
    setTimeout(function() {
      $('#send-danger').fadeOut('fast');
       }, 5000);

  }

});   
        } 
}