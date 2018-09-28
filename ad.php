
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ad - Dial'in!</title>


<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<?php include 'css.php';?>
<style>
    
    .widget-area {
background-color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
float: left;
margin-top: 30px;
padding: 25px 30px;
position: relative;
width: 100%;
}
.status-upload {
background: none repeat scroll 0 0 #f5f5f5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
float: left;
width: 100%;
}
.status-upload form {
float: left;
width: 100%;
}
.status-upload form textarea {
background: none repeat scroll 0 0 #fff;
border: medium none;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
-ms-border-radius: 4px 4px 0 0;
-o-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
color: #777777;
float: left;
font-family: Lato;
font-size: 14px;
height: 142px;
letter-spacing: 0.3px;
padding: 20px;
width: 100%;
resize:vertical;
outline:none;
border: 1px solid #F2F2F2;
}

.status-upload form button {
border: medium none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #fff;
float: right;
font-family: Lato;
font-size: 14px;
letter-spacing: 0.3px;
margin-right: 9px;
margin-top: 9px;
padding: 6px 15px;
}

.status-upload form button > i {
margin-right: 7px;
}

    </style>
</head>
<body>
	<?php include 'header.php';?>
	<div class="w3layouts-breadcrumbs text-center">
	<?php 
        $id=$_GET['listid'];
        $sql = "SELECT * FROM listing where listingID ='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        ?>
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="index.php"><i class="fa fa-home home_1"></i></a> / 
			
			<span><?php echo $row["adTitle"];?></span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><?php echo $row['adTitle'] ?></h2>
					<p> <i class="glyphicon glyphicon-map-marker"></i><a href="#">
       <?php 
        
         $sid=$row['businessState'];
            $sqls = "SELECT * FROM states where sid ='$sid'";
            $results = $conn->query($sqls);

                if ($results->num_rows > 0) {
                    while($rows = $results->fetch_assoc()) {
                    echo $rows['sname'];
                    }
                }
       ?></a>, <a href="#"><?php echo $row['businessCity'] ?></a>| Added at <?php echo $row['date'] ?></p>
					
					<div class="flexslider">
						<ul class="slides">
							<?php 
                               $myString =  $row["photos"];
                                $image = explode(',', $myString);
                    for($i=0;$i<sizeof($image);$i++){
                            ?>
                        
							<li data-thumb="<?php echo $image[$i];?>">
								<img src="<?php echo $image[$i];?>" width="500px" height="700" />
							</li>
							<?php }?>
                            
						</ul>
					</div>
					<!-- FlexSlider -->
					  <script defer src="js/jquery.flexslider.js"></script>

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						<h4><span class="w3layouts-agileinfo">Brand </span> : <a href="#"><?php echo $row['businessName']; ?></a><div class="clearfix"></div></h4>
						<h4><span class="w3layouts-agileinfo">Description</span> :<p><?php echo $row['adDesc'] ?></p><div class="clearfix"></div></h4>
					
						 
						<h4><span class="w3layouts-agileinfo">Address</span> : <strong><?php echo $row['businessBuilding'].",".$row['businessStreet'].",".$row['businessArea'].",".$row['businessLandmark'].",".$row['businessCity'].",".$row['businessState'].",".$row['businessCountry'].",".$row['businessPincode']; ?></strong></h4>
						
						 <?php if($row['establishedYear']!=''){?>
						<h4><span class="w3layouts-agileinfo">Established Year </span> : <strong><?php echo $row['establishedYear']; ?></strong></h4>
						<?php }?>
						<br />
						 <?php if($row['employeesNo']!=''){?>
						<h4><span class="w3layouts-agileinfo">No Of Employees </span> : <strong><?php echo $row['employeesNo']; ?></strong></h4>
						<?php }?>
						
						
						
						
						
					</div>
					
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Brand</p>
							<h3 class="rate"><?php echo $row['businessName']; ?></h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Email</p>
							<h4><?php echo $row['businessEmail']; ?></h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">Website</p>
							<h4><?php echo $row['businessWebsite']; ?></h4>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="interested text-center">
						<h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
						<p><i class="glyphicon glyphicon-earphone"></i><strong><?php echo $row['businessMobileno1']; ?></strong></p>
						
						<?php if($row['businessMobileno2']!=''){?>
						<p><i class="glyphicon glyphicon-earphone"></i><strong><?php echo $row['businessMobileno2']; ?></strong></p>
						<?php }?>
						
						<?php if($row['businessLandlineno']!=''){?>
						<p><i class="glyphicon glyphicon-earphone"></i><strong><?php echo $row['businessLandlineno']; ?></strong></p>
						<?php }?>
					
						<?php if($row['tollfreeNo1']!=''){?>
						<p><i class="glyphicon glyphicon-earphone"></i><strong><?php echo $row['tollfreeNo1']; ?></strong></p>
						<?php }?>
						
						
				        <?php if($row['tollfreeNo2']!=''){?>
						<p><i class="glyphicon glyphicon-earphone"></i><strong><?php echo $row['tollfreeNo2']; ?></strong></p>
						<?php }?>
						
					</div>
						<div class="tips">
						<h4>Payment Modes Accepted</h4>
							<ol>
							<?php 
                               $String =  $row["paymentModes"];
                                $pay = explode(',', $String);
                    for($i=0;$i<sizeof($pay);$i++){
                            ?>
								<li><?php echo $pay[$i];?></li>
								<?php }?>
							</ol>
						</div>
				</div>
				<?php }}?>
				
	
	
    
    
</div>
				
				
			<div class="clearfix"></div>
			</div>
               
               
               <br />
               <br />
               <br />
                <div class="container">
	 <h2><span class="label label-warning">Comments</span></h2>
	<div class="row">
    
    <div class="col-md-6">
                           <?php 
        if (!isset($_SESSION['userid'])) {}
        else{
        ?>
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form id="commentform">
										<textarea id="comment"placeholder="Enter Your Comment" ></textarea>
									
										<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Comment</button>
										
									</form>
								</div><!-- Status Upload  -->
								
							
							</div><!-- Widget Area -->
							 <div id="result">
							<?php 
        }
							 $sql = "SELECT * from comment,user where user.userID=comment.userID_fk and listingID_fk='$id'  ORDER BY commentID DESC";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            <br />
            <br />
            
								<div class="row">
                       
                        <div class="col-sm-offset-1 col-sm-2">
                            <div class="thumbnail">
                            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            </div><!-- /thumbnail -->
                            </div><!-- /col-sm-1 -->

                            <div class="col-sm-5">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                            <strong><?php  echo $row['userName'];?></strong> <br /><span class="text-muted"><?php echo $row['date'];?></span>
                            </div>
                            <div class="panel-body">
                            <?php  echo $row['comment'];?>
                            </div><!-- /panel-body -->
                            </div><!-- /panel panel-default -->
                            </div><!-- /col-sm-5 -->
                    </div>
						
            <?php
        }}?>
        </div>
        </div>
        
                        </div>
                    
					</div>
		
	</div>
	

	<!--//single-page-->
	<!--footer section start-->		
	<?php include 'footer.php';?>
	<script>
	 $("#commentform").on('submit', (function(e) {
		 
		e.preventDefault();
            
            var comment = $('#comment').val();
            var listid= " <?php echo $id ?> "
            var cmt='comment';
           
           /* alert(query);
            alert(userid);*/
            $.ajax({
                type: 'POST',
                url: 'server.php',
                data: { comment: comment, listid: listid, cmt:cmt },
                success: function(response) {
                    $('#result').html(response);
                    
                }
            });

            }));
		</script>
</body>
		
</html>