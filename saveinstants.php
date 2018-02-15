<?php 

require 'db.php';
session_start();

?>


<?php

$username = $_SESSION['username'];
$date=$_POST['date'];
$time=$_POST['time'];

	$msg = "";

		$target = "instants/".basename($_FILES['instant']['name']);
		$db = mysqli_connect("localhost", "root","", "ask");
		$instant = $_FILES['instant']['name'];
	     $caption =addslashes($_POST['caption']);
		$sql = "INSERT INTO instants (instant,caption,username,date,time) VALUES ('$instant','$caption','$username','$date','$time') ";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['instant']['tmp_name'], $target)) {
			$msg = "Image Uploaded Successfully";
		} else {
			$msg = "There Was A problem uploading image";
		}
		
		
		header("location: post.php") ;
		?>