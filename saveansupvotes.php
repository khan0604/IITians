
 <?php 

require 'db.php';
session_start();

?>

<?php 

$answerid=$_POST['id'];
$upvoteuser = $_SESSION['username'];


  $result = $mysqli->query("SELECT * FROM upvotes WHERE  upvoteuser ='$upvoteuser' AND  answerid='$answerid' ") or die($mysqli->error());

  if ( $result->num_rows > 0 ) {
	  
	  $sqlp="DELETE FROM upvotes WHERE upvoteuser ='$upvoteuser' AND  answerid='$answerid' " ;
	  
   if($mysqli->query($sqlp)) {
  }
  
  }
  
  else{

    $sql = "INSERT INTO upvotes (answerid,upvoteuser) " 
            . "VALUES ('$answerid','$upvoteuser')";
			
   if($mysqli->query($sql)){
 

   }
  }
  
 ?>
 