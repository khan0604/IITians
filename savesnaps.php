<?php 

require 'db.php';
session_start();

?>


<?php

$username = $_SESSION['username'];
$date=$_POST['date'];
$time=$_POST['time'];


	$msg = "";

		$target = "snaps/".basename($_FILES['snap']['name']);
		$db = mysqli_connect("localhost", "root","", "ask");
		$snap = $_FILES['snap']['name'];
	     $descreption =$_POST['descreption'];
		$sql = "INSERT INTO snaps (snap,descreption,username,date,time) VALUES ('$snap','$descreption','$username','$date','$time') ";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['snap']['tmp_name'], $target)) {
			$msg = "Image Uploaded Successfully";
		} else {
			$msg = "There Was A problem uploading image";
		}
		
				header("location: post.php") ;

		?>