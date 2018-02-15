<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<?php
      $_SESSION['message'] = "You have been logout!";

        header("location: explorehome.php");
?>		
