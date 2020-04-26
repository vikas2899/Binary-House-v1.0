<?php
ob_start();
define('myheader',TRUE);
require('header.php');
if(isset($_POST['submitf'])){
    $eid=$_POST['eid'];
    $con = mysqli_connect('localhost','root','','building_data');
    $query="SELECT * from employee where empid='$eid'";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row<1){
        ?>
            <script type="text/javascript">
                alert("No Employee Found!");
            </script>
        <?php
        header( "refresh:0.5;url=employee_list.php" );
    }
    else{
            if($run){
	                echo "<table border='2px solid black'>";
			        echo "<tr>";
					echo "<th> Employee Id </th>";
					echo "<th> Employee Type </th>";
					echo "<th> Employee Name </th>";
					echo "<th> Employee Gender </th>";
					echo "<th> Employee Date of Birth </th>";
					echo "<th> Employee Phone </th>";
					echo "<th> Employee Date of joining </th>";
					echo "<th> Employee Address </th>";
					echo "<th> Employee Salary </th>";
					echo "<th> Employee Designation </th>";
			        echo "</tr>";
	       while($row = mysqli_fetch_array($run)){		
			     echo "<tr>";
                echo "<td>".$row['empid']."</td>";
                echo "<td>".$row['emptype']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['dob']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['doj']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['salary']."</td>";
                echo "<td>".$row['designation']."</td>";
                    echo "</tr>";   
        }
        echo "</table>";
    }          
    else{
	    $con->error;
    }
}
}
?>