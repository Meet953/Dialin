
<?php 
require_once("dbConfig.php");

if (session_status() == PHP_SESSION_NONE) {
session_start();
}

if (!isset($_SESSION['userid'])) {
	echo "<script>alert('Login to list your Business')</script>";
    echo "<script>window.location='signin.php';</script>";
}
else{
	$activeuserid = $_SESSION['userid'];
	$sql = "Select * from user user where userID = '$activeuserid'";
	$results =mysqli_query($conn, $sql); 
		while($row=mysqli_fetch_array($results)) {
		$name = $row['userName'];
		$phone = $row['userMobile'];
		$email = $row['userEmail'];
		}
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Post Ad :: w3layouts</title>

<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->

	  
  <style>
	
	  .upload{
		  
background-color:red;
border:1px solid red;
color:#fff;
border-radius:5px;
padding:10px;
text-shadow:1px 1px 0 green;
box-shadow:2px 2px 2px rgba(0,0,0,.75)
}
.upload:hover{
cursor:pointer;
background:#c20b0b;
border:1px solid #c20b0b;
box-shadow:0 0 5px rgba(0,0,0,.75)
}
	
	  #noerror{
color:green;
text-align:left
}
#error{
color:red;
text-align:left
}
	  
	  #addesc{
width:180%;
	  }
	  
	  @media (max-width: 555px){
		  
		   #addesc{
width:140%;
	  }
		  
		  
	  }
	  
	  @media (max-width: 400px){
		  
		   #addesc{
width:100%;
	  }
	  }
	  
	  
	</style>
	
	<?php include'css.php'; ?>
