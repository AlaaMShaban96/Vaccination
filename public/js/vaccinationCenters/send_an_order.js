$('#baby-info').hide();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
      });
      $("#succsful").hide();
      $("#errur").hide();
      $('.quantity').keyup(function () { 
        this.value = this.value.replace(/[^0-9\.]/g,'');
      });
  
      function send(id) { 
    
        var dose_time =document.getElementById("dose_time"+id).innerHTML;
        var vaccination_id =document.getElementById("vaccination_id"+id).innerHTML;
        var name =document.getElementById("name"+id).innerHTML;
        var quantity =document.getElementById("quantity"+id).value;
// console.log('vaccination_id='+vaccination_id);
        var data="vaccination_id="+vaccination_id+"&name="+name+"&dose_time="+dose_time+"&quantity="+quantity+"&user_id="+5;
                              console.log(data);
                              $.ajax({
                                type:'POST',
                                url:'/add-order',
                                data:data,
                                success:function(data){
                                    $("#errur").hide();
                                    document.getElementById("quantity"+id).value=""
                                    document.getElementById('succsful').innerHTML=data.succsful;
                                    $("#succsful").show();
                                    setTimeout(function() {
                                        $('#succsful').fadeOut('fast');
                                    }, 1000);
                                      
                                  
                                },
                                  error:function(data){
                                    var obj = JSON.parse(data.responseText);
                                    var message="تاكد من ادخال ";
                                   
                                    console.log(obj);
                                     if (obj.hasOwnProperty('errors')) {
                                        if(obj.errors.hasOwnProperty('quantity'))
                                          message+= "الكمية الشحنة و تأكد ان تكون قيمة اكبر من 0";
                                    
                                     
                                        document.getElementById('errur').innerHTML=message;
                                        $("#errur").show();
                                        setTimeout(function() {
                                            $('#errur').fadeOut('fast');
                                        }, 2000);
                                       
                                       }
                                  }
                               
                              });
        
      }
      
