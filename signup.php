<?php include 'connection.php';

if(isset($_POST['add'])){
	
	$name=$_POST['name']; 
	$Books =$_POST['Books'];
	$cost =$_POST['cost'];

	

 $sql="INSERT INTO authors(firstname,lastname,password)VALUES('$name','$Books','$cost')";
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
      <input type="text" name="name" id="first-field" class="login-form-field" placeholder="First_name">
      <input type="text" name="Books" id="second-field" class="login-form-field" placeholder="Last_name">
      <input type="password" name="cost" id="password-field" class="login-form-field" placeholder="Password">
      <input type="submit" value="Sign_up" name="add" id="login-form-submit">
     
    
    </form>
  
  </main>
</body>

</html>