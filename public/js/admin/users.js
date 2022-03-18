$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
});


function add_user() 
{
  var name  = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var city_id = document.getElementById('city_id').value;
  var phone_number = document.getElementById('phone_number').value;
  var account_type = document.getElementById('account_type').value;

var data = ("name="+name+"&password="+password+"&email="+email+"&city_id="+city_id+"&phone_number="+phone_number+"&account_type="+account_type);

$.ajax({
  type:'POST',
  url:'/add-user',
  data:data,



  success:function(data){
    $('#danger-alert').hide();
    $('#success-alert').show();
      document.getElementById('success-alert').innerHTML="تمت إضافة المستخدم  "+name+" بنجاح";
  

     
  },

  error:function(data){
    $('#success-alert').hide();
    var obj = JSON.parse(data.responseText);
   var message ="تاكد من ادخال ( ";
  
     if(obj.errors.hasOwnProperty('name'))
       message +=" الاسم";
       
       if(obj.errors.hasOwnProperty('email'))
       message +="- البريد الالكتروني";

       if(obj.errors.hasOwnProperty('password'))
       message +="- كلمة المرور";

       if(obj.errors.hasOwnProperty('phone_number'))
       message +="- رقم الهاتف";

       if(obj.errors.hasOwnProperty('city_id'))
       message +="- العنوان";

       message +=")";
    
   $('#danger-alert').show();
    document.getElementById('danger-alert').innerHTML= message;
    


  }

});    
}


function set_user_id(id) {
  document.getElementById('disactive_user_id').value = id;
  
}
function disActive()
{
  var id  = document.getElementById('disactive_user_id').value;
  $.ajax({
      type:'POST',
      url:'/disactive-user/'+id,
      
  
  
  
      success:function(data){
        
          document.getElementById('status'+id).innerHTML = "غير مفعل";

         
      },
  
    
  
    });    


}


function active(id)
{

  $.ajax({
      type:'POST',
      url:'/active-user/'+id,
      
  
  
  
      success:function(data){
        
          document.getElementById('status'+id).innerHTML = "مفعل";

          refresh();
      },
  
    
  
    });    


}



function edit_user(id)
{
var name = document.getElementById("name"+id).innerHTML;  
var email = document.getElementById("email"+id).innerHTML;  
var address = document.getElementById("city_name"+id).innerHTML;  
var phone_number = document.getElementById("phone_number"+id).innerHTML;  

  document.getElementById("edituserid").value = id;        
  document.getElementById("editname").value = name;        
  document.getElementById("editemail").value = email;       
  document.getElementById("editpassword").value = 0;     
  document.getElementById("editphone_number").value = phone_number;  

var x = document.getElementById("editcity_id");
  
var i;
for (i = 0; i < x.options.length; i++) {
  
   if( x.options[i].text == address ){
     x.options[i].setAttribute("selected", "selected");
   }
  
  }
}


function update_user() {
var id = document.getElementById("edituserid").value;        
var name = document.getElementById("editname").value;        
var email = document.getElementById("editemail").value;       
var password = document.getElementById("editpassword").value;     
var phone_number = document.getElementById("editphone_number").value;  
var city_id = document.getElementById("editcity_id").value; 

var data= "name="+name+"&id="+id+"&email="+email+"&password="+password+"&phone_number="+phone_number+"&city_id="+city_id;

$.ajax({
  type:'POST',
  url:'/update-user/'+id,
  data:data,

  success:function(data){
    $('#editdanger-alert').hide();
    $('#editsuccess-alert').show();
    document.getElementById('editsuccess-alert').innerHTML="تمت تعديل بيانات حساب ( "+name+"   ) بنجاح ";
     
  },

  error:function(data){
  
    var obj = JSON.parse(data.responseText);
    var message ="تاكد من ادخال ( ";
   
      if(obj.errors.hasOwnProperty('name'))
        message +=" الاسم";
        
        if(obj.errors.hasOwnProperty('email'))
        message +="- البريد الالكتروني";
 
        if(obj.errors.hasOwnProperty('password'))
        message +="- كلمة المرور";
 
        if(obj.errors.hasOwnProperty('phone_number'))
        message +="- رقم الهاتف";
 
        if(obj.errors.hasOwnProperty('city_id'))
        message +="- العنوان";
 
        message +=")";
        $('#editsuccess-alert').hide();
    $('#editdanger-alert').show();
     document.getElementById('editdanger-alert').innerHTML= message;
  }

});


}

function refresh() {
window.location.reload(true);

}