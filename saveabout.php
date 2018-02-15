<?php 

require 'db.php';
session_start();

?>

<?php 

$birthday=$_POST['birthday'];
$hometown=$_POST['hometown'];
$currentcity=$_POST['currentcity'];
$school=$_POST['school'];
$branch=$_POST['branch'];
$college=$_POST['college'];
$year=$_POST['year'];
$username = $_SESSION['username'];

  

$sql = "UPDATE about SET birthday='$birthday' , hometown='$hometown' ,currentcity='$currentcity' , school='$school' , branch='$branch', college='$college' , year='$year' WHERE username='$username'";
			
if($mysqli->query($sql))
 
header("location: profile.php") ;