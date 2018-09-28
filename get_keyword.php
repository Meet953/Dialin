

<?php

require_once("dbConfig.php");


 if(!empty($_POST["scatid"])) {
	$query ="SELECT * FROM keyword WHERE subcategoryID_fk = '" . $_POST["scatid"] . "'";
	$results =mysqli_query($conn, $query); 
?>

<div class="key">
 <select class="selectpicker form-control" multiple="multiple" data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true" id="keyword" name="keyword[]">
                                                    
 
<?php
	while($row=mysqli_fetch_array($results)) {
?>
<option value="<?php echo $row['keywordName']; ?>"><?php echo $row['keywordName'];?></option>
	 
	  
<?php
	}
	 ?>
	 
	 </select> 
		 </div>
<?php
}

?>



 