<?php
require_once("dbConfig.php");
if(!empty($_POST["cid"])) {
	$query ="SELECT * FROM states WHERE cid = '" . $_POST["cid"] . "'";
	$results =mysqli_query($conn, $query);
?>
	<option value="">Select State</option>
<?php
	while($state=mysqli_fetch_array($results)) {
?>
	<option value="<?php echo $state["sid"]; ?>"><?php echo $state["sname"]; ?></option>
<?php
	}
}
?>
