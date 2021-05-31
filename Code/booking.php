<?php
	session_start();
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Available Rooms</title>
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="template.css">
	<style>

		body {
			background:url('background4.jpg') no-repeat center center/cover;
		}

		.body {
		background:rgba(26, 31, 31, 0.8);
		}

		.l-heading {
			font-size:2rem;
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
		.form-container {
			width:768px;
			background: var(--primary-color);
		}
		.form-container form {
			width:100%;
		}
		.form-container form label {
			font-size:1.6rem;
		}
		.form-container form input {
			width:180px;
			padding:0.2rem 1rem;
			font-size:1.1rem;
			margin-left:1rem;
		}
		.table-container {
			background: var(--primary-color);
			padding:1.5rem;
			padding-right:0;
			width:50%;
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
            <h1>Available Rooms</h1>
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
						<th>BEDS AVAILABLE</th>
					</tr>
						<?php

						$con =mysqli_connect("localhost:3306","root","root");
						mysqli_select_db($con,"project");
						$student_id=$_SESSION["id"];
						$gender=$_SESSION["gender"];
						$block=$_SESSION["block"];
						$beds=$_SESSION["beds"];
						$room_type=$_SESSION["room_type"];
						$mess=$_SESSION["mess"];
						$table=$_SESSION["table"];
						$year=$_SESSION["year"];
						$var="select * from room_a where student_id='$student_id'";
						$var1="select room_id from room_a where student_id='$student_id'";
						$var3="select * from room_b where student_id='$student_id'";
						$var4="select room_id from room_b where student_id='$student_id'";
						$var5="select * from room_g where student_id='$student_id'";
						$var6="select room_id from room_g where student_id='$student_id'";
						$flag=True;
						$result=mysqli_query($con,$var);
						$result1=mysqli_query($con,$var1);
						$result3=mysqli_query($con,$var3);
						$result4=mysqli_query($con,$var4);
						$result5=mysqli_query($con,$var5);
						$result6=mysqli_query($con,$var6);
						if(mysqli_num_rows($result)!=1)
						{
							if(mysqli_num_rows($result3)!=1)
							{
								if(mysqli_num_rows($result5)!=1)
								{
									if($flag==True)
									{
										if($year==1)
										{
											$var2="select block,floor,room_id,beds_available,type from $table where 
											(beds='$beds' and type='$room_type' and beds_available<> 0 and status='open' and status<>'closed' and status<>'booking' and floor IN ('1','2'))";
										}
										else if($year==2)
										{
											$var2="select block,floor,room_id,beds_available,type from $table where 
											(beds='$beds' and type='$room_type' and beds_available<> 0 and status='open' and status<>'closed' and status<>'booking' and floor ='3')";
										}
										else if($year==3)
										{
											$var2="select block,floor,room_id,beds_available,type from $table where 
											(beds='$beds' and type='$room_type' and beds_available<> 0 and status='open' and status<>'closed' and status<>'booking' and floor ='4')";
										}

										else if($year==4)
										{
											$var2="select block,floor,room_id,beds_available,type from $table where 
											(beds='$beds' and type='$room_type' and beds_available<> 0 and status='open' and status<>'closed' and status<>'booking' and floor='5')";
										}
										
										$result2=mysqli_query($con,$var2);
										$i=1;
										while($row = mysqli_fetch_assoc($result2))
											{
												echo "<tr><td>".$i."</td><td>".$row["block"]."</td><td>".$row["floor"]."</td><td>".$row["room_id"]."</td><td>".$row["type"]."</td><td>".$row["beds_available"]."</td>";
												echo "</tr>";
												$i=$i+1;
											}
										
									}
								}
								else
								{
									while($row = mysqli_fetch_assoc($result6))
										{
											$room_booked=$row["room_id"];
										}
										$_SESSION['room_booked']=$room_booked;
										$message="You have already booked the room ".$room_booked;
										echo "<script>alert('$message');</script>";
										header("refresh:0; url=choice.php");
								}
							}
							else
							{
								while($row = mysqli_fetch_assoc($result4))
									{
										$room_booked=$row["room_id"];
									}
									$_SESSION['room_booked']=$room_booked;
									$message="You have already booked the room ".$room_booked;
									echo "<script>alert('$message');</script>";
									header("refresh:0; url=choice.php");
							}
						}
						else
						{
							while($row = mysqli_fetch_assoc($result1))
								{
									$room_booked=$row["room_id"];
								}
								$_SESSION['room_booked']=$room_booked;
								$message="You have already booked the room ".$room_booked;
								echo "<script>alert('$message');</script>";
								header("refresh:0; url=choice.php");
						}

						?>
				</table>
			</div>
			<div class="form-container">
				<form action="book.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="room_id">Enter the room id:</label>
						<input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" / type="text" name="room" required>
					</div>
					<input class="btn" type="submit" name="submit" value="submit">
				</form>
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

