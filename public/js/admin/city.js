
$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
});



function addcity()
 {
   var name = document.getElementById('cityname').value;

    var data= "name="+name;
  $.ajax({
    type:'POST',
    url:'/add-city',
    data:data,



    success:function(data){
        $('#success-alert').show();
        document.getElementById('success-alert').innerHTML=data.succeful;
        
        document.getElementById('name').value ="";
     
    },

    error:function(data){
      var obj = JSON.parse(data.responseText);
      var message ="تاكد من ادخال ";
    
        if(obj.hasOwnProperty('name'))
          message +=" الاسم";
      
      $('#danger-alert').show();
      document.getElementById('danger-alert').innerHTML= message;
      setTimeout(function() {
        $('#danger-alert').fadeOut('fast');
         }, 1000);

    }

  });

 }









 function editCity(id) {
 var cityName = document.getElementById("name"+id).innerHTML;  

 document.getElementById('editCityName').value= cityName; 
 document.getElementById('editCityId').value= id; 


 }

function updateCity()
{
var name =   document.getElementById('editCityName').value;
var id =   document.getElementById('editCityId').value;
var data= "name="+name+"&id="+id;
console.log(data);
$.ajax({
  type:'POST',
  url:'/update-city/'+id,
  data:data,

  success:function(data){
    document.getElementById("name"+id).innerHTML =name;
   
  },

  error:function(data){
  
    console.log("error");
  }

});


}













 function cleaning() {
  document.getElementById('done').innerHTML=""
  document.getElementById('error').innerHTML=""
}

function refresh() {
  window.location.reload(true);

}

