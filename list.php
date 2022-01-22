<?php

//make connection
mysql_connect('localhost','root','ram');

//select db
mysql_select_db('ramu');
$sql="SELECT * FROM data";
$records=mysql_query($sql);

?>
<html>
		<head>
			    <title>user</title>
		</head>
			<body bgcolor="gold">
			<h2 align="center" bgcolor="skyblue">
			<a href="home.html" title="Go to Home page">Home</a>
			<a href="delete.html" title="Go to Delete Record">Delete Records</a>
			</h2>
			
				<table width="600" border="1" cellpadding="1" cellspacing="1" align="center" style="color:blue">
							<tr>
							<th>username</th>
							<th>bloodgroup</th>
							<th>mobile</th>
							<th>email</th>
							

							<?php 
							  while($user=mysql_fetch_assoc($records))
							  {
								echo "<tr>";
								echo "<td>" .$user['name']. "</td>";
								echo "<td>" .$user['bloodgroup']. "</td>";
								echo "<td>" .$user['mobile']. "</td>";
								echo "<td>" .$user['email']. "</td>";
								
								echo "</tr>";
								}//end while
								
							?>
							</tr>
				</table>
			</body>
</html>
	