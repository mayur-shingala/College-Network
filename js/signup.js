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
                donor_name: {
                                required: true,
                                minlength: 2,
                            },
                donor_birthdate: {
                                    required: true
                                 },
                donor_gender: {
                                required: true
                              },
                donor_phone: {
                                required: true,
                                minlength: 10,
                                maxlength: 10
                             },
                donor_address: {
                                required: true,
                                minlength: 5,
                            },             
                donor_email: {
                                required: true,
                                email: true
                            },
                donor_password: {
                                required: true,
                                minlength: 6
                                }
            },
            messages: {
                donor_name: {
                    required: "Please enter your full name.",
                    minlength: "your name must consist of at least 2 characters."                    
                },
                donor_birthdate: {
                    required: "Please select your birthdate."
                },
                donor_gender: {
                    required: "Please select your gender."
                },
                donor_phone: {
                    required: "Please enter your mobile no.",
                    minlength: "your Number must consist of at least 10 characters."
                },
                donor_address: {
                    required: "Please enter your address."
                },
                donor_email: {
                    required: "Please enter your email."
                },
                donor_password: {
                    required: "Please enter your password.",
                    minlength: "your Password must consist of at least 6 characters."
                }
            },
            errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.container .rdoG') );
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    success: function() {
                        //$('#signup :input').attr('disabled', 'disabled');
                        $('#signup').fadeTo( "slow", 1, function() {
                            //$(this).find(':input').attr('disabled', 'disabled');
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