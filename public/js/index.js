

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
});
      

$('#search').click(function () {
   var id =$('#childeId').val();
   $.ajax({
    type:'POST',
    url:'/getchild/'+id,
    success:function(data){
      // console.log(data);
      $('#baby-info').show();


      document.getElementById('info-child').setAttribute('href','/infochild/'+data.child.id);

      document.getElementById('span-id').innerHTML=data.child.id;
      document.getElementById('span-name').innerHTML=data.child.name;
      document.getElementById('span-home_adress').innerHTML=data.child.home_adress;
      document.getElementById('span-telephone_number').innerHTML=data.child.telephone_number;
      $('#vaccination_table').empty();
      // document.getElementById('vaccination_table').innerHTMl="";
      var content = '<h3><span class="badge badge-warning">الجرعات الغير مئخودة</span></h3><table class="table"> <thead><tr><th>رقم الجرعة</th><th>اسم</th><th> الفتره</th><th></th><th></th></tr></thead><tbody>';
      // console.log(data.vaccinations);
     
      var size = Object.keys( data.vaccinations).length;
    
      console.log(data.vaccinations);
      data.vaccinations.vaccination.forEach(element => {

        content +=' <tr><th scope="row" id="id'+element.id+'">'+element.id+'</th><td id="name'+element.id+'">'+element.name+'</td><td id="dose_time'+element.id+'"> '+element.dose_time +'</td><td  id="take-'+element.id+'" ><input type="submit" class="btn btn-danger" value="اخذ الجرعة" onclick="take_a_dose('+element.id+')"/></td> <tr>';
      });
      content += " </tbody></table>";
      // document.getElementById('vaccination_table').innerHTMl=content;
      
      $('#vaccination_table').append(content);
    },
    error:function(data){
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

});

function take_a_dose(idv) {
 
  var vaccination_id =document.getElementById("id"+idv).innerHTML;
  var child_id =document.getElementById("span-id").innerHTML;
  

  var data="vaccination_id="+vaccination_id+"&child_id="+child_id;
  $.ajax({
    type:'POST',
    url:'/takedose',
    data:data,
    success:function(data){
      document.getElementById("take-"+idv).innerHTML="<span class='badge badge-pill badge-success'>تم اخد التطعيمة   </span>";
    }
  });
  
}


$('#addChildren').click(function(){

    var name =$('#name').val();
    
    var date_of_birth =$('#date_of_birth').val();
    var home_adress =$('#home_adress').val();
    var telephone_number =$('#telephone_number').val();
    var user_id =$('#user_id').val();

    var data="name="+name+"&date_of_birth="+date_of_birth
              +"&home_adress="+home_adress+"&telephone_number="+telephone_number
              +"&user_id="+user_id;
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
$('body').on('keydown', 'input, select', function(e) {
if (e.key === "Enter") {
    var self = $(this), form = self.parents('form:eq(0)'), focusable, next;
    focusable = form.find('input,a,select,button,textarea').filter(':visible');
    next = focusable.eq(focusable.index(this)+1);
    if (next.length) {
        next.focus();
    } else {
        form.submit();
    }
    return false;
}
});
// map(function ($vaccination) {return ['id'=>$vaccination->id,'name'=>$vaccination->name];});