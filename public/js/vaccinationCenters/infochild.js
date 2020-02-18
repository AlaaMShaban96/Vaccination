
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
      });


function take_a_dose(idv) {
 
    var vaccination_id =document.getElementById("id"+idv).innerHTML;
    var child_id =document.getElementById("span-id").innerHTML;

  
    var data="vaccination_id="+vaccination_id+"&child_id="+child_id;
    $.ajax({
      type:'POST',
      url:'/takedose-childfile',
      data:data,
      success:function(data) { 
        window.location.reload(true);
      }
    });
    
  }
  