<?php
	session_start();
	$id=$_SESSION['id'];
?>
<!DOCTYPE HTML>
<html lang="en"></html>
<head>
	<title>Room Booking</title>
	<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="template.css">
	<style>
		body {
			background: url('background6.jpg') no-repeat center center/cover;
			
		}
		.body {
			height:100vh;
			position:relative;
			background: rgba(26, 31, 31, 0.85);
		}
		.l-heading {
			padding-left: 12rem ;
		}
		.form-container {
			display:flex;
			height:65%;
			justify-content: center;
			align-items: center;
			margin-top:3rem;
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
			padding:2rem 2rem 2rem 2rem;
			
		}
		label {
			color: #fff;
			font-size: 1.65rem;
			text-align: center;
		}
		.imp::after {
			content:'*';
			color:#c72727;
		}
		#pass {
			width:272.284px;
			font-size: 1.4rem;
			padding: 0 1rem;
		}
		#btn {
			width:8rem;
			text-align: center;
			margin: auto;
			
		}
		#id {
			width:272.284px;
			font-size: 1.4rem;
			padding: 0 1rem;
		}
		.select {
			width:272px;
			display:flex;
			justify-content: center;
			align-items: center;
			
		}
		select {
			width:80px;
			height: 30px;
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
					<h1>Room Booking</h1>
				</div>
				<div class="user">
					<i class="fas fa-user-circle fa-2x"></i>
					<p>
						<?php echo $id;?>
					</p>
				 </div>
			</div>
			<div class="form-container">
				<form action="submit.php" method="post" enctype="multipart/form-data" >

					<div class="form-group">
						<label for="Block" class="imp left">Block:</label>	
						<input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" / type="text" name="block"required id="id" class="right">
					</div>

					<div class="form-group">
						<label for="beds" class="left">Number Of Beds:</label>	
						<div class="select">
							<select name="beds" class="right">
								<option value=4>4</option>
								<option value=3>3</option>
								<option value=2>2</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="room" class="left">Type of Room:</label>	
						<div class="select">
							<select name="room_type" class="right">
								<option value="AC">AC</option>
								<option value="NON AC">NON AC</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="mess" class="left">Mess Type:</label>	
						<div class="select">
							<select name="mess" class="right">
								<option value="VEG">VEG</option>
								<option value="NON VEG">NON VEG</option>
								<option value="SPECIAL">SPECIAL</option>
							</select>
						</div>
					</div>
					<input type="submit" name="submit" value="submit" class="btn" id="btn">
				</form>>
			</div>
			<footer class="main-footer">
				<p>
					Copyright &copy; 2020, All Rights Reserved.
				</p>
			</footer>    
		</div>
	</body>
</html>





					