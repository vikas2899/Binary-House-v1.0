<?php
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$doj=$_POST['doj'];
$emptype=$_POST['etype'];
$salary=$_POST['salary'];
$address=$_POST['address'];
$designation=$_POST['des'];
$con = mysqli_connect('localhost','root','','building_data');
		$query = "INSERT into employee(emptype,name,gender,dob,phone,doj,address,salary,designation) values('$emptype','$name','$gender','$dob','$phone','$doj','$address','$salary','$designation')";
		$run = mysqli_query($con,$query);
		if($run){
			echo"<h5> Employe details successfully added!!</h5>";
		}
?>
