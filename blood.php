<?php

$host="localhost";
$username="root";
$password="ram";
$db_name="ramu"; // create your own db
$tbl_name="data";


mysql_connect("$host","$username","$password")or die("failed to connect to         db");
mysql_select_db("$db_name")or die("failed to select database");

if(isset($_POST['submit']))
{

$x=$_POST['bloodgroup'];

 $sql = "select * from $tbl_name where bloodgroup='$x'";
 //$where=" order by name";
 $result = mysql_query($sql);
 
 echo"<table border='1' bgcolor='skyblue'>";
while($rows=mysql_fetch_array($result))
{
 echo"<tr>";
 echo "<td width='20%' align='center' >".$rows['bloodgroup']."</td>";
echo "<td width='20%' align='center' >".$rows['name']."</td>";
echo "<td width='20%' align='center' >".$rows['mobile']."</td>";
  echo"</tr>";
  echo"<tr>";
 

}
 



mysql_close();

}
else{
?>        
<html>
<head>
<script language="javascript">
var adv='';
  for(k=0;k<document.form1.bloodgroup.options.length;k++)
  {
    if(document.form1.bloodgroup.options[k].value==adv)
		
    {
        document.form1.bloodgroup.options[k].selected=true;
	
    }
  }
  </script></head>
<body background="bg3.jpeg">
<h2 align="right" color="green">
<form id="form1" name="form1" method="POST" action="blood.php">
  <table width="800" border="1" cellspacing="0" cellpadding="3" style="color:skyblue">
<tr>
  <td colspan="2">Blood Group :

    <select  name='bloodgroup' id='bloodgroup'">
        <option value="" selected="selected" >Select</option>
        <OPTION VALUE="A+">A +ve </OPTION>
        <OPTION VALUE="A-">A -ve </OPTION>
        <OPTION VALUE="B+">B +ve </OPTION>
        <OPTION VALUE="B-">B -ve </OPTION>
        <OPTION VALUE="O+">O +ve </OPTION>
        <OPTION VALUE="O-">O -ve </OPTION>
        <OPTION VALUE="AB+">AB +ve </OPTION>
        <OPTION VALUE="AB-">AB -ve </OPTION>
      </select>
	 <input type="submit" name="submit" value="Submit" />  
</td>
</tr>
<tr>
	<?php $sql1 = "select * from $tbl_name";
 //$where=" order by name";
 $result = mysql_query($sql1);
 echo"<table border='1'>"; 
while($rows1=mysql_fetch_array($result))
{

 echo"<tr>";
  echo "<td width='20%' align='center' >".$rows1['bloodgroup']."</td>";
   echo "<td width='20%' align='center' >".$rows1['name']."</td>";
  echo "<td width='20%' align='center' >".$rows1['mobile']."</td>";
  echo"</tr>";
  
  
  
}

echo"</table>";
mysql_close();

}

?>
</tr>
</table>
</form>
</body>

</html>
<?php  ?>