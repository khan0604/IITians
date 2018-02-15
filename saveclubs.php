<?php 

require 'db.php';
session_start();

?>

<?php 

$club=$_POST['club'];
$username = $_SESSION['username'];



  


$sql = "INSERT INTO clubs (club,username) " 
            . "VALUES ('$club','$username')";
			
if($mysqli->query($sql))
 
header("location: profile.php") ;