 <?php


echo "<table width=1000 border='1'>
 
<tr>
<th>S.no.</th><th>Start-up</th>
<th>organization</th>
<th>representative</th>
<th>members</th>
<th>name</th>
<th>email</th>
<th>contact</th>
<th>alt email</th>
<th>alt contact</th>
<th>category</th>
<th>others desc</th>
</tr>";

	$host="127.0.0.1";
	$username="ca17";
	$password="Nstatehs_1";
	$dbname="ca_es17";
	$tname="expodrive";
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

<td>".$row[0]."</td>
<td>".$row[1]."</td>
<td>".$row[2]."</td>
<td>".$row[3]."</td>
<td>".$row[4]."</td>
<td>".$row[5]."</td>
<td>".$row[6]."</td>
<td>".$row[7]."</td>
<td>".$row[8]."</td>
<td>".$row[9]."</td>
<td>".$row[10]."</td>


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