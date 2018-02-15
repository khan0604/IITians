<?php 

require 'db.php';
session_start();

?>

<?php 

$ask=$_POST['quote'];
$username = $_SESSION['username'];
$qdate=$_POST['qdate'];
$qtime=$_POST['qtime'];

            
$sql = "INSERT INTO questions (quote,qusername,qdate,qtime) " 
            . "VALUES ('$ask','$username','$qdate','$qtime')";
			
if($mysqli->query($sql))
 
header("location: answer.php") ;
			
			?>