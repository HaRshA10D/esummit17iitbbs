 <?php


echo "<table width=1200 border='1'>
 
<tr>
<th>S.no.</th><th>First Name</th>
<th>Last name</th>
<th>College</th>
<th>Email</th>
<th>gender</th>
<th>event</th>

<th>phone</th>
</tr>";

	$host="127.0.0.1";
	$username="ca17";
	$password="Nstatehs_1";
	$dbname="ca_es17";
	$tname="workandcomp";
	$con= mysqli_connect("$host","$username","$password","$dbname");
	if($con->connect_errno)
	{
		echo 'connection failed '.$con->connect_error ;
	}
	
	$row="";
	
	$x=0;
	
	$query = "SELECT * FROM $tname";
	// $result = $con->query($query);
	if ($result = $con->query($query)) {
    
		if($result->num_rows > 0)
		{
			while( $row = $result->fetch_array(MYSQLI_NUM) )
			{
			$x++;
			
echo "<tr><td>".$x."</td>
<td>".$row[1]."</td>
<td>".$row[2]."</td>
<td>".$row[3]."</td>
<td>".$row[4]."</td>
<td>".$row[5]."</td>
<td>".$row[6]."</td>
<td>".$row[7]."</td>


</tr>";
			}
		}
		else
		{	echo "<br>Error";
			exit;
		}
			
	}
	
	else
		{	echo "Error";
			exit;
		}
		
echo "</table>";

?>