<!DOCTYPE html>
<html lang="en">
<head>
<title>Feedback - Dial'in!</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<?php include 'css.php';?>
</head>
<body>
	<?php include 'header.php';?>
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Feedback</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Feedback -->
	<div class="feedback main-grid-border">
		<div class="container">
			<h2 class="w3-head">Feedback</h2>
			<div class="feed-back">
				<h3>Tell us what you think of us</h3>
				<br />
				<br />
				<div class="feed-back-form">
				<section id="hire">    
				<form >
				<div class="col-md-offset-3 col-md-6">
					
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
                    </div>
					 
			  </form>
			
		
						
		<div class="clear"></div>
		<form id="feedbackform" name="feedbackform"  class="submit">
		<input class="button" type="submit"  />
		</form>
		<br />
		<br />
                <div id="result"></div>
		
						
			</section>
					
				</div>
			</div>
		</div>	
	</div>
	
	<?php include 'footer.php';?>
	<script>
	 $("#feedbackform").on('submit', (function(e) {
		 
		e.preventDefault();
            
            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var subject = $('#subject').val();
            var message = $('#msg').val();
            var feedback='feedback';
           
           /* alert(query);
            alert(userid);*/
            $.ajax({
                type: 'POST',
                url: 'server.php',
                data: { name: name, email: email, mobile:mobile, subject:subject, message:message,feedback:feedback },
                success: function(response) {
                    $('#result').html(response);
                    
                }
            });

            }));
		</script>
	<script>
				  $('textarea').blur(function () {
				$('#hire textarea').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('textarea + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('textarea + label + span').css({ 'opacity': 1 });
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
		
	
</body>
</html>