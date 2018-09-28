<?php

require_once("dbConfig.php");

 if(!empty($_POST["catid"])) {
	$query ="SELECT * FROM subcategory WHERE categoryID_fk = '" . $_POST["catid"] . "'";
	$results =mysqli_query($conn, $query); 
?>
<option value="">Select Sub-Category</option>
<?php
	while($row=mysqli_fetch_array($results)) {
?>
<option value="<?php echo $row['subcategoryID']; ?>"><?php echo $row['subcategoryName'];?></option>
<?php
	}
}
?>

