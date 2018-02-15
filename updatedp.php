<?php 

require 'db.php';
session_start();

?>
<?php

$username = $_SESSION['username'];
$date=$_POST['date'];
$time=$_POST['time'];
	$msg = "";
	 
		$target = "images/".basename($_FILES['instant']['name']);
		$db = mysqli_connect("localhost", "root","", "ask");
		$image = $_FILES['instant']['name'];
	
		$sql = "UPDATE images SET image='$image' WHERE username='$username'";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['instant']['tmp_name'], $target)) {
			$msg = "Image Uploaded Successfully";
		} else {
			$msg = "There Was A problem uploading image";
		}
	?>
	
	<?php
	$msgp = "";

		$targetp = "instants/".basename($_FILES['instant']['name']);
		$dbp = mysqli_connect("localhost", "root","", "ask");
		$instant = $_FILES['instant']['name'];
	     $caption =$_POST['caption'];
		$sqlp = "INSERT INTO instants (instant,caption,username,date,time) VALUES ('$instant','$caption','$username','$date','$time') ";
		mysqli_query($dbp, $sqlp);

		if (move_uploaded_file($_FILES['instant']['tmp_name'], $targetp)) {
			$msgp = "Image Uploaded Successfully";
		} else {
			$msgp = "There Was A problem uploading image";
		}
		
				header("location: profile.php") ;

	
?>