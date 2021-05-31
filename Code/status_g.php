<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Online status</title>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="status.css">
</head>
<body>
  <div class="menu-wrap">
    <input type="checkbox" class="toggler">
      <div class="hamburger"><div></div></div>
        <div class="menu">
          <div>
            <div>
              <ul>
              <li><a href="get_block_id.php">Home</a></li>
              <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
    <div class="nav">
      <div class="l-heading">
        <h1>Online Room Status</h1>
      </div>
      <div class="user">
        <i class="fas fa-user-circle fa-2x"></i>
        <p>19BCE1092</p>
      </div>
    </div>
  
    
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
        $table='block_g';
        $table_data='room_g';
      $query="select * from $table";
      $result=mysqli_query($con,$query);
      if(mysqli_num_rows($result)!=0)
        {
         echo '<div class="container">';
        while(($row=mysqli_fetch_assoc($result)))
        {
           $room_id=$row['room_id'];
           $status=$row['status'];
          
                  echo '<div class="box '.$status.'" id="'.$room_id.'">';
                     echo "<h1>".$room_id."</h1>";
                     echo "<p>".$row['beds']." bed-".$row['type']."</p>";
                     echo "<p>Status: ".$row['status']."</p>";
                     $query1="select * from $table_data where room_id='$room_id'";
                     $result1=mysqli_query($con,$query1);
                     while(($row2=mysqli_fetch_assoc($result1)))
                     {
                        echo "<p>".$row2['student_id']."</p>";
                     }
                  echo '</div>';
               
           
        }
        echo '</div>';
      }
   ?>
</body>
</html>