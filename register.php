<?php 

extract($_POST);

/*echo $name;
echo $email;
echo $mobile;
echo $re_password;*/
$pass = $password;

require_once("dbConfig.php");

$sql = "SELECT * FROM user WHERE userEmail = '$email' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        ?>
		<div class="alert alert-danger">Email Already Exists !!</div>
		<?php
		exit;
    }
}
$sql11 = "SELECT * FROM user WHERE userMobile = '$mobile' ";
$result11 = mysqli_query($conn, $sql11);
if (mysqli_num_rows($result11) > 0) {
    while($row11 = mysqli_fetch_assoc($result11)) {
        ?>
		<div class="alert alert-danger">Mobile Already Exists !!</div>
		<?php
		exit;
    }
}

if ($name == ""|| strlen($name)<'2') {
		?>
	<div class="alert alert-danger">Enter Name More Than 2 Char</div>
	<?php
}

elseif ($email=="" || strlen($email)<'3' || !preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/", $email)) {
	?>
	<div class="alert alert-danger">Enter Valid Email ID</div>
	<?php
}
elseif ($mobile=="" || strlen($mobile)!='10') {
	?>
	<div class="alert alert-danger">Enter Correct Mobile No</div>
	<?php
}
elseif ($pass=="" || strlen($pass)<'6') {
	?>
	<div class="alert alert-danger">Enter Password More Than 6 Char</div>
	<?php
}
elseif ($re_password=="" || strlen($re_password)<'6') {
	?>
	<div class="alert alert-danger">Enter Password More Than 6 Char</div>
	<?php
}
elseif ($pass != $re_password) {
		?>
	<div class="alert alert-danger">Password Not Same</div>
	<?php
}
else{

	$pass = md5($pass);

	date_default_timezone_set("Asia/Kolkata");
	$datetime = date("M d, Y h:i");

	$status = '0';//optional otp change after adding otp module

	$notificationContent = $name." wants to Register on Dialin";
	$notificationType = " Registration";

	$sql = "INSERT INTO user( userName, `userMobile`, `userEmail`, `userPassword`, `regDate`) VALUES ('$name', '$mobile', '$email', '$pass', '$datetime')";

	if ($conn->query($sql) === TRUE) {

		$sql11 = "INSERT INTO notification( `notificationType`, `notificationContent`, `notificationDate`, `notificationTime`, `userID_fk`) VALUES ('$notificationType', '$notificationContent', '$datetime', '$datetime', '0')";

		if ($conn->query($sql11) === TRUE) {

			error_reporting(0);

			$subject  = "Shared Information From www.trypune.com for register activation";
		    $headers  = "MIME-Version: 1.0;\n";
		    $headers .= "Content-type: text/html; charset=iso-8859-1;\n";

		    $headers .= "From:info@trypune.com";

		    $message_from_us = "<h2>Information From Try Pune</h2>
		        <p><b>Hi i am &nbsp;".$fname. " ".$lname.",</b>&nbsp;</p>
				<p>i am Trying to active my trypune apartment panel please active me.</p>
				<p>Email ID: ".$email."
				<p>Contact No: ".$mobile."
				</p>
				
				";
		   // mail("register@trypune.com", $subject, $message_from_us, $headers);

			?>
				<div class="alert alert-success">Registration Success..!!  <a href="signin.php">  Please go to login</a></div>
			<?php
		}
	} 
	else {
	?>
		<div class="alert alert-warning">Something Problem..!!</div>
	<?php
        echo("Error description: " . mysqli_error($conn));
	}
}


?>