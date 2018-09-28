<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile - Dial'in!</title>
<?php include 'css.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />



<!-- //switcher-grid and list alignment -->
</head>
<body>
	<?php include 'header.php';?>
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Profile</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Products -->
	<div class="total-ads main-grid-border">
		<div class="container">
				<div class="agileinfo-ads-display col-md-12">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class=" text">Profile</span>
						  </a>
						</li>
						<li role="presentation" class="next">
						  <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
							<span class="text">My Listing's</span>
						  </a>
						</li>
						
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								
								<div class="clearfix"></div>
								<section id="hire">    
				<form >
				<div class="col-md-offset-3 col-md-6">
				<?php 
            
                    $sql = "SELECT * FROM user where userID='$activeuserid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
                  ?>
					
					  <div class="field name-box">
							<input type="text" id="name" name="name" placeholder="Who Are You?" value="<?php echo $row["userName"]; ?>"/>
							<label>Your Name</label>
							
					  </div>
					  
					  <div class="field email-box">
							<input type="text" name="email" id="email" placeholder="example@email.com" value="<?php echo $row["userEmail"]; ?>" />
							<label>Your Email</label>
							
					  </div>
					  
					  <div class="field ad-ID">
							<input type="text" name="mobile" id="mobile" placeholder="Mobile" value="<?php echo $row["userMobile"]; ?>"/>
							<label>Your Mobile</label>
							
					  </div>
					<?php   }
}
    ?>  


					 
                    </div>
					 
			  </form>
			
		
						
		<div class="clear"></div>
		
		
						
			</section>
				
						</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						 <div>
												<div id="container">
								
								<div class="clearfix"></div>
							<ul class="list">
							<?php 
            
                    $sql = "SELECT * FROM listing where userID_fk='$activeuserid'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                               $myString =  $row["photos"];
                                $image = explode(',', $myString);
                                  ?>
                                  
								<a href="ad.php?listid=<?php echo $row["listingID"]; ?>">
								
									<li>
									<img src="<?php echo $image[0]?>" title="" alt="" width="200px" height="200px" />
									<section class="list-left">
									 <h1><span class="label label-warning"><?php echo $row["businessName"]; ?></span></h1>
									 <br />
									<h1 class="title"><?php echo $row["adTitle"]; ?></h1>
									<h3 class="title"><?php echo $row["adDesc"]; ?></h3>
									<br /><span class="adprice"> <?php echo $row["businessMobileno1"]; ?></span>
                                       <br />
                                       <br />
                                        <h3><span class="label label-info"><?php echo $row["businessWebsite"]; ?></span></h3>
									</section>
									<section class="list-right">
                                        <h3><span class="label label-default">Since: <?php echo $row["establishedYear"]; ?></span></h3>
									<br />
									<h4>
									<span class="cityname" >City: <?php echo $row["businessCity"]; ?></span>
									<span class="cityname">State: <?php echo $row["businessState"]; ?></span>
									<span class="cityname">Country: <?php echo $row["businessCountry"]; ?></span>
                                        </h4>
									</section>
									<div class="clearfix"></div>
									</li> 
                                    
								</a>
								
								
								
								<?php   }
}
    ?>  
								</ul>
						</div>
							</div>
						</div>
						
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
		
	</div>
	<!-- // Products -->
	<!--footer section start-->	
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
<?php include 'footer.php';?>	

</body>
		</html>