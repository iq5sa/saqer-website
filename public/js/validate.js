/*
 * Copyright notice for the website built for saqer.com.iq.
 * Copyright (c) 2024. Jodx.dev. All rights reserved.
 * This work is protected by copyright law. Unauthorized reproduction, distribution, or modification is strictly prohibited.
 */

$(window).on("load", function() {
    "use strict";


    // CONTACT FORM VALIDATION

    if($('#contact-form').length){
      $('#submit').on("click", function(){

              var o = new Object();
              var form = '#contact-form';

              var name = $('#contact-form .name').val();
              var email = $('#contact-form .email').val();
              // var phone = $('#contact-form .phone').val();

        if(name == '' || email == '')
        {
          $('#contact-form .response').html('<div class="failed">Please fill the required fields.</div>');
          return false;
        }

        $.ajax({
            url:"mail.php",
            method:"POST",
            data: $(form).serialize(),
            beforeSend:function(){
                $('#contact-form .response').html('<div class="text-info"><img src="assets/images/preloader.gif"> Loading...</div>');
            },
            success:function(data){
                $('form').trigger("reset");
                $('#contact-form .response').fadeIn().html(data);
                setTimeout(function(){
                    $('#contact-form .response').fadeOut("slow");
                }, 5000);
            },
            error:function(){
                $('#contact-form .response').fadeIn().html(data);
            }
        });
    });
    }

});


