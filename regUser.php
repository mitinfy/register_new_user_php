<html>
 <body style='background:gray;'>  
<center>
           <h1 style='background:orange; color:whitesmoke; '> Register here </h1>
<hr>
            <form action="" method="POST">
<table border=5 cellpadding=5 cellspacing=5 style="border-radius:10px 10px 10px 10px; background:khaki; color:blue; border-color:green;">
<tr>
<td>User Name: </td>
<td> <input type="text" id="username" name="username" placeholder="Username" required/> </td> </tr>

<tr><td>Password:</td>
<td><input id="password" name="password" type="password" required/> </td> </tr>

<tr><td>Confirm Password:</td>
<td><input id="confirmpassword" name="confirmpassword" type="password" required/></td> </tr>

<tr><td colspan=2> <input type="submit" name="submit" value="register" style="border-radius:10px 10px 10px 10px; background:khaki; color:blue; border-color:green;"> Already have an user account? <a href="http://localhost/demo/login2.php">Click here</a> </td> </tr>
</table>
            </form>
    </body>
</html>

<?php
require('config.php');

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

 $slquery = "SELECT 1 FROM users WHERE user= '$username'";
    $selectresult = mysql_query($slquery);

    if(mysql_num_rows($selectresult)>0)
    {
         $msg = 'user already exists';
echo "<h1 style='background:red; color:white'>",$msg, "</h1>";
    }
    else if($password != $cpassword){
         $msg = "passwords doesn't match";
echo "<h1 style='background:orange; color:teal'>",$msg, "</h1>";
    }
    else{
          $query = "INSERT INTO users (user, passw) VALUES ('$username','$password')";
          $result = mysql_query($query);
          if($result){
             $msg = "User Created Successfully.";
echo "<h1 style='background:green; color:white'>",$msg, "</h1>";
          }
    }
   }
?>
<h1 style='background:greenyellow; color:skyblue;'> by MIT India </h1>