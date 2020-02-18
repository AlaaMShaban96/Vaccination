

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
}); 



//this for deny enter any number just letters
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};


$('#search').click(function () {
   var id =$('#childeId').val();
   var data = "id="+id;
 if (id == "") {
  $('#baby-info').hide();
  $('#vaccination_table').empty();
  $("#errur").show();

  document.getElementById('errur').innerHTML='تأكد من ادخال رقم الطفل';
  setTimeout(function() {
    $('#errur').fadeOut('fast');
}, 2000);

 }else{

  $.ajax({
    type:'GET',
    url:'/getchild',
    data:data,
    success:function(data){
     
      $('#baby-info').show();


      // document.getElementById('form-child').setAttribute('action','/infochild/'+data.child.id);

      document.getElementById('span-id').innerHTML=data.child.id;
      document.getElementById('span-child-id').value =data.child.id;
      document.getElementById('span-name').innerHTML=data.child.name;
      document.getElementById('span-home_adress').innerHTML=data.child.home_adress;
      document.getElementById('span-telephone_number').innerHTML=data.child.telephone_number;
    
      console.log( document.getElementById('span-child-id').value)
    },
    error:function(data){
      var obj = JSON.parse(data.responseText);
      console.log(obj)
      $('#baby-info').hide();
      $('#vaccination_table').empty();
      if (data.status==404) {
        document.getElementById('errur').innerHTML='رقم الطفل غير موجود';
        $("#errur").show();
        setTimeout(function() {
            $('#errur').fadeOut('fast');
        }, 2000);
      }
      // console.log(data.responseJSON.message);
    },
    

  });

 }
  
});




$('#addChildren').click(function(){

    var name =$('#name').val();
    
    var date_of_birth =$('#date_of_birth').val();
    var home_adress =$('#home_adress').val();
    var telephone_number =$('#telephone_number').val();
    // var user_id =$('#user_id').val();

    var data="name="+name+"&date_of_birth="+date_of_birth
              +"&home_adress="+home_adress+"&telephone_number="+telephone_number;
  $.ajax({
    type:'POST',
    url:'/add-child',
    data:data,
    success:function(data){
      var notification_child = document.getElementById('notification-child').innerHTML;
    //  notification_child ++;
      document.getElementById('notification-child').innerHTML = (++ notification_child );
      
      document.getElementById('done').innerHTML =
        "<div class='alert alert-success'role='alert' >تم اضافة الطفل بنجاح رقم الطفل هو "+data.id+"</div>";

        document.getElementById('name').value ="";
        document.getElementById('date_of_birth').value ="";
        document.getElementById('home_adress').value ="";
        document.getElementById('telephone_number').value ="";
        document.getElementById('error').innerHTML=""

      },
      error:function(data){
        var obj = JSON.parse(data.responseText);
        var message="تاكد من ادخال ";
        document.getElementById('done').innerHTML=""
        if (obj.hasOwnProperty('errors')) {
            if(obj.errors.hasOwnProperty('date_of_birth'))
            message+= "- تاريخ الميلاد";
          if(obj.errors.hasOwnProperty('telephone_number'))
            message+= "- رقم ولي الامر";
          if(obj.errors.hasOwnProperty('home_adress'))
            message+= "- عنوان السكن";
          if(obj.errors.hasOwnProperty('name'))
            message+= "- اسم الطفل";
        }
            console.log(message);
            document.getElementById('error').innerHTML = 
            "<div class='alert alert-warning'role='alert' >"+ message +"</div>";
      }

    });
  });


function cleaning() {
  document.getElementById('done').innerHTML=""
  document.getElementById('error').innerHTML=""
}

    // هادا الكود عند الضغط علي زر الانتر يعمل كانه زر التاب
// $('body').on('keydown', 'input, select', function(e) {
// if (e.key === "Enter") {
//     var self = $(this), form = self.parents('form:eq(0)'), focusable, next;
//     focusable = form.find('input,a,select,button,textarea').filter(':visible');
//     next = focusable.eq(focusable.index(this)+1);
//     if (next.length) {
//         next.focus();
//     } else {
//         form.submit();
//     }
//     return false;
// }
// });
// map(function ($vaccination) {return ['id'=>$vaccination->id,'name'=>$vaccination->name];});