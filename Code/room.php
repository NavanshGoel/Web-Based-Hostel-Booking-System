<?php
  session_start();
  $ida=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Info</title>
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
        height:auto;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        text-align:center;
        color:#fff;
      }
      .h2 {
        padding-top:1rem;
        max-width:200px;
        margin: 0 auto;
        font-size:1.5rem;
        padding-right:1rem;
        text-align:center;
        color:#fff;
      }
      .table-container {
        background: var(--primary-color);
        padding:1rem;
        padding-top:1.5rem;
        padding-bottom:1rem;
        width:500px;
        display:flex;
        flex-direction: column;
        justify-content:center;
      }
      .table-container table {
        width:auto;
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
          margin-bottom:0rem;
        }
        .l-heading {
          padding-left:8rem;
        }

        .grid-container {
          height:200px;
          display:flex;
          /* grid-template-columns:repeat(4,1fr); */
          text-align:center;
          /* grid-gap:3rem; */
          justify-content:space-around;
          align-items:center;
          color:#fff;
          font-size:1.4rem;
          padding:0 3rem;
        }
        .box {
          background: var(--primary-color);
          padding:1.5rem;
        }

        /* .first{
          grid-column-start:2;
          grid-column-end:3;

        }
        .second{
          grid-column-start:3;
          grid-column-end:4;

        }
        .third{
          grid-column-start:1;
          grid-column-end:2;

        }
        .fourth{
          grid-column-start:4;
          grid-column-end:5;

        } */
        
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
            <h1>Room Info</h1>
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

              if(!$con)
              {
                echo "server not connected";
              }
              if(!mysqli_select_db($con,'project'))
              {
                echo "database not connected";
              }
              $room_id=$_POST['id'];
              $a1="select * from block_a where room_id='$room_id'";
              $b1="select * from block_b where room_id='$room_id'";
              $g1="select * from block_g where room_id='$room_id'";
              $a2="select * from room_a where room_id='$room_id'";
              $b2="select * from room_b where room_id='$room_id'";
              $g2="select * from room_g where room_id='$room_id'";
              $flag=True;
              $ra1=mysqli_query($con,$a1);
              $ra2=mysqli_query($con,$a2);
              $rb1=mysqli_query($con,$b1);
              $rb2=mysqli_query($con,$b2);
              $rg1=mysqli_query($con,$g1);
              $rg2=mysqli_query($con,$g2);
              
              if(mysqli_num_rows($ra1)!=0)
              {
                  while(($row=mysqli_fetch_assoc($ra1)))
                  {

                        echo "<tr>";
                        echo "<th>Block:</th>";
                        echo "<td>".$row["block"]."</td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<th>Room ID:</th>";
                        echo "<td>".$row["room_id"]."</td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<th>floor:</th>";
                        echo "<td>".$row["floor"]."</td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<th>Number of beds:</th>";
                        echo "<td>".$row["beds"]."</td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<th>Type:</th>";
                        echo "<td>".$row["type"]."</td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<th>Beds Available:</th>";
                        echo "<td>".$row["beds_available"]."</td>";
                        echo "</tr>";
                    }
                  }
                  else if(mysqli_num_rows($rb1)!=0)
                  {
                    while(($row=mysqli_fetch_assoc($rb1)))
                    {
        
                          echo "<tr>";
                          echo "<th>Block:</th>";
                          echo "<td>".$row["block"]."</td>";
                          echo "</tr>";
        
                          echo "<tr>";
                          echo "<th>Room ID:</th>";
                          echo "<td>".$row["room_id"]."</td>";
                          echo "</tr>";
        
                          echo "<tr>";
                          echo "<th>floor:</th>";
                          echo "<td>".$row["floor"]."</td>";
                          echo "</tr>";
        
                          echo "<tr>";
                          echo "<th>Number of beds:</th>";
                          echo "<td>".$row["beds"]."</td>";
                          echo "</tr>";
        
                          echo "<tr>";
                          echo "<th>Type:</th>";
                          echo "<td>".$row["type"]."</td>";
                          echo "</tr>";
        
                          echo "<tr>";
                          echo "<th>Beds Available:</th>";
                          echo "<td>".$row["beds_available"]."</td>";
                          echo "</tr>";
                        }
                    }

                    else if(mysqli_num_rows($rg1)!=0)
                    {
                        while(($row=mysqli_fetch_assoc($rg1)))
                        {
            
                              echo "<tr>";
                              echo "<th>Block:</th>";
                              echo "<td>".$row["block"]."</td>";
                              echo "</tr>";
            
                              echo "<tr>";
                              echo "<th>Room ID:</th>";
                              echo "<td>".$row["room_id"]."</td>";
                              echo "</tr>";
            
                              echo "<tr>";
                              echo "<th>floor:</th>";
                              echo "<td>".$row["floor"]."</td>";
                              echo "</tr>";
            
                              echo "<tr>";
                              echo "<th>Number of beds:</th>";
                              echo "<td>".$row["beds"]."</td>";
                              echo "</tr>";
            
                              echo "<tr>";
                              echo "<th>Type:</th>";
                              echo "<td>".$row["type"]."</td>";
                              echo "</tr>";
            
                              echo "<tr>";
                              echo "<th>Beds Available:</th>";
                              echo "<td>".$row["beds_available"]."</td>";
                              echo "</tr>";
                          }
                        }
                        else{
                          echo '<script>alert("Invalid Room Id")</script>';
                          header("refresh:0; url=room_admin.php");
                        }
                        echo "</table>";
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="h2">';
                        echo '<h2>Occupants</h2>';
                        echo '</div>';
                        echo '</h2>';
                        echo '<div class="grid-container">';
                        if(mysqli_num_rows($ra2)!=0)
                        {
                          // $i=1;
                          while(($row=mysqli_fetch_assoc($ra2)))
                          {
                                // if($i==1)
                                //   $s="first";
                                // else if($i==2)
                                //   $s="second";
                                // else if($i==3)
                                //   $s="third";
                                // else
                                //   $s="fourth"; 
                                  echo '<div class="box">';
                                echo "<p>".$row["student_id"]."<p>";
                                echo "<p>".$row["name"]."<p>";
                                echo '</div>';
                                // $i=$i+1;
                          }
                        }
                            else  if(mysqli_num_rows($rb2)!=0)
                              {
                                // $i=1;
                                while(($row=mysqli_fetch_assoc($rb2)))
                                {
                    
                                  // if($i==1)
                                  //   $s="first";
                                  // else if($i==2)
                                  //   $s="second";
                                  // else if($i==3)
                                  //   $s="third";
                                  // else
                                  //   $s="fourth"; 
                                    echo '<div class="box">';
                                  echo "<p>".$row["student_id"]."<p>";
                                  echo "<p>".$row["name"]."<p>";
                                  echo '</div>';
                    
                                  // $i=$i+1;
                                      }
                                    }
              else if(mysqli_num_rows($rg2)!=0)
              {
                $i=1;
                  while(($row=mysqli_fetch_assoc($rg2)))
                  {
                    // if($i==1)
                    //   $s="first";
                    // else if($i==2)
                    //   $s="second";
                    // else if($i==3)
                    //   $s="third";
                    // else
                    //   $s="fourth";      
                    echo '<div class="box">';
                    echo "<p>".$row["student_id"]."<p>";
                    echo "<p>".$row["name"]."<p>";
                    echo '</div>';
                
                    
                    // $i=$i+1;

                        
                    }
                  }
                  else{
                    $flag=False;
                  }
                  
            ?>
    <?php
      if($flag==False)
      {
        
        echo '<script>alert("No Curent Occupants in this room")</script>';
      }
    ?>
    </div>
         
      <footer class="main-footer">
         <p>
            Copyright &copy; 2020, All Rights Reserved.
         </p>
      </footer>    
   </div>
   
  </body>
</html>