<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","ram","ramu");
if(isset($_POST['register_btn']))
{
    $name=mysql_real_escape_string($_POST['name']);
    $age=mysql_real_escape_string($_POST['age']);
    $mobile=mysql_real_escape_string($_POST['mobile']);
	$gender=mysql_real_escape_string($_POST['gender']);
	$hno=mysql_real_escape_string($_POST['hno']);
	$street=mysql_real_escape_string($_POST['street']);
	$city=mysql_real_escape_string($_POST['city']);
	$state=mysql_real_escape_string($_POST['state']);
	$country=mysql_real_escape_string($_POST['country']);
	$pincode=mysql_real_escape_string($_POST['pincode']);
	$bloodgroup=mysql_real_escape_string($_POST['bloodgroup']);
    $email=mysql_real_escape_string($_POST['email']);

            $sql="INSERT INTO data(name,age,mobile,gender,hno,street,city,state,country,pincode,bloodgroup,email) VALUES('$name','$age','$mobile','$gender','$hno','$street','$city','$state','$country','$pincode','$bloodgroup','$email')";
            mysqli_query($db,$sql);  
            $_SESSION['message']="You are now logged in"; 
            $_SESSION['username']=$username;
            header("location:greetings1.html");  //redirect home page
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register and login
<link rel="stylesheet" type="text/css" href="style.css"/>  </title>
</head>
<body background="bg3.jpeg">
<h2 align="left" color="green">
<a href="home.html">Home</a>&nbsp</h2>
<div class="header"></br></br></br></br>
    <h1 align="center" style="color:red">Blood Donating </h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<h3>
<center>
<form method="post" action="data1.php" style="color:red">
  <table>
	 <tr>
           <td>name : </td>
           <td><input type="text" name="name" class="textInput" required></td>
     </tr>
	 <tr>
           <td>age : </td>
           <td><input type="text" name="age" class="textInput" required></td>
     </tr>
     <tr>
           <td>mobile : </td>
           <td><input type="text" name="mobile" class="textInput"  maxlength="10" required></td>
     </tr>
      <tr>
              <td> Gender:
					<input type="radio" name="gender"
						<?php if (isset($gender) && $gender=="female") echo "checked";?>
						value="female">Female
					<input type="radio" name="gender"
						<?php if (isset($gender) && $gender=="male") echo "checked";?>
						value="male">Male
					</td>	
     </tr>
      <tr>
           <td>hno: </td>
           <td><input type="text" name="hno" class="textInput"></td>
     </tr>
     <tr>
           <td>street : </td>
           <td><input type="text" name="street" class="textInput"></td>
     </tr>
	 <tr>
           <td>city : </td>
           <td><input type="text" name="city" class="textInput" required></td>
     </tr>
	 <tr>
           <td>state : </td>
           <td><input type="text" name="state" class="textInput"></td>
     </tr>
	 <tr>
           <td>country : </td>
           <td><input type="text" name="country" class="textInput"></td>
     </tr>
	 <tr>
           <td>pincode : </td>
           <td><input type="text" name="pincode" class="textInput"></td>
     </tr>
	 <tr>
           <td>bloodgroup : </td>
           <td><input type="text" name="bloodgroup" class="textInput" required></td>
     </tr>
	 
      <tr>
           <td>email : </td>
           <td><input type="email" name="email" class="textInput" required></td>
     </tr>
	 
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register"></td>
     </tr>
  
</table>
</form>
</center>
</h3>
</body>
</html>