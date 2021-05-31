<?php
   session_start();
   $id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MyRoom</title>
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="template.css">
   <style>
      body {
         background: url('background3.jpg') no-repeat center center/cover;
      }

		.body {
		background:rgba(26, 31, 31, 0.65);
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
      .btn {
         letter-spacing:0.1rem;
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
            <h1>Room Info</h1>
         </div>
         <div class="user">
            <i class="fas fa-user-circle fa-2x"></i>
            <p>
               <?php echo $id; ?>
            </p>
         </div>
      </div>
      <div class="main-container">
         <div class="table-container">
            <table>
               <?php
                  $con=mysqli_connect("localhost:3306","root","root");
                  $flag=True;
                  if(!$con)
                  {
                     echo "server not connected";
                  }
                  if(!mysqli_select_db($con,'project'))
                  {
                     echo "database not connected";
                  }
                  $query1="select * from room_a where student_id='$id'";
                  $query2="select * from room_b where student_id='$id'";
                  $query3="select * from room_g where student_id='$id'";
                  $result1=mysqli_query($con,$query1);
                  $result2=mysqli_query($con,$query2);
                  $result3=mysqli_query($con,$query3);
                  if(mysqli_num_rows($result1)!=0)
                  {
                     while($row=mysqli_fetch_assoc($result1))
                     {
                        $room_id=$row['room_id'];
                        $mess=$row['mess'];
                        $payment=$row['payment'];
                     }
                     $query_room="select * from block_a where room_id='$room_id'";
                  }
                  
                  else if(mysqli_num_rows($result2)!=0)
                  {
                     while($row=mysqli_fetch_assoc($result2))
                     {
                        $room_id=$row['room_id'];
                        $mess=$row['mess'];
                        $payment=$row['payment'];
                     }
                     $query_room="select * from block_b where room_id='$room_id'";
                  }
                  
                  else if(mysqli_num_rows($result3)!=0)
                  {
                     while($row=mysqli_fetch_assoc($result3))
                     {
                        $room_id=$row["room_id"];
                        $mess=$row["mess"];
                        $payment=$row["payment"];
                     }
                     $query_room="select * from block_g where room_id='$room_id'";
                  }
                  else
                  {
                     $flag=False;
                     echo '<script>alert("You have not booked a room.")</script>';
                     header("refresh:0; url=choice.php");
                  }
                  if($flag)
                  {
                     $result_room=mysqli_query($con,$query_room);
                     while($row=mysqli_fetch_assoc($result_room))
                     {
                        echo "<tr>";
                        echo "<th>Block :</th>";
                        echo "<td>".$row["block"]."</td>";
                        echo "</tr>";
                        
                        echo "<tr>";
                        echo "<th>Room Id :</th>";
                        echo "<td>".$row["room_id"]."</td>";
                        echo "</tr>";
                        
                        echo "<tr>";
                        echo "<th>Beds :</th>";
                        echo "<td>".$row["beds"]."</td>";
                        echo "</tr>";
                        
                        echo "<tr>";
                        echo "<th>Type :</th>";
                        echo "<td>".$row["type"]."</td>";
                        echo "</tr>";
                        
                        echo "<tr>";
                        echo "<th>Floor :</th>";
                        echo "<td>".$row["floor"]."</td>";
                        echo "</tr>";
                        
                        echo "<tr>";
                        echo "<th>Mess :</th>";
                        echo "<td>".$mess."</td>";
                        echo "</tr>";
                        
                        echo "<tr>";
                        echo "<th>Payment :</th>";
                        echo "<td>".$payment."</td>";
                        echo "</tr>";
                     }
                  }
                  else{
                     header("refrsh:0; url=choice.php");
                  }
                  ?>
            </table>
         </div>
         <a href="choice.php" class="btn">Back</a>
      </div>
      <footer class="main-footer">
         <p>
            Copyright &copy; 2020, All Rights Reserved.
         </p>
      </footer>    
   </div>
   
</body>
</html>