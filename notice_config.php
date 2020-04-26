<?php
$notice=$_POST['notice'];
$text=$_POST['desc'];
$con = mysqli_connect('localhost','root','','building_data');
$query="INSERT into notice_board(notice,description) values('$notice','$text')";
$run = mysqli_query($con,$query);
if($run){
	echo"<h4>Notice added successfully";
}else{
	echo"not added";
}
?>