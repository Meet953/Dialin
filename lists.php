
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Mobiles :: w3layouts</title>
 
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->


	
<?php include 'css.php'; ?>
<script src="js/tabs.js"></script>	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
		
	});
});
</script>
<!-- //switcher-grid and list alignment -->
	
		<style>
	
			 
			
			#bsrch{
				background: url(images/search.png) no-repeat 13px 11px rgb(255, 137, 137);
    width: 44px;
    height: 39px;
    border: none;
    padding: 0;
    margin-top: 0;
			}
	
	</style>
	
	
</head>
<body>
	 <?php include 'header.php'; ?>

	<?php
	$subid = $_GET['scat'];
	$skeyword = $_GET['key'];
	
	$sl = "select subcategoryName from subcategory where subcategoryID='$subid'";
	$res = $conn->query($sl);
	 $ro = $res->fetch_assoc(); 
	$subname = $ro['subcategoryName'];
			
					 
	?>
	
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="index.html"><i class="fa fa-home home_1"></i></a> / 
			 Categories  / 
			<span><?php echo $subname ?></span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	 
	<div class="total-ads main-grid-border">
		<div class="container">
		 
			<div class="ads-grid">
				<div class="side-bar col-md-3">
					<div class="search-hotel">
					<h3 class="agileits-sear-head">Name contains</h3>
					 
						 
						<input type="text" value="Business name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Business name...';}" name="bsname" id="bsname"  required style="    vertical-align: top;">
						<button id="bsrch"></button>
							 
					 
				</div>
				
								<div class="w3-brand-select">
					<h3 class="agileits-sear-head">Key-Words</h3>
					  <select id="ksel" name="ksel" class="selectpicker" data-live-search="true" onchange="javascript:handleSelect(this)">
					  <option data-tokens="All" value=0>All</option>
					 <?php 
					
					$sql = "SELECT * FROM `keyword` where `subcategoryID_fk`='$subid'";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
					?>
	
			<option data-tokens="<?php echo $row['keywordName']?>" value="<?php echo $row['keywordName']?>"><?php echo $row['keywordName']?></option>
					<?php
						
					}
					}
					
					?>
					</select>
				</div>
					
				<div class="w3ls-featured-ads">
					<h2 class="sear-head fer">Featured Ads</h2>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left">
								<img src="images/f1.jpg" title="ad image" alt="" />
							</div>
							<div class="w3-featured-ad-right">
								<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
								<p>$ 450</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left">
								<img src="images/f2.jpg" title="ad image" alt="" />
							</div>
							<div class="w3-featured-ad-right">
								<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
								<p>$ 380</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left">
								<img src="images/f3.jpg" title="ad image" alt="" />
							</div>
							<div class="w3-featured-ad-right">
								<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
								<p>$ 560</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
				
				
				 
				<div class="agileinfo-ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">All Ads</span>
						  </a>
						</li>
						 
						 
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
							
								 <div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
													
								<div class="clearfix"></div>
													<div id="search_result">
								<ul class="list">
									<div class="row">
							<?php 
            		if($skeyword === '0'){
						 $sql = "SELECT * FROM `listing` WHERE `subcategoryID_fk` = '$subid'";
					}
					else{
						 
                  $sql = "SELECT * FROM `listing` WHERE `subcategoryID_fk` = '$subid' AND `keyword` LIKE '%$skeyword%'";
					}
								 
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                               $myString =  $row["photos"];
                                $image = explode(',', $myString);
                                  ?>
                                  
								<a href="ad.php?listid=<?php echo $row["listingID"]; ?>">
								
									<li>
									<img src="<?php echo $image[0]?>" title="" alt="" height="200px" width="200px"/>
									<section class="list-left">
								<h1><span class="label" style="background:#FF9933; "><?php echo $row["businessName"]; ?></span></h1>
										<br>
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
								</div></ul>
														</div>
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
	 
	<?php include'footer.php'?>
	
	<script type="text/javascript">
function handleSelect(val)
{
	var kname = $("#ksel").val();
		 
			var subid  = '<?php echo $subid;?>';
			 
		 
				 

                $.ajax({
                    url: "bus_search.php",
                    type: "POST",
                    data: {subid:subid,kname:kname },
                    
                    success: function(data) {
                        $("#search_result").html(data);
                       
                    }
                });
		 
}
</script>
	
	<script>
	
	$("#bsrch").click(function(e){
    
		var bsname = $("#bsname").val();
		if(bsname == "" || bsname.length == 0)
			{}
		else
			{
			var subid  = '<?php echo $subid;?>';
			var keyword  = '<?php echo $skeyword;?>';
		 
				e.preventDefault();

                $.ajax({
                    url: "bus_search.php",
                    type: "POST",
                    data: {subid:subid,keyword:keyword,bsname:bsname },
                    
                    success: function(data) {
                        $("#search_result").html(data);
                       
                    }
                });
		}
		
});
	
	</script>
</body>

	
			 
</html>