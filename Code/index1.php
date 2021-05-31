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
function isEmail() {
                 $email = ($_POST['email']);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{
					return false;
				}
				else{
					return true;
				}
					
                }
$pattern_name="/^[A-Za-z ]+$/";
$pattern_id="/^[1-9]{1}[0-9]{1}[A-Z]{3}[0-9]{4}$/";
$pattern_mobile="/^[1-9]{1}[0-9]{9}$/";

if(isset($_POST['submit']))

{
	if($_POST['email']==$_POST['cemail'])
	{
		 if(isEmail()==true)
		 {
		if($_POST['pass']==$_POST['cpass'])
		{
				
						$id=$_POST['id'];
						$name=$_POST['name'];
						$email=$_POST['email'];
						$pass=$_POST['pass'];
						$prog=$_POST['prog'];
						$year=$_POST['year'];
						$add=$_POST['add'];
						$father=$_POST['father'];
						$blood=$_POST['blood'];
						$state=$_POST['state'];
						$mob=$_POST['mob'];
						$gen=$_POST['gen'];
				      $country=$_POST['country'];
						$dob=$_POST['dob'];
						if(preg_match($pattern_id,$id))
						{
							if(preg_match($pattern_name,$name))
							{
								if(preg_match($pattern_mobile,$mob))
								{
						
						$sql="INSERT INTO student(student_id,name,email,password,programme,address,mobile,gender,country,dob,blood_group
						,father,state,year)VALUES('$id','$name','$email','$pass','$prog','$add','$mob','$gen','$country','$dob','$blood','
						$father','$state','$year')";
						
						if(mysqli_query($con,$sql))
						{
							echo '<script>
									alert("Data Inserted Successfully")
									</script>';
							header("refresh:0; url=form.html");
						}
						else
						{
							echo '<script>
									alert("The Marked (*) fields should be unique")
									</script>';
							header("refresh:0; url=a.html");
						}
								}
								else{
									echo '<script>
									alert("Invalid Mobile Number")
									</script>';
									header("refresh:0; url=a.html");
								}
						}
						else
						{
							echo '<script>
									alert("Invalid Name")
									</script>';
									header("refresh:0; url=a.html");
						}
						}
						else
						{
							echo '<script>
									alert("Invalid Registration Number")
									</script>';
									header("refresh:0; url=a.html");
						}
		}
		else{
			echo '<script>
					alert("Password Not Matched")
					</script>';
			header("refresh:0; url=a.html");
			
		}
		 }
		 else{
			echo '<script>
			alert("Invalid Email")
			</script>';
			header("refresh:0; url=a.html");
		 }
	}
	else{
		echo '<script>
				alert("Email Not Matched")
				</script>';
		header("refresh:0; url=a.html");
	}
	
}
mysqli_close($con);


?>

