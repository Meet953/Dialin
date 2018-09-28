<?php


session_start();
 $activeuserid = $_SESSION['userid'];
?>


<?php
include 'dbConfig.php';
   //query for insert data into tables

extract($_POST);

$images = array();

if (isset($name)) {
$j = 0;     // Variable for indexing uploaded image.
$target_path = "uploads/";     // Declaring Path for uploaded images.
for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
// Loop to get individual element from the array
$validextensions = array("jpeg", "jpg", "png","JPEG", "JPG", "PNG");      // Extensions which are allowed.
$ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
$file_extension = end($ext); // Store extensions in the variable.
$image_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
if (  in_array($file_extension, $validextensions)) {
if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $image_path)) {
// If file moved to uploads folder.
	$images[] = $image_path;
echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
 
} else {     //  If File Was Not Moved.
echo $j. ').<span id="error">Please try again!.</span><br/><br/>';
}
} else {     //   If File Size And File Type Was Incorrect.
echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
}
}

$pymt = implode(",",$payment);
$kword = implode(",",$keyword);
$img = implode(",",$images);	
	
	 date_default_timezone_set("Asia/Kolkata");
     $datetime = date("M d, Y h:i");
	
$sql1 = "INSERT INTO `listing`(`userID_fk`, `subcategoryID_fk`, `keyword`, `businessName`, `businessBuilding`, `businessStreet`, `businessLandmark`, `businessArea`, `businessCity`, `businessPincode`, `businessState`, `businessCountry`, `businessLandlineno`, `businessMobileno1`, `businessMobileno2`, `businessFaxno1`, `businessFaxno2`, `tollfreeNo1`, `tollfreeNo2`, `businessWebsite`, `businessEmail`, `paymentModes`, `establishedYear`, `employeesNo`, `photos`,`adTitle`,`adDesc`,`date`) VALUES ('$activeuserid','$subcat','$kword','$bname','$build','$street','$land','$area','$city1','$pincode','$State1','$Country1','$llno','$mno1','$mno2','$fax1','$fax2','$toll1','$toll2','$website','$bemail','$pymt','$year','$enum','$img','$ad','$addesc','$datetime')";

	 $query_run= mysqli_query($conn,$sql1);
	
	if ($query_run) {
		 ?>
	        	<div class="alert alert-success">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Success Business Listed <i class="glyphicon glyphicon-thumbs-up"></i></div>
	        <?php
		 // echo "<script>window.location='signin.php';</script>";
	}
	
}

   mysqli_close($conn);
?>