<?php 

require 'db.php';
session_start();

?>

<?php 

$por=$_POST['por'];
$username = $_SESSION['username'];



  


$sql = "INSERT INTO position (por,username) " 
            . "VALUES ('$por','$username')";
			
if($mysqli->query($sql))
 
header("location: profile.php") ;