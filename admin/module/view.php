
<header>
<link rel="stylesheet" href="../css/bootstrap.css"/>
</header>

<?php	


require_once("../conn/conn.php");
$query = "SELECT * FROM agent"; 
$result = mysql_query($query);

echo "<table class='table table-bordered'>"; // start a table tag in the HTML


echo"<tr>

<td>AGENT_ID</td>
<td>FIRSTNAME</td>
<td>LASTNAME</td>
<td>LOCATION</td>
<td>PHONE NUMBER</td>
<td>EMAIL</td>
<td>EDIT</td>
<td>DELETE</td>
</tr>";

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results


echo "<tr><td>" . $row['agentID'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['location'] . "</td><td>" . $row['phonenumber'] . "<td>" . $row['email'] . "</td><td><a href='edit.php'>Edit</a></td><td><a href='delete.php'><img src='../image/index.jpeg'  height='20' width='20'/></a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

 //Make sure to close out the database connection
	
	
		
		
mysql_close();
?>