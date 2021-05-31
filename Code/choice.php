<?php
	session_start();
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Choice</title>
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
   <link rel="stylesheet" type="text/css" href="style.css">
   <style>
      

		.body {
		background:rgba(26, 31, 31, 0.85);
		}
      .btn {
         width:293.375px;
         text-align:center;
         
      }
      .btn:hover {
         width:310px;
         height:5rem;
      }
      .button-container ul li a {
         padding:0.75rem 0;
      }
      .left {
      transform: translateX(-1100px);
      animation: left 1s forwards ease-out;
      }
      .right {
      transform: translateX(1100px);
      animation: left 1s forwards ease-out;
      }

      /* Animations */
      @keyframes left{
      to{
         transform: translateX(0);
      }
      }
      @keyframes right{
      to{
         transform: translateX(0);
      }
      }
      .user p {
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
              <li><a href="form.html">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>
   </div>
   <div class="body">
      <div class="nav">
         <div class="l-heading">
            <h1>Online Room Booking</h1>
         </div>
         <div class="user">
            <i class="fas fa-user-circle fa-2x"></i>
            <p>
               <?php echo $id;?>
            </p>
         </div>
      </div>
      <div class="button-container">
         <ul>
            <li><a href="student_info.php"  class="btn left">My Profile</a></li>
            <li><a href="student_room_info.php" class="btn right">My Room</a></li>
            <li><a href="booking_html.php" class="btn left">Book a Room</a></li>
            <li><a href="get_block_id.php" class="btn right">Online Status</a></li>
         </ul>
      </div> 
      <footer class="main-footer">
         <p>
            Copyright &copy; 2020, All Rights Reserved.
         </p>
      </footer>    
   </div>
   
</body>
</html>