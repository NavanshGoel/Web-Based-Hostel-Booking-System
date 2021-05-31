<?php
   session_start();
   $id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Profile</title>
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="template.css">
   <style>
      body {
         background: url('background4.jpg') no-repeat center center/cover;
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
			width:auto;
			
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
              <li><a href="form.html">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>
   </div>
   <div class="body">
      <div class="nav">
         <div class="l-heading">
            <h1>My Profile</h1>
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

               if(!$con)
               {
                  echo "server not connected";
               }
               if(!mysqli_select_db($con,'project'))
               {
                  echo "database not connected";
               }
               $query="select * from student where student_id='$id'";
               $result=mysqli_query($con,$query);
               while($row=mysqli_fetch_assoc($result))
               {
                  echo "<tr>";
                  echo "<th>Registration :</th>";
                  echo "<td>".$row["student_id"]."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<th>Name :</th>";
                  echo "<td>".$row["name"]."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<th>Email :</th>";
                  echo "<td>".$row["email"]."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<th>Programme :</th>";
                  echo "<td>".$row["programme"]."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<th>Mobile No :</th>";
                  echo "<td>".$row["mobile"]."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<th>Country :</th>";
                  echo "<td>".$row["country"]."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<th>Date Of birth :</th>";
                  echo "<td>".$row["dob"]."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<th>Blood Group :</th>";
                  echo "<td>".$row["blood_group"]."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<th>Father's Name :</th>";
                  echo "<td>".$row["father"]."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<th>State :</th>";
                  echo "<td>".$row["state"]."</td>";
                  echo "</tr>";
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