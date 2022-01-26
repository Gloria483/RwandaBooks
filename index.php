<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="library";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_errno())
{
    echo"failed to connect!";
    exit();

}
echo"connection success!";
?> 