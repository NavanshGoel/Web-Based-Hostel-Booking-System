<?php
session_start();


/*<html>
<head>
<title>Available rooms</title>
</head>
<body>
<h1 style="text-align:center; color:blue; font-size:50px;">Available rooms</h1>*/


$result2=$_SESSION["result"];
$i=1;
while($row = mysqli_fetch_assoc($result2))
		{
			if($i>9)
			{
				echo"$i.&nbsp".$row["room_id"];
			}
			else
			{
				echo"$i.&nbsp&nbsp&nbsp".$row["room_id"];
			}
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "Number of beds available: ".$row["beds_available"];
			echo "<br>";
			$i=$i+1;
		}			
?>
