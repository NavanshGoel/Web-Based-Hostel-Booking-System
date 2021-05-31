<?php
   session_start();
   $id=$_SESSION['id'];
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
      .l-heading {
         padding-left:8rem;
      }
      .body {
      background:rgba(26, 31, 31, 0.65);
      }
      .form-container {
			display:flex;
			height:75%;
			justify-content: center;
			align-items: center;
		}
		.form-group {
			display: flex;
			justify-content: space-between;
			margin-bottom: 2rem;
		}
		form {
			display: flex;
			flex-direction: column;
			justify-content: center;
			width:604.5px;
			background: var(--primary-color);
			padding:2rem
		}
		label {
			color: #fff;
			font-size: 1.65rem;
			text-align: center;
		}
      #id {
         width:285px;
         padding:0 1rem;
         font-size:1.4rem;
      }
      .btn {
          letter-spacing:0.1rem;
          width:7rem;
          align-self:center;
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
               <?php echo $id; ?>
            </p>
         </div>
      </div>
      <div class="form-container">
         <form action="student.php" method="POST">
            <div class="form-group">
               <label for="student_id">Enter the Student ID :</label>
               <input oninput="let p = this.selectionStart; this.value = 
               this.value.toUpperCase();this.setSelectionRange(p, p);" / type="text" name="id"required id="id">
            </div>
               <input type="submit" name="submit" value="submit" class="btn"> 
         </form>
      </div>
      <footer class="main-footer">
         <p>
            Copyright &copy; 2020, All Rights Reserved.
         </p>
      </footer>    
   </div>
   </body>
</html>
  