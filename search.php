<?php 

require 'db.php';
session_start();

?>
<?php

$name=$_POST['person'];
$username = $_SESSION['username'];

if($name==$username){
     header("location: profile.php") ;
}

else
{
	
$result = $mysqli->query("SELECT * FROM users WHERE username='$name'") or die($mysqli->error());
   if ( $result->num_rows > 0 ) {
	   
	   header("location: users.php?username=$name") ;

    
    
}
else {

$_SESSION['message'] = 'User with this username does not exists!';
    header("location: people.php");
}
}
?>