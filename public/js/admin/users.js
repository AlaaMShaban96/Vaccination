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
console.log(data)
$.ajax({
    type:'POST',
    url:'/add-user',
    data:data,



    success:function(data){
      $('#success-alert').show();
        document.getElementById('success-alert').innerHTML="تمت إضافة المستخدم  "+name+" بنجاح";
        // document.getElementById('VaccinationName').value ="";
        // document.getElementById('VaccinationQuantity').value ="";

       
    },

    error:function(data){
   

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

function edit_user(id) {
  
}