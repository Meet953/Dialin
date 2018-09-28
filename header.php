<?php
error_reporting(0);
if (session_status() == PHP_SESSION_NONE) {
session_start();
}

?>


<?php



include("dbConfig.php");
if(isset($_SESSION['userid'])){
    $activeuserid = $_SESSION['userid'];
    $sqluser = "SELECT * FROM user WHERE userID = '$activeuserid'";
    $resultuser = $conn->query($sqluser);
    if ($resultuser->num_rows > 0) {
        while($rowuser = $resultuser->fetch_assoc()) {
            $user = $rowuser['userName'];
           // $userphoto = $rowuser['photo'];
        
        }
    }
}
    ?>


<?php include'dbConfig.php'; ?>

<!-- Navigation -->
		<div class="agiletopbar">
			<div class="wthreenavigation">
				<div class="menu-wrap">
				<nav class="menu">
					
					<div class="icon-list">
					<?php 
					
					$sql = "SELECT * FROM `category`";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
					?>
					
						
			<a href="categories.php?cat=<?php echo $row['categoryName'] ?>"><i class="fa fa-fw <?php echo $row['categoryImage'] ?>"></i><span><?php echo $row['categoryName'] ?></span></a>
					<?php
						
					}
					}
					
					?>
					
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
			</div>
			<button class="menu-button" id="open-button"> </button>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Navigation -->
	<!-- header -->
	<header>
		<div class="w3ls-header"><!--header-one--> 
			
			<div class="w3ls-header-right">
				<ul>
				<?php if(isset($_SESSION['userid'])){?>
				<li class="dropdown head-dpdn">
						<a href="profile.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $user;?></a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="logout.php" aria-expanded="false"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
					</li>
				<?php }else{ ?>
					<li class="dropdown head-dpdn">
						<a href="signin.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
					</li>
					<?php }?>
					<li class="dropdown head-dpdn">
						<a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
					
					<li class="dropdown head-dpdn">
						<div class="header-right">			
	<!-- Large modal -->
			<div class="agile-its-selectregion">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				<i class="fa fa-globe" aria-hidden="true"></i>Select City</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Please Choose Your Location</h4>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" action="#" method="get">
										<div class="form-group">
											<select id="basic2" class="show-tick form-control" multiple>
												
                                                            <?php 

                           $sql = "SELECT DISTINCT `businessCity` from listing ";
                                                                
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                 while($row = $result->fetch_assoc()) {
                                                            ?>
                                                                <option value="<?php echo $row['businessCity']; ?>"style="color:#000;"><?php echo $row['businessCity']; ?></option>
                                                            <?php 
                                                                }
                                                            }
                                                            ?>       

											</select>
										</div>
									  </form>    
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div> 
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index.php"><span>Dial'</span>in!</a></h1>
				</div>
				<div class="agileits_search">
					<form id="sr_form" name="sr_form" action="#" method="post">
						<input name="ksearch" id="ksearch" type="text" placeholder="How can we help you today?"   />
						<select id="agileinfo_search" name="bsearch"  >
							 
							<?php 
					
					$sql = "SELECT * FROM `category`";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
					?>
	
			<option value="<?php echo $row['categoryID']?>"><?php echo $row['categoryName']?></option>
					<?php
						
					}
					}
					
					?>
						</select>
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				<a class="post-w3layouts-ad" href="post-ad.php">Free Listing</a>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
<script>
	$("#sr_form").on('submit', (function(e) {
                
		e.preventDefault();	
          	var ksearch = $("#ksearch").val();
			var bsearch = $("#agileinfo_search").val();
		
		/*alert(' key'+ksearch);
        alert(bsearch);*/
			if((!$("#ksearch").val()) && (bsearch == ""))
			{
				
			}
		
			else if(!$("#ksearch").val())
			{
				var csearch = $( "#agileinfo_search" ).find( "option:selected" ).text();
				window.location = "categories.php?cat="+csearch;
			}
					
			else{
			    
			window.location = "lists.php?scat="+bsearch+"&key="+ksearch;	
			}
					
              
            }));
	</script>
