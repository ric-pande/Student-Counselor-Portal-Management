<html>
    <head>
		<title>hss Details</title>
    </head>
        <br>
		<br>
		<br>
<body>

<center>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<table>
					<tr><td><br></td></tr>
					<tr><td><font size=5.8 color="white">Enter USN:</font></td><td><select id="text" name="usn"/>
					
					<option value='-1'>Select</option> 
					
					<?php
					
					session_start();
					//$u_name=$_SESSION["name1"];
					//echo $u_name;
					
					$servername = "localhost";
					$username = "root";
					$password = "richa";
					$dbname = "counsellor";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
					}
					
					$result4=$conn->query("select * from counsellor.student1");
					
				while($row4=$result4->fetch_array(MYSQLI_ASSOC))
						{	
							
					?>
						<option value="<?php echo $row4['usn'];?>"><?php echo $row4['usn'];?></option>
					
					
					<?php
					
				}
						?>
					</select>
					</td></tr>
								
							<tr><td><br></td></tr>
							
					<tr><td>      </td><td><input type="submit" name="submit" value="enter"></td></tr>
	
	
	<center><table>
	<br>
	<br>
	<br>
	<br>
	<tr><td><b><font size=6 color=white>General details  </font></b></td>
	<?php
	 if(isset($_POST['submit'])) 
  	{
		$usn=$_POST["usn"];
		$result4=$conn->query("select * from counsellor.student1");
		while($row4=$result4->fetch_array(MYSQLI_ASSOC))
		{	
			if(strcmp($row4["usn"],$usn)==0)
							{
		?>
		
		<td><b><font size=6 color=white> of :  </font></b></td>
		<td><b><font size=6 color=black><?php echo $row4["name"];?></font></b></td></tr>
	<?php
	}}}
	?>
	
	<tr><td><br></td></tr>
	</table></center>     

            
<?php

  if(isset($_POST['submit'])) 
  {
	$usn=$_POST["usn"];
$result1=$conn->query("select * from counsellor.current_sem");
$result2=$conn->query("select * from counsellor.student1");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["usn"],$usn)))
	{
		while($row2=$result2->fetch_array(MYSQLI_ASSOC))
		{
					if( strcmp($row2["usn"],$row1["usn"])==0 )
					{
					
					?>
		</table></center>
		
		
            <center>
            <table width="1000px" height="50px" bgcolor="" border="1">
            
            
            <tr><font size=5  color=white><?php echo "USN : ".$row1["usn"]; ?></font></tr>
            
            <tr><td> <center>   <?php echo "NAME : ".$row2["name"]; ?></center></td>
                <td><center><?php echo "SEMESTER : ".$row1["sem"]; ?></center></td>
                <td><center><?php echo "BATCH NUMBER : ".$row2["batch"]; ?></center></td>
                <td>  <center> <?php echo "DOB : ".$row2["dob"]; ?></center></td></tr></table>
                <br>
               <br>
              
              <table width="1000px" height="50px" bgcolor="" border="1">
             <tr>
             <td width="40%">  <center><?php echo "SEX : ".$row2["sex"]; ?><br><br></center></td>
             <td>  <center> <?php echo "E-MAIL ID : ".$row2["e_id"]; ?><br><br><center></td></tr>
              <tr> <td width="40%"><center> <?php echo "CONTACT NUMBER : ".$row2["phone"]; ?><br><br>
              <center></td>
               
             <td>  <center> <?php echo "ADDRESS : ".$row2["address"]; ?><br><br><center></td> </tr> 
          </table>
              
              <br><br>
              <font color=white>Admission details</font>
              <br>
              <table width="1000px" height="50px" bgcolor="" border="1">
               
               <tr>  <td> <center> <?php echo "YEAR OF ADMISSION";  ?><br><br></td>
              <td><center>  <?php echo " ADMISSION THROUGH" ?><br><br></td>
              <td> <center> <?php echo " RANK "; ?><br><br></td></tr>
               <br>
               
               <br>
               <tr>
               <td><center>  <?php echo $row2["yoa"]; ?><br><br></center></td>
               <td> <center><?php echo $row2["adm_type"]; ?><br><br></center></td>
              <td> <center> <?php echo $row2["rank"]; ?><br><br></center></td></tr>
              </table>
              <br>
              <br>
              
               <br>
               <font color=white>Parents details</font>
               <br><br>
               <table width="1000px" height="50px" bgcolor="" border="1">
               
               <tr>  <td> <center> <?php echo "NAME";  ?><br><br></td>
              <td><center>  <?php echo " E-MAIL ID "; ?><br><br></td>
              <td> <center> <?php echo " CONTACT NUMBER "; ?><br><br></td></tr>
               <br>
               <br>
            <tr> <td width="35%">  <?php echo "FATHER :  "; ?><center><?php echo $row2["f_name"]; ?><br><br></center></td>
              <td width="35%"><center>  <?php echo $row2["f_id"]; ?><br><br></center></td>
              <td> <center> <?php echo $row2["f_no"]; ?><br><br></center></td></tr>
              
       		<tr><td width="35%"><?php echo "MOTHER :  "; ?><center><?php echo $row2["m_name"]; ?><br><br></center></td>
              <td width="35%"> <center> <?php echo $row2["m_id"]; ?><br><br></center></td>
              <td> <center> <?php echo $row2["m_no"]; ?><br><br></center></td></tr>
              </table>
              
             </center>
    
    
    
		<?php
								
				}
				
			}
		
	}

}
//mysqli_close($conn);
}
?>

    </body>
</html>
