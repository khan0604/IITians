<?php 

require 'db.php';
session_start();

?>

<?php 

$receiver=$_POST['receiver'];
$message=$_POST['message'];
$username = $_SESSION['username'];
$date=$_POST['cdate'];
$time=$_POST['ctime'];

			

    $sql = "INSERT INTO chat (sender,message,receiver,date,time) " 
            . "VALUES ('$username','$message','$receiver','$date','$time')";
			
 $mysqli->query($sql);
 

   
  
  			   
?>


