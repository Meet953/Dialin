
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sitemap - Dial'in!</title>

<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<?php include 'css.php';?>

</head>
<body>
	
	<?php include 'header.php';?>
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Sitemap</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Regions -->
		<div class="container">
			<h2 class="w3-head">Sitemap</h2>
		</div>
		<div class="sitemap-regions">
			<div class="container">
				<div class="sitemap-region">
				<div class="row"> 
				<?php 
					
					$sql = "SELECT * FROM `category`";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
                        $cid = $row['categoryID'];
					?>
					
					<div class="col-md-3">
					<div class="sitemap-region">
					<h4><?php echo $row['categoryName']; ?></h4>
					
					 
					<?php
                        	
					$sql2 = "SELECT * FROM `subcategory` where categoryID_fk = '$cid'";
					$result2 = $conn->query($sql2);
                        
                        ?>
                        
                        <ul>
                        <li>All Ads</li>
                        <?php
                        
                        if($result2->num_rows > 0)
                        {
                           while($row=$result2->fetch_assoc()){
                               ?>
                               <li><?php echo $row['subcategoryName']; ?></li>
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
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<!-- //Regions -->
	<?php include 'footer.php'?>
</body>
		
</html>