$('#baby-info').hide();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
      });
    //   $("#errur").hide();
    //   $("#succsful").hide();

    if ( $("#succsful").show(true)) {
        console.log('succsful');
        // $("#succsful").show();
            setTimeout(function() {
                $('#succsful').fadeOut('fast');
            }, 1000);
    } 
    if ($('#errur').show(true)) {
              setTimeout(function() {
              $('#errur').fadeOut('fast');
            }, 1000);
    } 

