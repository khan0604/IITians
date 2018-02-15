<?php 

require 'db.php';
session_start();

?>

<?php 

$following=$_POST['following'];
$followers = $_SESSION['username'];

            
	  $result = $mysqli->query("SELECT * FROM follow WHERE following='$following' AND followers='$followers' ") or die($mysqli->error());

  if ( $result->num_rows > 0 ) {
	  
	  $sqlp="DELETE FROM follow WHERE following='$following' AND followers='$followers' " ;
	  
   if($mysqli->query($sqlp)) {
	   header("location: users.php?username='$following'") ;

  }
  
  }
  
  else{
		
$sql = "INSERT INTO follow (followers,following) " 
            . "VALUES ('$followers','$following')";
			
if($mysqli->query($sql))
 
header("location: users.php?username='$following'") ;
  }
			?>