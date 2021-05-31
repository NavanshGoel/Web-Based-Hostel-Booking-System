<?php
session_start();
?>
<html>
<head>
<title>Error</title>
</head>
<body>
<?php
$flag=True;
$gender=$_SESSION["gender"];
if(isset($_POST['block']))
{
	$block=$_POST['block'];
	echo "<br>";
}
else
{
	echo '<script>
			alert("Block Error")
			</script>';
	header("refresh:0; url:booking_html.php");
	echo "<br>";
	$flag=False;
}
if(isset($_POST['beds']))
{
	echo "<br>";
	$beds=$_POST['beds'];
}
else
{
	echo '<script>
			alert("Bed Error")
			</script>';
	header("refresh:0; url=booking_html.php");
	echo "<br>";
	$flag=False;
}
if(isset($_POST['room_type']))
{
	echo "<br>";
	$room_type=$_POST['room_type'];
}
else
{
	echo '<script>
			alert("Bed Type")
			</script>';
	header("refresh:0; url=booking_html.php");
	echo "<br>";
	$flag=False;
}
if(isset($_POST['mess']))
{
	echo "<br>";
	$mess=$_POST['mess'];
}
else
{
	echo '<script>
			alert("Mess Error")
			</script>';
	header("refresh:0; url=booking_html.php");
	echo "<br>";
	$flag=False;
}
if($flag==True)
{
	
	
	$table="";
	$room_info="";
	if($gender=="male")
	{
		if($block=="A")
		{
			$table="block_a";
			$room_info="room_a";
		}
		else if($block=="B")
		{	
			$table="block_b";
			$room_info="room_b";
		}
		else if($block=="G")
		{
			$flag=False;
			echo '<script>
					alert("You can only choose A or B block")
					</script>';
			header("refresh:0; url=booking_html.php");
		}
		else
		{
			$flag=False;
			echo '<script>
			alert("Invalid Block Choosen")
			</script>';
	header("refresh:0; url=booking_html.php");
			
		}
	}
	else
	{
		if($block=="G")
		{	
			$table="block_g";
			$room_info="room_g";
		}
		else if($block=="A" or $block=="B")
		{
			$flag=False;
			echo '<script>
			alert("You can only choose G block")
			</script>';
			header("refresh:0; url=booking_html.php");
			
		}
		else
		{
			$flag=False;
			echo '<script>
			alert("Invalid Block Choosen")
			</script>';
	header("refresh:0; url=booking_html.php");
		
		}
	}	
$_SESSION["table"]=$table;
$_SESSION["block"]=$block;
$_SESSION["room_info"]=$room_info;
$_SESSION["mess"]=$mess;
$_SESSION["room_type"]=$room_type;
$_SESSION["beds"]=$beds;
if($flag==True)
{
header("location:booking.php");
}
}	

?>
</body>
</html>