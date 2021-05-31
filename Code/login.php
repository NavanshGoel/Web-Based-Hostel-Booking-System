<?php
session_start();
$id=$_POST["id"];
$pass=$_POST["pass"];
$_SESSION["id"]=$id;
$con =mysqli_connect("localhost:3306","root","root");
mysqli_select_db($con,"project");
$var="select * from student where student_id='$id' and password='$pass'";
if ($id=='ADMIN' and $pass=='admin@123')
{
	header("refresh:0; url=admin.php");
}
else
{
if(mysqli_num_rows(mysqli_query($con,$var))==1)
{
	$var1="select name,gender,year from student where student_id='$id'";
	$result=mysqli_query($con,$var1);
	while($row= mysqli_fetch_assoc($result))
	{
		$_SESSION["name"]=$row["name"];
		$_SESSION["gender"]=$row["gender"];
		$_SESSION["year"]=$row["year"];
	}
	header("location:choice.php");
}
else{
	echo '<script>
			alert("Invalid Credentials")
			</script>';
			header("refresh:0; url=form.html");
	}
}
?>
