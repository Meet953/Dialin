<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact - Dial'in!</title>
<?php include 'css.php';?>

</head>
<body>	
	<?php include 'header.php';?>
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Contact</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- contact -->
	<div class="contact main-grid-border">
		<div class="container">
		
		
			<h2 class="w3-head text-center">Contact Us</h2>
			<section id="hire">    
				<form action="#" method="post">
					  <div class="field name-box">
							<input type="text" id="name" name="name" placeholder="Who Are You?"/>
							<label>Name</label>
							
					  </div>
					  
					  <div class="field email-box">
							<input type="text" name="email" id="email" placeholder="example@email.com" />
							<label>Email</label>
							
					  </div>
					  
					  <div class="field ad-ID">
							<input type="text" name="subject" id="subject" placeholder="Subject"/>
							<label>Subject</label>
							
					  </div>
					  
					  <div class="field phonenum-box">
							<input type="text" name="tel" id="mobile" placeholder="Phone Number" />
							<label>Phone</label>
							
					  </div>

					  <div class="field msg-box">
							<textarea id="msg" rows="4"  placeholder="Your message goes here..."></textarea>
							<label>Your Msg</label>
							
					  </div>

					 
			  </form>
			
		
						
		<div class="clear"></div>
		<form id="contactform" name="contactform"  class="submit">
		<input class="button" type="submit" value="Send" />
		</form>
		<br />
		<br />
                <div id="result"></div>
		<!-- JavaScript Includes -->
		<script src="js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="js/jquery.ui.widget.js"></script>
		<script src="js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="js/script.js"></script>
						
			</section>
			<script>
				  $('textarea').blur(function () {
				$('#hire textarea').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('textarea + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('textarea + label + span').css({ 'opacity': 0 });
					}
				});
			});
			$('#hire .field:first-child input').blur(function () {
				$('#hire .field:first-child input').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('.field:first-child input + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('.field:first-child input + label + span').css({ 'opacity': 0 });
					}
				});
			});
			$('#hire .field:nth-child(2) input').blur(function () {
				$('#hire .field:nth-child(2) input').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('.field:nth-child(2) input + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('.field:nth-child(2) input + label + span').css({ 'opacity': 0 });
					}
				});
			});
			$('#hire .field:nth-child(3) input').blur(function () {
				$('#hire .field:nth-child(3) input').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('.field:nth-child(3) input + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('.field:nth-child(3) input + label + span').css({ 'opacity': 0 });
					}
				});
			});
			$('#hire .field:nth-child(4) input').blur(function () {
				$('#hire .field:nth-child(4) input').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('.field:nth-child(4) input + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('.field:nth-child(4) input + label + span').css({ 'opacity': 0 });
					}
				});
			});
		  //@ sourceURL=pen.js
		</script>    
		<script>
	  if (document.location.search.match(/type=embed/gi)) {
		window.parent.postMessage("resize", "*");
	  }
	</script>
		</div>	
		<!-- address -->
		<div class="container">
			<div class="agileits-get-us">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>The Leela Group - KK market Pune</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +91 561 111 2351</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@theleelagroup.com"> info@theleelagroup.com</a></li>
				</ul>
			</div>
		</div>
		<!-- //address -->
		<div class="map-w3layouts">
			<h3>Location</h3>
			<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJgz24f7zqwjsRPvna2B2bqrg&key=AIzaSyCFdswt-WTebJUm27mCQSsr3G8GPWV_nK0" allowfullscreen=""></iframe>
		</div>
	</div>

	<!-- // contact -->
	<!--footer section start-->		
		<?php include 'footer.php';?>
		<script>
	 $("#contactform").on('submit', (function(e) {
		 
		e.preventDefault();
                
            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var subject = $('#subject').val();
            var message = $('#msg').val();
            var contact='contact';
           
           /* alert(query);
            alert(userid);*/
            $.ajax({
                type: 'POST',
                url: 'server.php',
                data: { name: name, email: email, mobile:mobile, subject:subject, message:message,contact:contact },
                success: function(response) {
                    $('#result').html(response);
                }
            });

            }));
		</script>
</body>
</html>