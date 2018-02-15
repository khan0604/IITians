

<?php 

require 'db.php';
session_start();

?>

<?php 

$postid=$_POST['id'];
$likeusername = $_SESSION['username'];
$type="snaps";


  $result = $mysqli->query("SELECT * FROM likes WHERE  likeusername ='$likeusername' AND  postid='$postid' AND type='snaps'") or die($mysqli->error());

  if ( $result->num_rows > 0 ) {
	  
	  $sqlp="DELETE FROM likes WHERE likeusername ='$likeusername' AND  postid='$postid' AND type='snaps'" ;
	  
   if($mysqli->query($sqlp)) {
	   
 header("location: post.php") ;
  }
  
  }
  
  else{

    $sql = "INSERT INTO likes (postid,likeusername,type) " 
            . "VALUES ('$postid','$likeusername','$type')";
			
   if($mysqli->query($sql)){
 
    header("location: post.php") ;

    
   }
  }
  
  			   





?>