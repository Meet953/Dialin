<?php 
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
error_reporting(0);
include 'dbConfig.php';
extract($_POST);
date_default_timezone_set("Asia/Kolkata");
$datetime = date("M d, Y h:i");


if(isset($cmt)){
    $user=$_SESSION['userid'];
    
    
    $sql = "INSERT INTO `comment`(`listingID_fk`, `userID_fk`, `comment`, `date`) VALUES('$listid','$user','$comment','$datetime')";

if ($conn->query($sql) === TRUE) {
    $sql = "SELECT * from comment,user where user.userID=comment.userID_fk and listingID_fk='$listid' ORDER BY commentID DESC";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            <div id="result">
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
						</div>
            <?php
        }}
} else {?>
<div class="alert alert-warning">Please Try Again</div>
<?php
}
    
}

if(isset($help)){
     if ($query == "") {
		?>
	<div class="alert alert-danger">Please Enter Query</div>
	<?php
}


else{
    $user=$_SESSION['userid'];
    $sql = "SELECT * from user where userID='$user'";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
        $name=$row["userName"];
        $email=$row["userEmail"];
        $mobile=$row["userMobile"];
        
        $message=$name." Has raised this Query :<br /><b>".$query."</b><br />Contact ".$name." on <br>Email: ".$email." <br />Contact: ".$mobile;
         $sql11 = "INSERT INTO message( `message`, `senderID_fk`, `recieverID_fk`, `messageDate`, `messageStatus`) VALUES ('$message', '$user', '0', '$datetime', '0')";

			if ($conn->query($sql11) === TRUE) {
			
		
		?>
<div class="alert alert-success">Send Message Successfully</div>
<?php
                
                
            }
        
        }
        }
}
    
   }


if(isset($contact)){
    
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

elseif ($subject=="") {
		?>
	<div class="alert alert-danger">Enter Subject</div>
	<?php
}
    elseif ($mobile=="" || strlen($mobile)<'10'| strlen($mobile)>'10') {
	?>
	<div class="alert alert-danger">Enter Valid Mobile No</div>
	<?php
}
    elseif ($message=="") {
		?>
	<div class="alert alert-danger">Enter Message</div>
	<?php
}
else{
        
        $text="Name: <b>".$name."</b><br />Email: <b>".$email."</b><br />Mobile: <b>".$mobile."</b><br />Subject: ".$subject."</b><br />Message: <b>".$message."</b>";
         $sql11 = "INSERT INTO message( `message`, `senderID_fk`, `recieverID_fk`, `messageDate`, `messageStatus`) VALUES ('$text  ', '0', '0', '$datetime', '0')";

			if ($conn->query($sql11) === TRUE) {
			
		
		?>
        <div class="alert alert-success">Message Sent Successfully</div>
        
        <?php
                
           
    
    
   }
}
}

if(isset($feedback)){
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

elseif ($subject=="") {
		?>
	<div class="alert alert-danger">Enter Subject</div>
	<?php
}
    elseif ($mobile=="" || strlen($mobile)<'10'| strlen($mobile)>'10') {
	?>
	<div class="alert alert-danger">Enter Valid Mobile No</div>
	<?php
}
    elseif ($message=="") {
		?>
	<div class="alert alert-danger">Enter Message</div>
	<?php
}
else{
    
$sql = "INSERT INTO `feedback`(`name`, `email`, `mobile`, `subject`, `message`, `date`) VALUES ('$name','$email','$mobile','$subject','$message','$datetime')";

if ($conn->query($sql) === TRUE) {
   	?>
<div class="alert alert-success">Thankyou For Your Valuable Feedback</div>
<?php
} else {?>
<div class="alert alert-warning">Please Try Again</div>
<?php
}
}
    
   }


?>
