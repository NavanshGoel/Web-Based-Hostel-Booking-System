<?php
	session_start();
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cost</title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="template.css">
		<style>
			.main-container {
			height:75%;
			display:flex;
			justify-content:center;
			align-items:center;
			flex-direction:column;
			text-align:center;
			color:#fff;
		}
		
		.table-container {
			background: var(--primary-color);
			padding:1rem;
			padding-top:1.5rem;
			padding-bottom:1rem;
			width:30%;
			
		}
		.table-container table {
			width:100%;
		}
		.table-container table tr {
			margin-bottom:1.2rem;
		}
		.table-container table th {
			float:left;
			font-size:1.6rem;
		}
		.table-container table td {
			font-size: 1.4rem;
		}
		</style>
	</head>
	<body>
   <div class="menu-wrap">
      <input type="checkbox" class="toggler">
      <div class="hamburger"><div></div></div>
      <div class="menu">
        <div>
          <div>
            <ul>
              <li><a href="choice.php">Home</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="form.html">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
   </div>
   <div class="body">
      <div class="nav">
         <div class="l-heading">
            <h1>Payment Info</h1>
         </div>
         <div class="user">
            <i class="fas fa-user-circle fa-2x"></i>
            <p>
					<?php echo $id;?>
				</p>
         </div>
		</div>
		<div class="main-container">
			<div class="table-container">
				<table>
					<?php
					$con=mysqli_connect("localhost:3306","root","root");
					mysqli_select_db($con,"project");
					$student_id=$_SESSION["id"];
					$block=$_SESSION["block"];
					$beds=$_SESSION["beds"];
					$name=$_SESSION["name"];
					$room_type=$_SESSION["room_type"];
					$mess=$_SESSION["mess"];
					$table=$_SESSION["table"];
					$total=0;
					$room_info=$_SESSION["room_info"];
					$var="select * from room_rent where (type='$room_type' and beds='$beds')";
					$result=mysqli_query($con,$var);
					$var1="select * from mess where type='$mess'";
					$result1=mysqli_query($con,$var1);
					while(($row=mysqli_fetch_assoc($result)) and ($row1=mysqli_fetch_assoc($result1)))
					{
					$total=$row["total"]+$row1["amount"];
					$_SESSION["total"]=$total;
					echo "<tr>";
					echo "<th>Hostel Fees : </th>";
					echo "<td>".$row["amount"]."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<th>Admission & processing : </th>";
					echo "<td>".$row["processing"]."<td>";
					echo "</tr>";
					echo "<tr>";
					echo "<th>Caution deposit : </th>";
					echo "<td>".$row["caution"]."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<th>Mess : </th>";
					echo "<td>".$row1["amount"]."</td>";
					echo "</tr>";
					}
					echo "</table>";
					echo "<h2>Total : ".$total."</h2>";
					?>
				
				<a class="btn" href="final.php">Book</a>
			</div>
		</div>
		<footer class="main-footer">
         <p>
            Copyright &copy; 2020, All Rights Reserved.
         </p>
   	</footer>
	</div>
	</body>
</html>