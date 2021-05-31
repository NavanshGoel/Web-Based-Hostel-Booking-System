<?php
   session_start();
   $id=$_SESSION['id'];
   if($id=="ADMIN")
   {
      $target='admin.php';
   }
   else
   {
      $target='choice.php';
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Status</title>
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">
   <style>
      body {
         background: url('background.jpg') no-repeat center center /cover;
      }
      .nav .user p {
         letter-spacing:0.1rem;
      }
      
      .body {
         background:rgba(26, 31, 31, 0.85);
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
              <li><a href="<?php echo $target;?>">Home</a></li>
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
            <h1>Online Room Status</h1>
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
            <li><a href="status_a.php"  class="btn" id="block-a">A - Block</a></li>
            <li><a href="status_b.php"  class="btn" id="block-b">B - Block</a></li>
            <li><a href="status_g.php"  class="btn" id="block-g">G - Block</a></li>
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