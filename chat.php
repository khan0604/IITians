<?php 

require 'db.php';
session_start();

?>
<!DOCTYPE html>

<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WE ARE IITIANS</title>
    <!-- Font Awesome -->
	<link href="index.css" rel="stylesheet">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	
	 <script>
    /* must apply only after HTML has loaded */
    $(document).ready(function () {
        $("#contact_form").on("submit", function(e) {
            var postData = $(this).serializeArray();
            var formURL = $(this).attr("action");
            $.ajax({
                url: formURL,
                type: "POST",
                data: postData,
                success: function() {

                },
				
                error: function(jqXHR, status, error) {
                    console.log(status + ": " + error);
                }
            });
            e.preventDefault();
        });
         
        $("#submitForm").on('click', function() {
            $("#contact_form").submit();
        });
    });
</script>

	<script>
	 function change(){
	setTimeout(function () { // on a click on the button with id 'one'
  $('#ten').trigger('click');// trigger the click on second, and go on 
}, 1e3);
	 }
</script>
	</head>

<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark green">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <strong>IITIANS</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
		
		
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">HOME </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="answer.php">ANSWER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">PROFILE</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="post.php">POST</a>
                </li>
				<li class="nav-item ">
                    <a class="nav-link" href="people.php">PEOPLE <span class="sr-only">(current)</span></a>
                </li>
				
				<li class="nav-item active">
                    <a class="nav-link" href="chat.php">CHAT </a>
                </li>
				
				<li class="nav-item ">
                    <a class="nav-link" href="contact.php">CONTACT </a>
                </li>
                
				<li class="nav-item " >
                    <a  href="logout.php" class="nav-link" style="margin-left:250px;"><button type="button" class="btn btn-success btn-sm" style="margin-left:100px; margin-top:-15px; margin-bottom:-15px; width:50%; " data-toggle="modal" data-target="#mymodal1" >LOGOUT</button></a>
                </li>
				

            </ul>
				
        </div>
    </div>
</nav>


 <form id="contact_form" action="search.php" method="POST">

<div class="md-form input-group" style="width:600px; margin:auto;">
    <input type="search" name="person" class="form-control" placeholder="Search for..." style=" width:500px; display:inline;  border-bottom:1.5px solid green;  ">
    <span class="input-group-btn">
        <button class="btn btn-success btn-lg" id='submitForm'  name='submit'  type="submit">SEARCH</button>
    </span>
</div>
     </form>
	 
	 
	  
	 <div class="box" style="width:60%; margin:auto;">     
     <div class="card">     
   <div class="card-block">
  
<?php

  $db = mysqli_connect("localhost", "root","", "ask");
		 $sql = "SELECT * FROM images ORDER BY images.id DESC";
		 $result =mysqli_query ($db, $sql);
		while( $row = mysqli_fetch_array($result)){
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:800px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style='width:500px; margin-left:-180px;'>
		     
                <img src='images/".$row['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:20px;' >           
		      <p style='display:inline;'><b><a href='users.php?username=".$row["username"]."' style='color:black;'>  &nbsp; ".$row['username']."   </a></b><br></b></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->";
		
		$username = $_SESSION['username'];
			
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:400px; height:10%;  background-color:white; cursor:pointer; display:inline;'  ><font color='black' size='2' ><b><a href='text.php?username=".$row["username"]."' style='color:black;'> message  </a></b></font></button>";

		
        
		

		
  echo   "</div>
    <!--/First row-->

	
</section>";

	   
	   	
	   
echo "<br>";
		

		
		}
?>
</div>
</div>
</div>
	  
       
  <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

	
	</body>
</html>
      