$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
});



function addVaccinations() 
{
    var VaccinationName  = document.getElementById('VaccinationName').value;
    var VaccinationDate = document.getElementById('VaccinationDate').value;
    var VaccinationQuantity = document.getElementById('VaccinationQuantity').value;

var data = ("name="+VaccinationName+"&quantity="+VaccinationQuantity+"&time_id="+VaccinationDate);
if(VaccinationQuantity<0)
{
  $('#success-alert').hide();
      $('#danger-alert').show();
      document.getElementById('danger-alert').innerHTML = "لا يمكن إدخال كمية بالسالب !";
} 
else {
$.ajax({
    type:'POST',
    url:'/add-vaccinations',
    data:data,



    success:function(data){
      $('#danger-alert').hide();
      $('#success-alert').show();
        document.getElementById('success-alert').innerHTML="تمت إضافة التطيعمة "+VaccinationName+" بنجاح";
        document.getElementById('VaccinationName').value ="";
        document.getElementById('VaccinationQuantity').value ="";

       
    },

    error:function(data){
      var obj = JSON.parse(data.responseText);
      var message ="تاكد من ادخال - ";
    
        if(obj.errors.hasOwnProperty('name'))
          message +=" الاسم -";
         
          if(obj.errors.hasOwnProperty('quantity'))
          message +=" الكمية";
      $('#success-alert').hide();
      $('#danger-alert').show();
      document.getElementById('danger-alert').innerHTML= message;
      


    }

  }); 
}  


}

function editVaccinations(id) {

  var VaccinationName = document.getElementById("name"+id).innerHTML;  
  var VaccinationDate = document.getElementById("dose_time"+id).innerHTML;  
  var VaccinationQuantity = document.getElementById("quantity"+id).innerHTML;  

  document.getElementById('VId').value= id; 
  document.getElementById('VName').value= VaccinationName; 
  var VDate = document.getElementById('VDate');
  
 
  var x = document.getElementById("VDate");
  
  var i;
  for (i = 0; i < x.options.length; i++) {
    
     if( x.options[i].text == VaccinationDate ){
       x.options[i].setAttribute("selected", "selected");
     }
     
  }
 

  // document.getElementById('VDate').value = VaccinationDate; 
  document.getElementById('VQuantity').value= VaccinationQuantity; 
  
  }

  
function updateVaccinations()
{
  console.log("edit here ");
  var id = document.getElementById('VId').value; 
  var name = document.getElementById('VName').value; 
  var dose_time = document.getElementById('VDate').value; 
  var quantity = document.getElementById('VQuantity').value; 
var data="name="+name+"&id="+id+"&time_id="+dose_time+"&quantity="+quantity;

if(quantity<0)
{
  $('#editsuccess-alert').hide();
      $('#editdanger-alert').show();
      document.getElementById('editdanger-alert').innerHTML = "لا يمكن إدخال كمية بالسالب !";
} 
else {
 $.ajax ({
   type:'POST',
   url:'/update-vaccinations/'+id,
   data:data,

   success:function(data){
    $('#editdanger-alert').hide();
    $('#editsuccess-alert').show();
    document.getElementById('editsuccess-alert').innerHTML="تم تعديل البيانات بنجاح";
document.getElementById("name"+id).innerHTML = name ;    
document.getElementById("dose_time"+id).innerHTML = dose_time ;    
document.getElementById("quantity"+id).innerHTML = quantity ;    

  },

  
  error:function(data){
    var obj = JSON.parse(data.responseText);
    var message ="تاكد من ادخال - ";
  
      if(obj.errors.hasOwnProperty('name'))
        message +=" الاسم -";
       
        if(obj.errors.hasOwnProperty('quantity'))
        message +=" الكمية";
    $('#editsuccess-alert').hide();
    $('#editdanger-alert').show();
    document.getElementById('editdanger-alert').innerHTML= message;
  }



 });
}
 
}

function refresh() {
  window.location.reload(true);

}
