 
<!DOCTYPE html>
<html lang="en">
<head>
<title> Sign up - Dial'in!</title>
 
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
 <?php include'css.php'; ?>
	

<!-- //language-select -->
</head>
<body>
	 <?php include'header.php'; ?>
	 <!-- sign up form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Sign Up</h3>
				<form id="signupform" name="signupform" method="post">
					<input type="text" name="name" id="name" placeholder="Your Name" required > 
					<input type="email" name="email" id="email" placeholder="Your Email" required> 
					<input type="tel" name="mobile" id="mobile" placeholder="Mobile" required> 
					<input type="password" name="password" id="password" placeholder="Password" required> 
					<input type="password" name="re_password" id="re_password" placeholder="Confirm Password" required> 
					<div class="signin-rit">
						<span class="agree-checkbox">
							<label class="checkbox"><input type="checkbox" name="checkbox"id="checkbox" value="check">I agree to your <a class="w3layouts-t" href="terms.html" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="privacy.html" target="_blank">Privacy Policy</a></label>
						</span>
					</div>
					<input type="submit" value="Sign Up">
					<br /><br />
					<div id="result">
                    </div>
				</form>
			</div>
		</div>
	</section>
	<!-- //sign up form -->
	
</body>
		 <?php include'footer.php'; ?> 
	
<!--<script>
      $(document).ready(function() {
    $('#signup').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
           
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            mobile: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            Password: {
                validators: {
                     stringLength: {
                        min: 6,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            re_Password: {
                validators: {
                     stringLength: {
                        min: 6,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
           
           
            }
        })
        .on('success.form.bv', function(e) {
        e.preventDefault();
                
            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var password = $('#password').val();
            var re_password = $('#re_password').val();
           
            /*alert(name);
            alert(email);
            alert(mobile);
            alert(password);
            alert(type);
            alert(re_password);*/
            $.ajax({
                type: 'POST',
                url: 'register.php',
                data: { name: name, email: email, mobile: mobile, password: password, re_password: re_password},
                success: function(response) {
                    $('#result').html(response);
                }
            });
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#signupform').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


    </script>-->
	<script>
	 $("#signupform").on('submit', (function(e) {
		 
		e.preventDefault();
                
            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var password = $('#password').val();
            var re_password = $('#re_password').val();
         document.getElementById("checkbox").checked=true;
       
           
            /*alert(name);
            alert(email);
            alert(mobile);
            alert(password);
            alert(type);
            alert(re_password);*/
            $.ajax({
                type: 'POST',
                url: 'register.php',
                data: { name: name, email: email, mobile: mobile, password: password, re_password: re_password},
                success: function(response) {
                    $('#result').html(response);
                }
            });
         
         
            }));
		</script>

		
</html>