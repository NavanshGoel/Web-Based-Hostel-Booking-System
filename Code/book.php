<?php
	session_start();
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booked Rooms</title>
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="template.css">
	<style>
		body {
			background:url('background6.jpg') no-repeat center center/cover;
		}

		.body {
		background:rgba(26, 31, 31, 0.85);
		}
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
			width:50%;
			border-bottom:1px dotted #fff;
		}

		.table-container table {
			width:100%;
		}
		.table-container table tr {
			margin-bottom:1.2rem;
		}
		.table-container table th {
			
			font-size:1.6rem;
		}
		.table-container table td {
			font-size: 1.4rem;
		}
		
		.roomate-container h1 {
			font-size:2.5rem;
		}

		.roomate-container {
			background: var(--primary-color);
			padding-bottom:1.5rem;
			width:50%;
			display:flex;
			flex-direction:column;
			justify-content:center;
		}

		.roomate-container table {
			width:90%;
			align-self:center;
			margin:0;
		}
		.roomate-container table tr {
			margin-bottom:1.2rem;
		}
		.roomate-container table th {
			
			font-size:1.6rem;
		}
		.roomate-container table td {
			font-size: 1.4rem;
		}
		.btn {
			font-size:1.3rem;
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
              <li><a href="#">Contact</a></li>
              <li><a href="form.html">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
   </div>
   <div class="body">
      <div class="nav">
         <div class="l-heading">
            <h1>Booked Room</h1>
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
					<tr>
						<th>S.NO </th>
						<th>BLOCK </th>
						<th>FLOOR </th>
						<th>ROOM ID </th>
						<th>TYPE </th>
						<th>BEDS </th>
						<th>MESS</th>
					</tr>
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
						$room_id=$_POST['room'];
						$update_query="update $table set status='booking' where room_id='$room_id'";
						$update_result=mysqli_query($con,$update_query);
						$_SESSION["student_room"]=$room_id;
						$i=1;
						if(isset($_POST['submit']))
						{
							$var1="select floor from $table where room_id='$room_id'";
							$result1=mysqli_query($con,$var1);
							while($row= mysqli_fetch_assoc($result1))
							{
								$floor=$row["floor"];
							}
							$var="select room_id,beds,type,block,floor from $table where (room_id='$room_id' and beds='$beds' and type='$room_type' and beds_available<> 0)";
							$result=mysqli_query($con,$var);
							if(mysqli_num_rows($result)!=1)
							{

								$message="You have already booked the room ".$room_booked;
								echo "<script>alert('$message');</script>";
								header("refresh:0; url=choice.php");
							}
							else
							{
								echo "<tr>";
								echo "<td>".$i."</td><td>".$block."</td><td>".$floor."</td><td>".$room_id."</td><td>".$room_type."</td><td>".$beds."</td><td>".$mess."</td>";
								echo "</tr>";
							}
						}
						?>
				</table>
			</div>
			<div class="roomate-container">
				<h1>Roomates</h1>
					<table>
						<tr>
							<th>S.NO</th>
							<th>REGISTRATION NUMBER</th>
							<th>NAME</th>
						</tr>
							<?php
							$con=mysqli_connect("localhost:3306","root","root");
							mysqli_select_db($con,"project");
							$room_booked=$_SESSION["student_room"];
							$room_info=$_SESSION["room_info"];
							$var2="select student_id,name from $room_info where room_id='$room_booked'";
							$result2=mysqli_query($con,$var2);
							$i=1;
							while($row= mysqli_fetch_assoc($result2))
							{
								echo "<tr>";
								echo "<td>".$i."</td><td>".$row["student_id"]."</td><td>".$row["name"]."</td>";
								echo "</tr>";
								$i=$i+1;
							}
							?>
					</table>
			</div>
			<a class="btn" href="payment.php">Book</a>
		</div>
		<footer class="main-footer">
         <p>
            Copyright &copy; 2020, All Rights Reserved.
         </p>
   	</footer> 
	</div>
</body>
</html>