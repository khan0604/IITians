<?php 

require 'db.php';
session_start();

?>

<?php


$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];


 
// Escape all $_POST variables to protect against SQL injections
$username= $mysqli->escape_string($_POST['username']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
   
$resultu = $mysqli->query("SELECT * FROM users WHERE username='$username'") or die($mysqli->error());
   if ( $resultu->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this username already exists!';
    header("location: error.php");
    
}
else {
   
   
   // Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (username,password,email,hash) " 
            . "VALUES ('$username','$password', '$email','$hash')";
			
	$sqla = "INSERT INTO about (username) " 
            . "VALUES ('$username')";
	
	 $image="dp.svg";
	 
	$sqlp = "INSERT INTO images (username,image) " 
            . "VALUES ('$username','$image')";		
		

    // Add user to the database
    if ( $mysqli->query($sql) && $mysqli->query($sqla) && $mysqli->query($sqlp)){

        

        $_SESSION['logged_in'] = true; 

        header("location: profile.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}
}