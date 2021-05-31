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
            <h1>Receipt</h1>
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
				$total=$_SESSION["total"];
				$room_info=$_SESSION["room_info"];
				$room_booked=$_SESSION["student_room"];
				$var="insert into $room_info values('$student_id','$name','$room_booked','$mess','$total')";
				$var1="update $table set beds_available=beds_available-1 where room_id='$room_booked'";
				$result=mysqli_query($con,$var);

				if($result==True)
				{
					$result1=mysqli_query($con,$var1);
					if($result1==True)
					{
						$beds_available=0;
						$query_bed="select beds_available from $table where room_id='$room_booked'";
						$result_bed=mysqli_query($con,$query_bed);
						while($row=mysqli_fetch_assoc($result_bed))
							{
								$beds_available=$row['beds_available'];
							}
						if($beds_available==0)
							{
								$query_update="update $table set status='closed' where room_id='$room_booked'";
							}
						else
							{
								$query_update="update $table set status='open' where room_id='$room_booked'";
							}
						$result_update=mysqli_query($con,$query_update);
						if($result_update==True)
						{	
						echo "<table>";
						echo "<tr>";
						echo "<th>Name :</th>";
						echo "<td>".$name."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th>Registration :</th>";
						echo "<td>".$student_id."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th>Room booked :</th>";
						echo "<td>".$room_booked."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th>Block :</th>";
						echo "<td>".$block."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th>Type :</th>";
						echo "<td>".$room_type."</td>";
						echo "<tr>";
						echo "<th>Beds :</th>";
						echo "<td>".$beds."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th>Mess :</th>";
						echo "<td>".$mess."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th>Amount paid :</th>";
						echo "<td>".$total."</td>";
						echo "</tr>";
						echo "</table>";
						}
						else
						{
							echo '<script>
									alert("There was an error try again later")
									</script>';
						}
					}
				}
				else
				{
					echo '<script>
					alert("You have already booked a room.")
					</script>';
				}
				?>
				<a class="btn" href="destroy.php">Log out</a>
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