</head>
<body>
	<?php include'header.php'; ?>

	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Free Listing</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Submit Ad -->
	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="w3-head">Post an Ad : List your Business for <span>FREE!</span></h2>
			<div class="post-ad-form">
				<form id="list_form" name="list_form" method="post" enctype="multipart/form-data">
				
				<!--Vertical Tab-->
	<div class="categories-section main-grid-border">
		<div class=" ">
			<h2 class="w3-head" style="color:#FF0000 ">List your Business</h2>
			<div class="category-list">
				<div id="parentVerticalTab">
					<div class="agileits-tab_nav">
					<ul class="resp-tabs-list hor_1">
						
						
						
						<li class="active1" id="li1" ><a href="#"></a>Personal Details</li>
						<li class="active2" id="li2" ><a href="#"></a>Location Details</li>
						<li class="active3" id="li3" ><a href="#"></a>Business Details</li>
						<li class="active4" id="li4" ><a href="#"></a>Your Keywords</li>
						<li class="active5" id="li5" ><a href="#"></a>Upload Photos</li>
					
					</ul>
					
					</div>
					<div class="resp-tabs-container hor_1">
						<span class="active total" style="display:block;">
							<strong>Business Information </strong></span>
						
						<!-- Personal Detail-->
							<div>
							<div class="category">
								 
								<div class="form-group">
                                          
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Name</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="name" name="name" placeholder=" Name" class="form-control" type="text" value="<?php echo $name ?>" readonly	>
                                   </div>
                                    </div>
                                 </div>
                                 </div> <div class="clearfix"></div>
								
								<div class="form-group">
                                         
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Phone</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                   
                                  <input   id="phone" name="phone" placeholder=" Phone" class="form-control" type="text" value="<?php echo $phone ?>" readonly>
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Email</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="email" name="email" placeholder="Email" class="form-control" type="text" value="<?php echo $email ?>" readonly>
                                   </div>
                                    </div>
                                 </div>
                                 </div>
									 
									  
									 
									 <div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Ad Title</b><span>*</span></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="ad" name="ad" placeholder=" " class="form-control" type="text">
                                   </div>
                                    </div>
                                 </div>
                                 </div>
									 
									 <div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Ad Description </b><span>*</span></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group ">
                                  
									 <textarea id="addesc" name="addesc" placeholder="Write few lines about your product" class="form-control" type="text"></textarea>
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="sub-categories">
									<br>
									<div class="row">
								<div class="form-group btnNxt">
									<div class="col-xs-offset-8">
									<a class="btn btn-info" id="btn1" href="#">Next Page</a></div>
								</div>
								</div>
								</div>
								
								<div class="row">
									<br>
								<div class="col-sm-offset-1 col-sm-8">
									<div id="pmsg"></div>
									</div>
								
								</div>
					 
									 
									 
									 <div class="clearfix"></div>
									 
									 
								
							</div>
							 
						</div>
						
						<!-- Location Detail-->
							<div>
							<div class="category">
								 
								<div class="form-group">
                                          
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Business</b><span>*</span></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="bname" name="bname" placeholder="  " class="form-control   " type="text" >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                         
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Building</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                   
                                  <input   id="build" name="build" placeholder="  " class="form-control   " type="text"  >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Street</b><span>*</span></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="street" name="street" placeholder=" " class="form-control   " type="text"  >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Landmark</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="land" name="land" placeholder=" " class="form-control   " type="text"  >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Area</b><span>*</span></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="area" name="area" placeholder=" " class="form-control   " type="text"  >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								 <div class="form-group">
									 <div class="row">
										 
                        <label class="col-xs-4 control-label"><b>Country</b><span >*</span></label>
                        <div class="col-xs-6">
                          <select class="form-control " id="Country1" name="Country1" onChange="getState(this.value);">
                            <option value="">Select Country</option>
                                   <?php include 'dbConfig.php';
                                                $sql = "SELECT * FROM countries";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row=mysqli_fetch_array($result)) { 
                                             ?>
                                    <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname']; }?></option>                
                          </select>
                           
                        </div>
									 </div>
                      </div>

                      <!-- Row 8 -->  
                      <div class="form-group">
						  <div class="row">
                        <label class="col-xs-4 control-label"><b>State</b><span>*</span></label>
                        <div class="col-xs-6">
                           
                         <select class="form-control " id="State1" name="State1" onChange="getcity(this.value);">
                          <option value="">State</option>
                        </select>
                        </div>
						  </div>
                      </div>

                      <!-- Row 9 --> 
                      <div class="form-group">
						  <div class="row">
                        <label class="col-xs-4 control-label"><b>City</b><span>*</span></label>
                        <div class="col-xs-6">
                          
                          <select class="form-control " id="city1" name="city1"  >
                            <option value="">City</option>
                          </select>  
                        </div>
						  </div>
                      </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Pincode</b><span>*</span></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input id="pincode" name="pincode" placeholder=" " class="form-control   " type="text" maxlength="6" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								 
								
								<div class="sub-categories">
									<br>
									<div class="row">
								<div class="form-group btnNxt">
									<div class="col-xs-offset-8">
									<a class="btn btn-info" id="btn2" href="#">Next Page</a></div>
								</div>
								</div>
								</div>
								
								<div class="row">
									<br>
								<div class="col-sm-offset-1 col-sm-8">
									<div id="lmsg"></div>
									</div>
								
								</div>
					 
									 <div class="clearfix"></div>
	
							</div>
							 
						</div>
						
						
						
						<!-- Contact Detail-->
							<div>
							<div class="category">
								 
								
								<div class="form-group">
                                          
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Landline No.</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                              <input id="llno" name="llno" placeholder="  " class="form-control   " type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                          
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Mobile No.1</b><span>*</span></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="mno1" name="mno1" placeholder="  " class="form-control   " type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10">
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                         
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Mobile No.2</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                   
                                  <input   id="mno2" name="mno2" placeholder="  " class="form-control   " type="text"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10">
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Fax 1</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="fax1" name="fax1" placeholder=" " class="form-control   " type="text"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Fax 2</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="fax2" name="fax2" placeholder=" " class="form-control   " type="text"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Toll Free No. 1</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="toll1" name="toll1" placeholder=" " class="form-control   " type="text"   onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Toll Free No. 2</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="toll2" name="toll2" placeholder=" " class="form-control   " type="text"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Website</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="website" name="website" placeholder=" " class="form-control   " type="text"  >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Email</b><span>*</span></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="bemail" name="bemail" placeholder=" " class="form-control   " type="text"  >
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								
								
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-sm-4 control-label"><b>Established Year</b><span>*</span></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="year" name="year" placeholder=" " class="form-control   " type="text"  maxlength="4" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
									 <label class="col-sm-4 control-label"><b>Employees No.</b></label>
                                <div class="col-sm-6 ">
                                 <div class="input-group">
                                  
                                  <input   id="enum" name="enum" placeholder=" " class="form-control   " type="text"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                                   </div>
                                    </div>
                                 </div>
                                 </div>
								
								<div class="form-group">
                                           
                                 <div class="row">
                               <label class="col-xs-4 control-label"><b>Payment</b></label>
                        <div class="col-xs-6 ">
                                  
                                   <select class="selectpicker form-control" multiple="multiple" data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true" id="payment" name="payment[]">
									   <option value="Visa Card">Visa Card</option>
									   <option value="Debit Card">Debit Card</option>
									   <option value="Credit Card">Credit Card</option>
									   <option value="Master Card">Master Card</option>
									   <option value="American Express Card">American Express Card</option> 
									   <option value="Diners Club Card">Diner's Club Card</option>
									   <option value="Cash">Cash</option>
									   <option value="Cheque">Cheaque</option>
									   <option value="Travelers Cheque">Travelers Cheaque</option>
									    <option value="Money Order">Money Order</option>
									   <option value="Financing Available">Financing Available</option>
									   
									 </select>
                                   
                                    </div>
                                 </div>
                                 </div>
								
								 
								
								<div class="sub-categories">
									<br>
									<div class="row">
								<div class="form-group btnNxt">
									<div class="col-xs-offset-8">
									<a class="btn btn-info" id="btn3" href="#">Next Page</a></div>
								</div>
								</div>
								</div>
								
								<div class="row">
									<br>
								<div class="col-sm-offset-1 col-sm-8">
									<div id="cmsg"></div>
									</div>
								
								</div>
					 
									 
									 
									 <div class="clearfix"></div>
									 
									 
								
							</div>
							 
						</div>
						
						<!-- Keyword Detail-->
							<div>
							<div class="category">
								 
								<div class="form-group">
									 <div class="row">
										 
                        <label class="col-xs-4 control-label"><b>Category</b> </label>
                        <div class="col-xs-6">
                          <select class="form-control " id="category" name="category" onChange="getSubCat(this.value);">
                            <option value="">Select Category</option>
                                   <?php include 'dbConfig.php';
                                                $sql = "SELECT * FROM category";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row=mysqli_fetch_array($result)) { 
                                             ?>
                                    <option value="<?php echo $row['categoryID'] ?>"><?php echo $row['categoryName']; }?></option>                
                          </select>
                           

                        </div>
									 </div>
                      </div>
								
								 <div class="form-group">
						  <div class="row">
                        <label class="col-xs-4 control-label"><b>Sub-Category</b></label>
                        <div class="col-xs-6">
                          
                         <select class="form-control " id="subcat" name="subcat" onChange="getKeywords(this.value);">
                          <option value="">Sub-Category</option>
                        </select>
                        </div>
						  </div>
                      </div>
								
								 <div class="form-group">
						  <div class="row">
                        <label class="col-xs-4 control-label"><b>Keywords</b></label>
                        <div class="col-xs-6">
                          <div id="key">
                          <select class="selectpicker form-control" multiple="multiple" data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true" id="keyword" name="keyword[]">
                            <option value="">Keywords</option>
                          </select> 
							</div>
                        </div>
						  </div>
                      </div>
								
								
								<div class="sub-categories">
									<br>
									<div class="row">
								<div class="form-group btnNxt">
									<div class="col-xs-offset-8">
									<a class="btn btn-info" id="btn4" href="#">Next Page</a></div>
								</div>
								</div>
								</div>
								
								<div class="row">
									<br>
								<div class="col-sm-offset-1 col-sm-8">
									<div id="kmsg"></div>
									</div>
								
								</div>
					 
									 
									 
									 <div class="clearfix"></div>
									 
									 
								
							</div>
							 
						</div>
						
						
						<!-- Form Submission-->
							<div>
							<div class="category">
								 
								<div class="form-group">
                                           <div class="row">
									 <h3 style="color:#FF9933; padding-left:20px;">Upload AD Images here</h3>
											   <br>
									</div>
									
                                 <div class="row">
									 
                              <div class="col-sm-12">
								  
				  Only JPEG,PNG,JPG Type Image can be Uploaded. 
								  <br><br>
								  <div id="filediv"><input name="file[]" type="file" id="file"/></div>
								   <br>
									 <input type="button" style="width:180px;" id="add_more" class="upload" value="Add More Files"/>
								  
     
  							</div>
									
									  
  
                                 </div>
									
                                 </div>
								
								 
								
								<div class="sub-categories">
									<br>
									<div class="row">
								<div class="form-group btnNxt">
									<div class="clearfix"></div>
						<p class="post-terms" style="margin-left: -10px;">By clicking <strong>post Button</strong> you accept our <a href="terms.html" target="_blank">Terms of Use </a> and <a href="privacy.html" target="_blank">Privacy Policy</a></p><br>
					<input type="submit" value="Post">					
					<div class="clearfix"></div>
								</div>
								</div>
									
									<div class="row">
										<br>
								<div id="status_text"></div>	
									</div>
								
								
								</div>
					 
									 
									 
									 <div class="clearfix"></div>
									 
									 
								
							</div>
							 
						</div>
					
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>	
				
				
				
				
				</form>
					 
			</div>
		</div>	
	</div>
	<!-- // Submit Ad -->

	<?php include 'footer.php'; ?>
	
 
	
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
	<script type="text/javascript">
		
		//Global Vars
		 var v1 = 0; var v2 = 0; var v3 = 0; var v4 = 0;
		
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
	
	
	    <script type="text/javascript">
        function getState(val) {
                  $.ajax({
                  type: "POST",
                  url: "get_state.php",
                  data:'cid='+val,
                  success: function(data){
                      $("#State1").html(data);
                  }
                  });
              }
			
			
        function getcity(val) {
            $.ajax({
            type: "POST",
            url: "get_city.php",
            data:'sid='+val,
            success: function(data){
                $("#city1").html(data);
            }
            });
        }

			function getSubCat(val){
				
				 $.ajax({
                  type: "POST",
                  url: "get_subcat.php",
                  data:'catid='+val,
                  success: function(data){
                      $("#subcat").html(data);
                  }
                  });
			}

			
			function getKeywords(val){
				
				 $.ajax({
                  type: "POST",
                  url: "get_keyword.php",
                  data:'scatid='+val,
                  success: function(data){
                      $("#key").html(data);
					  $('#keyword').selectpicker('refresh');
                  }
                  });
			}

         

