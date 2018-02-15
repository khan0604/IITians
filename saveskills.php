<?php 

require 'db.php';
session_start();

?>

<?php 

$skill=$_POST['skill'];
$username = $_SESSION['username'];



  


$sql = "INSERT INTO skills (skill,username) " 
            . "VALUES ('$skill','$username')";
			
if($mysqli->query($sql))
 
header("location: profile.php") ;