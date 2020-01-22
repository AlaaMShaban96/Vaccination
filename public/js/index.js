$('#baby-info').hide();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
      });
      $('#search').click(function () {
        var id =$('#childeId').val();
        $.ajax({
          type:'POST',
          url:'getchild/'+id,
          success:function(data){
            console.log(data);
            $('#baby-info').show();
            document.getElementById('span-name').innerHTML=data.child.name;
            document.getElementById('span-home_adress').innerHTML=data.child.home_adress;
            document.getElementById('span-telephone_number').innerHTML=data.child.telephone_number;
          },
         
 
        });

      });

     $('#addChildren').click(function(){
     
          var name =$('#name').val();
          var date_of_birth =$('#date_of_birth').val();
          var home_adress =$('#home_adress').val();
          var telephone_number =$('#telephone_number').val();
          var vaccination_center_id =$('#vaccination_center_id').val();

          var data="name="+name+"&date_of_birth="+date_of_birth
                    +"&home_adress="+home_adress+"&telephone_number="+telephone_number
                    +"&vaccination_center_id="+vaccination_center_id;
        $.ajax({
          type:'POST',
          url:'/addchild',
          data:data,
          success:function(data){
         
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
