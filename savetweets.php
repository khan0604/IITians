<?php 

require 'db.php';
session_start();

?>


<?php

$username = $_SESSION['username'];
$date=$_POST['date'];
$time=$_POST['time'];

	     $tweet =$_POST['tweet'];
		$sql = "INSERT INTO tweets (tweet,username,date,time) VALUES ('$tweet','$username','$date','$time') ";
		
		if($mysqli->query($sql))

		header("location: post.php") ;
		?>