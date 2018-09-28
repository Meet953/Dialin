 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Sign in :: w3layouts</title>
 
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<?php include'css.php'; ?>
 
</head>
<body>
	<?php include'header.php'; ?>
	<!-- sign in form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Sign In</h3>
				<form id="signinform" name="signinform" method="post">
						<input type="email" name="email" placeholder="Your Email" id="email" required=""> 
					<input type="password" name="password" placeholder="Password" id="password" required=""> 
					<input type="submit" value="Sign In">
					<br>
					<br />
					<div id="result">
                    </div>
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
						<div class="forgot">
							<a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
						</div>
						<!-- Modal -->
						
						<div class="clearfix"> </div>
					</div>
				</form>
				<h6> Not a Member Yet? <a href="signup.php">Sign Up Now</a> </h6>
				
				<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3 class="w3ls-password">Get Password</h3>		
										<p class="get-pw">Enter your email address below and we'll send you an email with instructions.</p>
										<form action="#" method="post">
											<input type="text" class="user" name="email" placeholder="Email" required="">
											<input type="submit" value="Submit">
										</form>
									</div>
								</div>
							</div>
							</div>
						</div>
			</div>
		</div>
	</section>
	<!-- //sign in form -->
	 
</body>
	<?php include'footer.php'; ?>
	<script>
	 $("#signinform").on('submit', (function(e) {
		 
		e.preventDefault();
                
            var email = $('#email').val();
            var password = $('#password').val();
            /*
            alert(email);
            alert(password);*/
            $.ajax({
                type: 'POST',
                url: 'checklogin.php',
                data: { email: email, password: password },
                success: function(response) {
                    $('#result').html(response);
                }
            });

            }));
		</script>
</html>