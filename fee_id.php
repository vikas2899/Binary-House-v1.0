<?php
$id=$_POST['id'];
$con = mysqli_connect('localhost','root','','building_data');
$query="SELECT * from fee where id='$id'";
$run = mysqli_query($con,$query);
    if($run){
    	echo "<table border='2px solid black'>";
			echo "<tr>";
					echo "<th> Student Id </th>";
					echo "<th> Transaction Date </th>";
					echo "<th> Paid </th>";
					echo "<th> Transaction NUmber </th>";
                    echo "<th> Amount </th>";
                    echo "<th> Remark </th>";
                    echo "<th> Transaction Month </th>";
			echo "</tr>";
	while($row = mysqli_fetch_array($run)){		
			echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['date1']."</td>";
                echo "<td>".$row['paid']."</td>";
                echo "<td>".$row['transaction']."</td>";
                echo "<td>".$row['amount']."</td>";
                echo "<td>".$row['remark']."</td>";
                echo "<td>".$row['month']."</td>";
            echo "</tr>";   
        }
        echo "</table>";
    }          
?>