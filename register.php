<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","ram","ramu");
if(isset($_POST['register_btn']))
{
    $username=mysql_real_escape_string($_POST['username']);
    $password=mysql_real_escape_string($_POST['password']);
    $password2=mysql_real_escape_string($_POST['password2']);
	$email=mysql_real_escape_string($_POST['email']);
	$gender=mysql_real_escape_string($_POST['gender']);
     if($password==$password2)
     {           //Create User
            $password=($password); //hash password before storing for security purposes
            $sql="INSERT INTO user(username,password,email,gender) VALUES('$username','$password','$email','$gender')";
            mysqli_query($db,$sql);  
            $_SESSION['message']="You are now logged in"; 
            $_SESSION['username']=$username;
            header("location:data1.php");  //redirect home page
    }
    else
    {
      $_SESSION['message']="The two password do not match";   
     }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register and login
<link rel="stylesheet" type="text/css" href="style.css"/>  </title>
</head>
<body background="bg1.jpg">
<h2 align="left" color="green">
<a href="home.html">Home</a>&nbsp</h2>
<div class="header"></br></br></br></br>
    <h1 align="center" style="color:green">Register</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<center>
<form method="post" action="register.php" style="color:blue" width="500" height="500">
  <table bgcolor="orange">
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput" required></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput" required></td>
     </tr>
      <tr>
           <td>Password again: </td>
           <td><input type="password" name="password2" class="textInput" required></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput" required></td>
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
           <td></td>
           <td><input type="submit" name="register_btn" class="Register"></td>
     </tr>  
</table>
</form>
Login to<a href="login.php"style="color:white" title="Go to login">   Click here</a>
</center>
</body>
</html>