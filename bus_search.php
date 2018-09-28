<?php
include 'dbConfig.php';

extract($_POST);
 
if(isset($bsname)){
 

?>

<div id="search_result">
	
								<ul class="list">
									<div class="row">
							<?php 
            		if($keyword === '0'){
						 $sql = "SELECT * FROM `listing` WHERE `subcategoryID_fk` = '$subid' AND `businessName` LIKE '%$bsname%'";
					}
					else{
						 
                  $sql = "SELECT * FROM `listing` WHERE `subcategoryID_fk` = '$subid' AND `keyword` LIKE '%$keyword%'  AND `businessName` LIKE '%$bsname%'";
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
	else
	{
		?>
			<div class="alert alert-danger col-xs-offset-2 col-xs-8">No Data Found</div>							
		<?php
		
	}
    ?>  
								</div></ul>
</div>
						

<?php

}


 
else if(isset($kname)){
 

?>

<div id="search_result">
	
								<ul class="list">
									<div class="row">
							<?php 
            		if($kname === '0'){
						 $sql = "SELECT * FROM `listing` WHERE `subcategoryID_fk` = '$subid'";
					}
					else{
						 
                  $sql = "SELECT * FROM `listing` WHERE `subcategoryID_fk` = '$subid' AND `keyword` LIKE '%$kname%'  ";
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
	else
	{
		?>
			<div class="alert alert-danger col-xs-offset-2 col-xs-8">No Data Found</div>							
		<?php
		
	}
    ?>  
								</div></ul>
</div>
						

<?php

}

?>