<?php

require_once("dbConfig.php");

 if(!empty($_POST["sid"])) {
	$query ="SELECT * FROM cities WHERE sid = '" . $_POST["sid"] . "'";
	$results =mysqli_query($conn, $query); 
?>
<option value="">Select City</option>
<?php
	while($state=mysqli_fetch_array($results)) {
?>
<option value="<?php echo $state['city_name']; ?>"><?php echo $state['city_name'];?></option>
<?php
	}
}
?>

 