</script>
	
	
	
	<script>
	
	$('#btn1').click(function(){
		
		var ad = $('#ad').val();
		var addesc = $('#addesc').val();
		if(ad.length < 3){
		$('#pmsg').html("<div class='alert alert-danger'>Ad Title must be more than 3 Characters</div>");
		}
		else if(addesc.length < 8){
		$('#pmsg').html("<div class='alert alert-danger'>Ad Description must be more than 8 Characters</div>");
		}
		else{
		v1 = 1;
 		$('.resp-tabs-list > .active2').find('a').trigger('click');
		}
		
		
});
		
		$('#btn2').click(function(){
			
			var bname = $('#bname').val();
			var street = $('#street').val();
			var area = $('#area').val();
			var cntry = $('#Country1').val();
			var state = $('#State1').val();
			var city = $('#city1').val();
			var pincode = $('#pincode').val();
			 
			var prex = new RegExp('^[1-9][0-9]{5}$');
			
		if(bname.length < 3){
		$('#lmsg').html("<div class='alert alert-danger'>Business Name must be more than 3 Characters</div>");
		}
		else if(street.length < 3){
		$('#lmsg').html("<div class='alert alert-danger'>Street must be more than 3 Characters</div>");
		}
		else if(area.length < 3){
		$('#lmsg').html("<div class='alert alert-danger'>Area must be more than 3 Characters</div>");
		}
		else if(cntry == "" || cntry.length < 1){
		$('#lmsg').html("<div class='alert alert-danger'>Select Country</div>");
		}
		else if(state == "" || state.length < 1){
		$('#lmsg').html("<div class='alert alert-danger'>Select State</div>");
		}
		else if(city == "" || city.length < 1){
		$('#lmsg').html("<div class='alert alert-danger'>Select City</div>");
		}
		else if(!prex.test(pincode)){
		$('#lmsg').html("<div class='alert alert-danger'>Enter Valid Pincode</div>");
		}
		else{
		 v2 = 1;
  		$('.resp-tabs-list > .active3').find('a').trigger('click');		
		}
			
});
		
		$('#btn3').click(function(){
			
			var llno = $('#llno').val();
			var mno1 = $('#mno1').val();
			var mno2 = $('#mno2').val();
			var fax1 = $('#fax1').val();
			var fax2 = $('#fax2').val();
			var website = $('#website').val();
			var bemail = $('#bemail').val();
			
			var lrex = new RegExp('/^[0-9]\d{2,4}-\d{6,8}$/');
			var mrex = new RegExp('^[789][0-9]{9}$');
			/*var frex = new RegExp('/^\+?[0-9]{7,}$/');*/
			var erex = new RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/); 
			var wrex = new RegExp('@^(http\:\/\/|https\:\/\/)?([a-z0-9][a-z0-9\-]*\.)+[a-z0-9][a-z0-9\-]*$@i');
		
		
		
		if(llno.length > 0)
		{
		if(!lrex.test(llno)){
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Land line No.</div>");
		}
		}
			
		if(mno2.length > 0)
		{
		if(!mrex.test(mno2)){
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Mobile No.2</div>");
		}
		}
			
		/*if(fax1.length > 0)
		{
		if(!frex.test(fax1)){
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Fax 1</div>");
		}
		}
			
		if(fax2.length > 0)
		{
		if(!frex.test(fax2)){
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Fax 2</div>");
		}
		}*/
			
		if(website.length > 0)
		{
		if(!wrex.test(website)){
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Website</div>");
		}
		}
	
		 
		if(!mrex.test(mno1)){
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Mobile No.1</div>");			
		}
		else if(!erex.test(bemail)){
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Business Email</div>");			
		}
		else{
		 v3=1;
  		$('.resp-tabs-list > .active4').find('a').trigger('click');		
		}
				
});
		
		$('#btn4').click(function(){
			
			var category = $('#category').val();
			var subcat = $('#subcat').val();
			var keyword = $('#keyword').val();
			
		if(category == "" || category.length < 1){
		$('#kmsg').html("<div class='alert alert-danger'>Select Category</div>");
		}
		else if(subcat == "" || subcat.length < 1){
		$('#kmsg').html("<div class='alert alert-danger'>Select Sub-Category</div>");
		}
		else if(keyword == ""){
		$('#kmsg').html("<div class='alert alert-danger'>Select Keywords</div>");
		}
		else{
		 v4=1;
  		$('.resp-tabs-list > .active5').find('a').trigger('click');
		}
					
});
	
	</script>
	
	
	
	<script>

		 $("#list_form").on('submit', (function(e) {
                
			 e.preventDefault();
          
			 do{
			 if(v1!=1)
			{
		 
		var ad = $('#ad').val();
		var addesc = $('#addesc').val();
		if(ad.length < 3){
		$('.resp-tabs-list > .active1').find('a').trigger('click');
		$('#pmsg').html("<div class='alert alert-danger'>Ad Title must be more than 3 Characters</div>");
			break;
		}
		else if(addesc.length < 8){
		$('.resp-tabs-list > .active1').find('a').trigger('click');
		$('#pmsg').html("<div class='alert alert-danger'>Ad Description must be more than 8 Characters</div>");
			break;
			 
			
		}
				else{
					v1=1;
				}
				
				
			}
			 if(v2!=1)
			{
				var bname = $('#bname').val();
			var street = $('#street').val();
			var area = $('#area').val();
			var cntry = $('#Country1').val();
			var state = $('#State1').val();
			var city = $('#city1').val();
			var pincode = $('#pincode').val();
			 
			var prex = new RegExp('^[1-9][0-9]{5}$');
			
		if(bname.length < 3){
			$('.resp-tabs-list > .active2').find('a').trigger('click');
		$('#lmsg').html("<div class='alert alert-danger'>Business Name must be more than 3 Characters</div>");
			break;
			
		}
		else if(street.length < 3){
			$('.resp-tabs-list > .active2').find('a').trigger('click');
		$('#lmsg').html("<div class='alert alert-danger'>Street must be more than 3 Characters</div>");
			break;
			
		}
		else if(area.length < 3){
			$('.resp-tabs-list > .active2').find('a').trigger('click');
		$('#lmsg').html("<div class='alert alert-danger'>Area must be more than 3 Characters</div>");
			break;
			
		}
		else if(cntry == "" || cntry.length < 1){
			$('.resp-tabs-list > .active2').find('a').trigger('click');
		$('#lmsg').html("<div class='alert alert-danger'>Select Country</div>");
			break;
			
		}
		else if(state == "" || state.length < 1){
			$('.resp-tabs-list > .active2').find('a').trigger('click');
		$('#lmsg').html("<div class='alert alert-danger'>Select State</div>");
			break;
			
		}
		else if(city == "" || city.length < 1){
			$('.resp-tabs-list > .active2').find('a').trigger('click');
		$('#lmsg').html("<div class='alert alert-danger'>Select City</div>");
			break;
			
		}
		else if(!prex.test(pincode)){
			$('.resp-tabs-list > .active2').find('a').trigger('click');
		$('#lmsg').html("<div class='alert alert-danger'>Enter Valid Pincode</div>");
			break;
			
		}
		else{
		 v2 = 1;
		}
				
				
			}
			  if(v3!=1)
			{
				
				var llno = $('#llno').val();
			var mno1 = $('#mno1').val();
			var mno2 = $('#mno2').val();
			var fax1 = $('#fax1').val();
			var fax2 = $('#fax2').val();
			var website = $('#website').val();
			var bemail = $('#bemail').val();
			
			var lrex = new RegExp('/^[0-9]\d{2,4}-\d{6,8}$/');
			var mrex = new RegExp('^[789][0-9]{9}$');
			/*var frex = new RegExp('/^\+?[0-9]{7,}$/');*/
			var erex = new RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/); 
			var wrex = new RegExp('@^(http\:\/\/|https\:\/\/)?([a-z0-9][a-z0-9\-]*\.)+[a-z0-9][a-z0-9\-]*$@i');
		
				
		if(llno.length > 0)
		{
		if(!lrex.test(llno)){
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Land line No.</div>");
			break;
		}
		}
				
		if(mno2.length > 0)
		{
		if(!mrex.test(mno2)){
			$('.resp-tabs-list > .active3').find('a').trigger('click');
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Mobile No.2</div>");
			break;
			
		}
		}
			
	/*	if(fax1.length > 0)
		{
		if(!frex.test(fax1)){
			$('.resp-tabs-list > .active3').find('a').trigger('click');
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Fax 1</div>");
		break;
			
		}
		}
			
		if(fax2.length > 0)
		{
		if(!frex.test(fax2)){
			$('.resp-tabs-list > .active3').find('a').trigger('click');
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Fax 2</div>");
		break;
			
		}
		}*/
			
		if(website.length > 0)
		{
		if(!wrex.test(website)){
			$('.resp-tabs-list > .active3').find('a').trigger('click');
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Website</div>");
			break;
			
		}
		}
	
		 
		 if(!mrex.test(mno1)){
			$('.resp-tabs-list > .active3').find('a').trigger('click');
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Mobile No.1</div>");
			break;
			
		}
		else if(!erex.test(bemail)){
			$('.resp-tabs-list > .active3').find('a').trigger('click');
		$('#cmsg').html("<div class='alert alert-danger'>Enter Valid Business Email</div>");
			break;
			
		}
		else{
		 v3=1;	
		}
				
			}
			 if(v4!=1)
			{
				
				
				var category = $('#category').val();
			var subcat = $('#subcat').val();
			var keyword = $('#keyword').val();
			
		if(category == "" || category.length < 1){
			$('.resp-tabs-list > .active4').find('a').trigger('click');
		$('#kmsg').html("<div class='alert alert-danger'>Select Category</div>");
			break;
			
		}
		else if(subcat == "" || subcat.length < 1){
			$('.resp-tabs-list > .active4').find('a').trigger('click');
		$('#kmsg').html("<div class='alert alert-danger'>Select Sub-Category</div>");
			break;
			
		}
		else if(keyword == ""  ){
			$('.resp-tabs-list > .active4').find('a').trigger('click');
		$('#kmsg').html("<div class='alert alert-danger'>Select Keywords</div>");
			break;
			
		}
		else{
		 v4=1;
		}
				
			}
			 
			if(v1==1 && v2==1 && v3==1 && v4==1){
				 
				 
			
			 
			 var files = $('#file').val();
			 if(files.length < 3){
		$('#status_text').html("<div class='alert alert-danger'>Select Image</div>");
		}
			 else{
				 
                $.ajax({
                    url: "addListing.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $("#status_text").html(data);
                       
                    },
                    error: function() {}
                });
			 }
                
 			}

			 }while(false);
			 
            }));
			 

	</script>
	
	
	<script>
	
	
	var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function() {
//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
$('#add_more').click(function() {
$(this).before($("<div/>", {
id: 'filediv'
}).fadeIn('slow').append($("<input/>", {
name: 'file[]',
type: 'file',
id: 'file'
}), $("<br/><br/>")));
});
// Following function will executes on change event of file input to select different file.
$('body').on('change', '#file', function() {
if (this.files && this.files[0]) {
abc += 1; // Incrementing global variable by 1.
var z = abc - 1;
var x = $(this).parent().find('#previewimg' + z).remove();
$(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
$(this).hide();
$("#abcd" + abc).append($("<img/>", {
id: 'img',
src: 'images/x.png',
alt: 'delete'
}).click(function() {
$(this).parent().parent().remove();
}));
}
});
// To Preview Image
function imageIsLoaded(e) {
$('#previewimg' + abc).attr('src', e.target.result);
};
 
});
	
	
	</script>
	
</body>
		
</html>