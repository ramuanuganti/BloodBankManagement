<?php

$host="localhost";
$username="root";
$password="ram";
$db_name="ramu"; // create your own db
$tbl_name="data";


mysql_connect("$host","$username","$password")or die("failed to connect to         db");
mysql_select_db("$db_name")or die("failed to select database");
if(isset($_POST('submit'))
$bloodgroup ="select bloodgroup from $tbl_name   ";

$where='bloodgroup='."'".$_POST['bloodgroup']."'";

 $sql = "select name, mobile, bloodgroup, city from $tbl_name    ".
 $where=" order by name";
 $result = mysql_query($sql);

?>
<form id="form1" name="form1" method="post" action="soul.php" >
  <table  color="Spring green" width="800" border="1" cellspacing="0" cellpadding="3">
<tr>
  <td colspan="2">Blood Group :

    <select  name='bloodgroup' id='bloodgroup' onchange="form1.submit();">
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

      <script language="JavaScript" type="text/javascript">
  var adv='<? echo $_POST['bloodgroup'] ?>';
  for(k=0;k<document.form1.bloodgroup.options.length;k++)
  {
    if(document.form1.bloodgroup.options[k].value==adv)
		
    {
        document.form1.bloodgroup.options[k].selected=true;
	
    }
  }
 </script>
 <tr>
  <td align="center"><strong>Name</strong></td>
  <td align="center"><strong>Mobile</strong></td>
  <td align="center"><strong>Blood Group</strong></td>
  <td align="center"><strong>City</strong></td>
</tr>
<?php
 while($rows=mysql_fetch_array($result))
{

?>
<tr>
  <td width="20%"align="center" ><?php echo $rows['name']; ?></td>
  <td width="20%" align="center"><?php echo $rows['mobile']; ?></td>
  <td width="20%" align="center"><?php echo $rows['bloodgroup']; ?></td>
  <td width="20%" align="center"><?php echo $rows['city']; ?></td>
</tr>
<?php
}
?>
</table>
</form>
<?php
mysql_close();
?>        