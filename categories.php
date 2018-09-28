
<!DOCTYPE html>
<html lang="en">
<head>
<title> Categories - Dial'in!</title>

<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<style>
	
	.ovflw:hover{
		
		 font-size: 2em;
	}
	
	
	</style>
	
<!-- /responsive tabs -->
	<?php include 'css.php'?>
	<?php include 'dbConfig.php'?>
</head>
<body>
	 <?php include 'header.php'?>
	
	<?php
	$cat = $_GET['cat'];
	$sql = "SELECT categoryID FROM `category` where categoryName = '$cat'";
	$result = $conn->query($sql);
					
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$id = $row['categoryID'];
	}
	}
	?>

	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Categories / <?php echo $cat; ?></span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Categories -->
	<!--Vertical Tab-->
	<div class="categories-section main-grid-border">
		<div class="container">
			<h2 class="w3-head"><?php echo $cat; ?></h2>
			<div class="category-list">
				<div id="parentVerticalTab">
					<div class="agileits-tab_nav">
					<ul class="resp-tabs-list hor_1">
						
						<?php 
					
					$sql = "SELECT * FROM `subcategory` where categoryID_fk = '$id'";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
					?>
					<li><?php echo $row['subcategoryName'] ?></li>
					<?php
						
					}
					}
					
					?>
					
					</ul>
						<a class="w3ls-ads" href="all-classifieds.html">View all Ads</a>
					</div>
					<div class="resp-tabs-container hor_1">
						<span class="active total" style="display:block;" data-toggle="modal" data-target="#myModal"><strong>All </strong> (Select your city to see local ads)</span>
						
						
						<?php 
					
					$sql = "SELECT * FROM `subcategory` where categoryID_fk = '$id'";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
						
						$subid = $row['subcategoryID'];
                        $sl = "SELECT COUNT(listingID) as count FROM listing WHERE subcategoryID_fk ='$subid'";
                     $res = $conn->query($sl);
                        $ro = $res->fetch_assoc(); 
					?>
					 
						<div>
							<div class="category">
								<div class="category-img">
									<img src="<?php echo $row['subcategoryImage']?>" width="300px" height="150px" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4><?php echo $row['subcategoryName']; ?></h4>
									<span><?php echo $ro['count']; ?> Ads</span>
									<a href="lists.php?scat=<?php echo $subid ?>&key=0">View all Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sub-categories">
								<ul>
				<li class="ovflw"><i class="fa fa-star" aria-hidden="true" style="color:#00ff00"></i>&nbsp;&nbsp;<a href="lists.php?scat=<?php echo $subid ?>&key=0">All Options</a></li>
									
									<?php 
					
					$ssql = "SELECT * FROM `keyword` where subcategoryID_fk = '$subid' ";
					$sresult = $conn->query($ssql);
					
					if ($sresult->num_rows > 0) {
    				while($srow = $sresult->fetch_assoc()) {
					?>
	
				<li class="ovflw"><i class="fa fa-star" aria-hidden="true" style="color:#00ff00"></i>&nbsp;&nbsp;<a href="lists.php?scat=<?php echo $subid ?>&key=<?php echo $srow['keywordName'] ?>"><?php echo $srow['keywordName']?></a></li>
			
					<?php
						
					}
					}
					
					?>
								
								</ul>
							</div>
						</div>
						
					<?php
						
					}
					}
					
					?>
						
					
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--Plug-in Initialisation-->
	
	<?php include 'footer.php'; ?>
	
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
	<script type="text/javascript">
    $(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
	
</body>
</html>