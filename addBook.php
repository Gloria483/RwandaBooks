<?php session_start();
$user = $_SESSION['user'];?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="add.css">
<body>
<main id="main-holder">


<form id="login-form" action="upload.php" method="post" enctype="multipart/form-data">
<input type="text" name="name" id="username-field" class="login-form-field" placeholder="Name">
<input type="text" name="Description" id="username-field" class="login-form-field" placeholder="Description">
 
  <input type="file" name="file" id="fileToUpload" class="file" >
  <input type="file" name="file" id="fileToUpload">
  <input type="submit" value="Upload file" name="submit">

</form>
</main>

</body>
</html>