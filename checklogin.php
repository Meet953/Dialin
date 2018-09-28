<?php 

extract($_POST);

/*echo $email;
echo $password;*/
$pass = $password;
require_once("dbConfig.php");

if ($email=="" || strlen($email)<'3' || !preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/", $email)) {
	?>
	<div class="alert alert-danger">Enter Valid Email ID</div>
	<?php
}
elseif ($pass=="" || strlen($pass)<'6') {
	?>
	<div class="alert alert-danger">Enter Password More Than 6 Char</div>
	<?php
}
else{

	$pass = md5($pass);

	date_default_timezone_set("Asia/Kolkata");
	$datetime = date("M d, Y h:i:s");

	$sql22 = "SELECT * FROM `user` WHERE `userID`='0' and `userEmail`='$email' and`userPassword`='$pass'";
	$result22 = $conn->query($sql22);
	if ($result22->num_rows > 0) {
	    while($row22 = $result22->fetch_assoc()) {
	        $userid = $row22['userID'];
	        session_start();
        	$_SESSION['adminuserid'] = $userid;
        	?>
				<div class="alert alert-success">login Success..!! Welcome to DialIn Admin Panel</div>
			<?php	        	
        	echo "<script>window.location='../admin/';</script>";
        	exit;
	    }
	}
    else{
        $sql = "SELECT * FROM `user` WHERE `userEmail`='$email' and`userPassword`='$pass'";
	       $result = $conn->query($sql);
        if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        $userid = $row['userID'];
	        session_start();
        	$_SESSION['userid'] = $userid;
        	?>
				<div class="alert alert-success">login Success..!! Welcome to Dial-In</div>
			<?php	        	
        	echo "<script>window.location='../dialin/';</script>";
        	exit;
	    }
            
	}
        else{
            
            ?>
                <div class="alert alert-danger">Invalid Email or Password</div>
                <?php
            }
    }
	
	
}


?>