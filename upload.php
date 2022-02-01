<?php session_start();
$user = $_SESSION['user'];
include 'connection.php';
$statusMsg = '';
if(isset($_POST["submit"])){

    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]); 
    $file = basename($_FILES["file"]["name"]); 
    $name=$_POST['name']; 
	$Description =$_POST['Description'];
    $targetFilePath = $targetDir . $fileName;
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    
    $db = "Library";
    
    $folder="uploads/";
    
    
    move_uploaded_file($file_loc,$folder.$file);
    
    $sql = "INSERT into books (book_Name,book_cover,File,username) VALUES (' $name','$fileName','$file', '$user')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


//  && !empty($_FILES["file"]["name"])){
//     // Allow certain file formats
//     $allowTypes = array('jpg','png','jpeg','gif','pdf');
   
//     if(in_array($fileType, $allowTypes)){
//         // Upload file to server
//         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

//             // Insert image file name into database
//             $insert = $db->query("");
        
//             if($insert){
//                 $statusMsg = 'The file (".$fileName. ") has been uploaded successfully';
//             }else{
//                 $statusMsg = 'File upload failed, please try again.';
//             } 
//         }else{
//             $statusMsg = 'Sorry, there was an error uploading your file.';
//         }
//     }else{
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//     }
// }else{
//     $statusMsg = 'Please select a file to upload.';
// }
    
// print_r($_FILES);
// // Display status message
//echo $statusMsg;
?>