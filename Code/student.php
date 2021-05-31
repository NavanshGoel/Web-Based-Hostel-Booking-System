<?php
  session_start();
  $ida=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
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
        .nav {
          margin-bottom:1rem;
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
              <li><a href="admin.php">Home</a></li>
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
            <h1>Student Info</h1>
         </div>
         <div class="user">
            <i class="fas fa-user-circle fa-2x"></i>
            <p>
               <?php echo $ida; ?>
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
                  $id=$_POST['id'];
                  $query="select * from student where student_id='$id'";
                  $query1="select * from room_a where student_id='$id'";
                  $query2="select * from room_b where student_id='$id'";
                  $query3="select * from room_g where student_id='$id'";
                  $result=mysqli_query($con,$query);
                  $result1=mysqli_query($con,$query1);
                  $result2=mysqli_query($con,$query2);
                  $result3=mysqli_query($con,$query3);
                  if(mysqli_num_rows($result)!=0)
                  {
                    while(($row=mysqli_fetch_assoc($result)))
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
                      echo "<th>Gender :</th>";
                      echo "<td>".$row["gender"]."</td>";
                      echo "</tr>";

                      // echo "<tr>";
                      // echo "<th>Programme :</th>";
                      // echo "<td>".$row["programme"]."</td>";
                      // echo "</tr>";

                      echo "<tr>";
                      echo "<th>Mobile No :</th>";
                      echo "<td>".$row["mobile"]."</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<th>Country :</th>";
                      echo "<td>".$row["country"]."</td>";
                      echo "</tr>";

                      // echo "<tr>";
                      // echo "<th>Date Of birth :</th>";
                      // echo "<td>".$row["dob"]."</td>";
                      // echo "</tr>";

                      echo "<tr>";
                      echo "<th>Blood Group :</th>";
                      echo "<td>".$row["blood_group"]."</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<th>Father's Name :</th>";
                      echo "<td>".$row["father"]."</td>";
                      echo "</tr>";

                      // echo "<tr>";
                      // echo "<th>State :</th>";
                      // echo "<td>".$row["state"]."</td>";
                      // echo "</tr>";

                    
                    }
                  }
                  else
                  {
                    echo '<script>alert("Invalid ID")</script>';
                    header("refresh:0; url=student_admin.php");
                  }
                  if(mysqli_num_rows($result1)!=0)
                  {
                    while(($row=mysqli_fetch_assoc($result1)))
                    {
                      echo "<tr>";
                      echo "<th>Room Number :</th>";
                      echo "<td>".$row["room_id"]."</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<th>Mess :</th>";
                      echo "<td>".$row["mess"]."</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<th>Amount Paid :</th>";
                      echo "<td>".$row["payment"]."</td>";
                      echo "</tr>";
                    }
                  }
                  else if(mysqli_num_rows($result2)!=0)
                  {
                    while(($row=mysqli_fetch_assoc($result2)))
                    {
                      echo "<tr>";
                      echo "<th>Room Number :</th>";
                      echo "<td>".$row["room_id"]."</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<th>Mess :</th>";
                      echo "<td>".$row["mess"]."</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<th>Amount Paid :</th>";
                      echo "<td>".$row["payment"]."</td>";
                      echo "</tr>";
                    }
                  }
                  else if(mysqli_num_rows($result3)!=0)
                  {
                    while(($row=mysqli_fetch_assoc($result3)))
                    {
                      echo "<tr>";
                      echo "<th>Room Number :</th>";
                      echo "<td>".$row["room_id"]."</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<th>Mess :</th>";
                      echo "<td>".$row["mess"]."</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<th>Amount Paid :</th>";
                      echo "<td>".$row["payment"]."</td>";
                      echo "</tr>";
                    }
                  }
                  else
                  {
                    $flag=False;
                    $message="No Room Alloted";
                  }
                ?>
              </table>
              <?php
              if($flag==False)
              {
                echo '<br>';
                echo '<h2>'.$message.'</h2>';
              }
              ?>
            </div>
         <a href="admin.php" class="btn">Back</a>
      </div>
      <footer class="main-footer">
         <p>
            Copyright &copy; 2020, All Rights Reserved.
         </p>
      </footer>    
   </div>
   
  </body>
</html>