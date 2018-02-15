<?php 

require 'db.php';
session_start();

?>

<?php 

$ans=addslashes($_POST['ans']);
$id=$_POST['id'];
$username = $_SESSION['username'];
$date=$_POST['date'];
$time=$_POST['time'];



  


$sql = "INSERT INTO answer (ans,qid,username,date,time) " 
            . "VALUES ('$ans',$id,'$username','$date','$time')";
			
if($mysqli->query($sql))
 
header("location: index.php") ;


            
			
			?>