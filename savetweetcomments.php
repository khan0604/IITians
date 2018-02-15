<?php 

require 'db.php';
session_start();

?>

<?php 

$postid=$_POST['id'];
$comment=$_POST['comment'];
$commentuser = $_SESSION['username'];
$type="tweets";


  

    $sql = "INSERT INTO comments (postid,comment,commentuser,type) " 
            . "VALUES ('$postid','$comment','$commentuser','$type')";
			
   if($mysqli->query($sql)){
 
    header("location: post.php") ;

   }
  
  			   





?>