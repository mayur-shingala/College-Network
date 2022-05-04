$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate signup form
    $(function() {
        $('#signup').validate({
            rules: {
                ngo_name: {
                                required: true,
                                minlength: 2,
                            },
                ngo_phone: {
                                required: true,
                                minlength: 10,
                                maxlength: 10
                             },
                ngo_addr: {
                                required: true,
                                minlength: 5,
                            },             
                ngo_email: {
                                required: true,
                                email: true
                            },
                ngo_password: {
                                required: true,
                                minlength: 6
                                }
            },
            messages: {
                ngo_name: {
                    required: "Please enter your full name.",
                    minlength: "your name must consist of at least 2 characters."                    
                },
                ngo_phone: {
                    required: "Please enter your mobile no.",
                    minlength: "your Number must consist of at least 10 characters."
                },
                ngo_addr: {
                    required: "Please enter your address."
                },
                ngo_email: {
                    required: "Please enter your email."
                },
                ngo_password: {
                    required: "Please enter your password.",
                    minlength: "your Password must consist of at least 6 characters."
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"signupdb1.php",
                    success: function() {
                       // $('#signup :input').attr('disabled', 'disabled');
                        $('#signup').fadeTo( "slow", 1, function() {
                           // $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#signup').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})