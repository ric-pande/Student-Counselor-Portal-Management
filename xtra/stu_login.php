<!DOCTYPE HTML>
<html>
<head>
        <title>Login</title>      
</head>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<body bgcolor="#0a7f99">
   
<center>
      <form method="post" action="temp.php" >
					<table>
					<tr><td style="color:white"><B><font size=7.5> Student Login</font></B></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>User Name:</font></td><td><input type="text" name="name" required="requres"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Password:</font></td><td><input type="password" name="pass"/></td></tr>	
							<tr><td><br></td></tr>
							<tr><td><br></td></tr>
					<tr><td>      </td><td><input type="submit" name="submit" value="Sign in"></td></tr>
					
					</table>
					</form>		
					</center> 
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "richa";
$dbname = "counsellor";
$flag=0;
session_start();
$_SESSION["name1"]=$_POST['name'];
//$_SESSION["u_pass"]=$_POST['pass'];

//$name=$_POST['name'];
$pass=$_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*
$sql = "select * from counsellor.student";
$result=$conn->query($sql);

//if($result->num_rows > 0)
//{ echo $row["user_name"];

	while($row=$result->fetch_array(MYSQLI_ASSOC))
	{
		if(strcmp($row["user_name"],$_SESSION["name1"])==0 && strcmp($row["pwd"],$pass)==0)
		{
		
			echo "LOGGED IN!!!";$flag=1;
			header("Location : student_view.php");
			break;
		}

		//echo $row["name"]."<br>";
	}
	if($flag==0)
	echo "WRONG USERNAME AND PASSWORD COMBINATION";
//}
/*
if ($conn->query($sql) == TRUE) {
  //echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}*/
//header("Location : student_view.php");	
//echo $_SESSION["name1"];

mysqli_close($conn);
?>

</body>
</html>
