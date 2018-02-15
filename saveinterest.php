<?php 

require 'db.php';
session_start();

?>

<?php 

$intr=$_POST['intr'];
$username = $_SESSION['username'];



  


$sql = "INSERT INTO interest (intr,username) " 
            . "VALUES ('$intr','$username')";
			
if($mysqli->query($sql))
 
header("location: profile.php") ;