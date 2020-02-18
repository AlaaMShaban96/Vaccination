$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
});

function acceptOrder() 
{
  console.log("here");
  
  var id = document.getElementById("order-id").value;
  $.ajax({
    type:'POST',
    url:'/accept_order/'+id,



    success:function(data){
      window.location.reload(true);
    },

    error:function(data){
      $('#error-order-massege').show();

      document.getElementById("error-order-massege").innerHTML = "الكمية المطلوبة غير متوفرة حاليا!";

    }

  }); 
}

 function accept_massege(id)
  {
 var name = document.getElementById("userName"+id).innerHTML;  
 var v = document.getElementById("vaccinationName"+id).innerHTML;  
 var q = document.getElementById("orderQuantity"+id).innerHTML;  

document.getElementById("accept-massege").innerHTML = "هل أنت متأكد من إرسال "+q+" شحنة من تطيعمة "+v+" إلى مركز "+name+" ؟";
document.getElementById("order-id").value = id;
 }


function send() {
    
}