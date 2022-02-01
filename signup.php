<?php include 'connection.php';

if(isset($_POST['add'])){
	
	$username =$_POST['user'];
  $pass=$_POST['pass'];

	

 $sql="INSERT INTO authors(username,password)VALUES('	$username','$pass')";
        if (mysqli_query($conn, $sql)) {
      $insert_id = $conn->insert_id;
        $_SESSION['insert_id']=$insert_id;
		
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }	
 
	 }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign_up</title>
  <link rel="stylesheet" href="login-page.css">
  
</head>

<body>
  <main id="main-holder">
    <h1 id="login-header">Sign_up</h1>
    
    <form id="login-form" method="post">
      <input type="text" name="user" id="second-field" class="login-form-field" placeholder="Usename">
      <input type="password" name="pass" id="password-field" class="login-form-field" placeholder="Password">
      <input type="submit" value="Sign_up" name="add" id="login-form-submit">
     
    
    </form>
  
  </main>
</body>

</html>