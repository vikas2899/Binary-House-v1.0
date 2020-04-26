<?php
ob_start();
define('myheader',TRUE);
require('header.php');
$choice=$_POST['hostel'];
if($choice=='Boys Hostel'){
	echo"<form action='expand_config.php' method='post'>";
	echo"<label>Building Number</label>";
	echo"<select name='build1'>";
	for($i=1;$i<=10;$i++){
			echo"<option>b".$i."</option>";
		}
	echo"</select>";
	echo"<br/>";
	echo"<label>Floor Number</label>";
	echo"<input type='text' name='floor'/><br/>";
	echo"<label>Room Number</label>";
	echo"<input type='text' name='room'/><br/>";
	echo "<input type='hidden' name='hostel' value=".$choice.">";
	echo"<input type='submit' value='Go' name='submit'/>";
	echo"</form>";

}else{
	echo"<form action='expand_config.php' method='post'>";
	echo"<label>Building Number</label>";
	echo"<select name='build1'>";
	for($i=1;$i<=10;$i++){
			echo"<option>g".$i."</option>";
		}
	echo"</select>";
	echo"<br/>";
	echo"<label>Floor Number</label>";
	echo"<input type='text' name='floor'/><br/>";
	echo"<label>Room Number</label>";
	echo"<input type='text' name='room'/><br/>";
	echo "<input type='hidden' name='hostel' value=".$choice.">";
	echo"<input type='submit' value='Go' name='submit'/>";
	echo"</form>";
}
?>
<script type="text/javascript">
	document.getElementById("drop").style.display = "none";
</script>