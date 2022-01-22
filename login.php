<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","ram","ramu");
if(isset($_POST['login_btn']))
{
    $username=mysql_real_escape_string($_POST['username']);
    $password=mysql_real_escape_string($_POST['password']);
    $password=($password); //Remember we hashed password before storing last time
    $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['message']="You are now Loggged In";
        $_SESSION['username']=$username;
        header("location:login1.html");
    }
   else
   {
                $_SESSION['message']="Username and Password combiation incorrect";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="style.css" rel="stylesheet">
</head>
<body background="bg2.jpg">
<h2 align="left" color="green">
<a href="home.html">Home</a>&nbsp</h2>
<div class="header"></br></br></br></br></br></br>
    <h1 style="color:red" align="center">&nbsp;Login</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>

<form method="post" action="login.php" style="color:red" border="1">
  <table  align="center" color="orange">
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="login_btn" class="Log In"></td>
     </tr>
  
</table>
</form>
</body>
</html>
 