<?php
$name=$_REQUEST['name'];
	mysql_connect("localhost","root","ram") or die("Ashok check ur connection");
	mysql_select_db("ramu") or die("check connection");
$q="delete from data where name='$name'";
mysql_query($q) or die ("error in database");
			header("location:greetings.html");
?>