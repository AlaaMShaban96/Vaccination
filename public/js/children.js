
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
      });
//this for deny enter any letters just number
$('#telephone_number').keyup(function () { 
      this.value = this.value.replace(/[^0-9\.]/g,'');
      });

//this for deny enter any number just letters
function alphaOnly(event) {
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key == 8);
};
function show_for_edit(id) {

      var id =document.getElementById("id"+id).innerHTML;
      var name =document.getElementById("name"+id).innerHTML;
      var date_of_birth =document.getElementById("date_of_birth"+id).innerHTML;
      var home_adress =document.getElementById("home_adress"+id).innerHTML;
      var telephone_number =document.getElementById("telephone_number"+id).innerHTML;


      document.getElementById("id").value = id;
      document.getElementById("name").value = name;
      document.getElementById("date_of_birth").value = date_of_birth;
      document.getElementById("home_adress").value = home_adress;
      document.getElementById("telephone_number").value = telephone_number;

}


function edit() {
      var id =$('#id').val();
      var name =$('#name').val();
      var date_of_birth =$('#date_of_birth').val();
      var home_adress =$('#home_adress').val();
      var telephone_number =$('#telephone_number').val();
      // var user_id =$('#user_id').val();



      var data="id="+id+"&name="+name+"&date_of_birth="+date_of_birth
                +"&home_adress="+home_adress+"&telephone_number="+telephone_number;
    $.ajax({
      type:'POST',
      url:'/children/edit/child',
      data:data,
      success:function(data){

            $("#closeEdit").trigger( "click" );
          document.getElementById('name'+id).innerHTML = name;
          document.getElementById('date_of_birth'+id).innerHTML =date_of_birth;
          document.getElementById('home_adress'+id).innerHTML =home_adress;
          document.getElementById('telephone_number'+id).innerHTML =telephone_number;
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
      
      
}

function chick_pefor_delete(ids) {

      var id =document.getElementById("id"+ids).innerHTML;
      var name =document.getElementById("name"+ids).innerHTML;
      console.log(name);
       document.getElementById('nameDelete').innerHTML = name;
      document.getElementById('idDelete').innerHTML = id; 
}

function delete_Child() {
      var id =document.getElementById('idDelete').innerHTML;
   

      $.ajax({
            type:'POST',
            url:'/delete-Child/'+id,
            success:function(){

                  $('#row'+id).remove();
      
                  $("#closeDelete").trigger( "click" );  
            },
          });
}