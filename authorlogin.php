<?php  session_start();
include 'connection.php';


if(isset($_POST['btn'])){

		
  $username= mysqli_real_escape_string($conn, $_POST['Username']);
    
  $password =mysqli_real_escape_string($conn,$_POST['password']);

  $query=mysqli_query($conn,"select * from `authors` where username='$username' &&  password='$password'");

  if (mysqli_num_rows($query) == 0){
    
    echo "<script>alert('account not exist')</script>";
    
  }
  else{
 
$_SESSION['user'] =  $username;   
echo "<script>alert('login success'); window.location='addBook.php'</script>";

  }
}
  ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login-page.css">
  
</head>

<body>
  <main id="main-holder">
    <h1 id="login-header">Login</h1>
    
    <form id="login-form" method="post">
      <input type="text" name="Username" id="username-field" class="login-form-field" placeholder="Username">
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
      <input type="submit" value="Login" name="btn" id="login-form-submit">
      <input type="submit" value="OR Sign_up" id="login-form-submit1">
      
    </form>
  
  </main>
</body>

</html>