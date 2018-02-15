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
                success: function(){

                },
				
				
				error: function(jqXHR, status, error) {
                    console.log(status + ": " + error);
                }
            });
			
            e.preventDefault();
			doSomething();
			    

        });
		
		$("#submitForm").on('click', function() {
            $("#contact_form").submit();
			  
						    return false;


        });
         

           
    });
	
	
</script>

<script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
	
         function play() { 
		
			 var url = 'people.php';  
	        $('#div9-wrapper').load(url + ' #div9');
	         
	     }
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
				<li class="nav-item active">
                    <a class="nav-link" href="people.php">PEOPLE <span class="sr-only">(current)</span></a>
                </li>
				
				<li class="nav-item">
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
	 
	 
	 
 <div id="div9-wrapper">
 <div id="div9"> 
	 <div class="box">     
     <div class="card">     
   <div class="card-block">
  
<?php

  $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images ORDER BY images.id DESC";
		 $resultp =mysqli_query ($dbp, $sqlp);
		while( $rowp = mysqli_fetch_array($resultp)){
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:1000px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style='width:500px; margin-left:-140px;'>
		     
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-20px;' >           
		      <p style='display:inline;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>  &nbsp; ".$rowp['username']."   </a></b><br></b></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->";
		
		$username = $_SESSION['username'];

	     echo "<iframe name='votar' style='display:none;'></iframe>";

  
     echo   "<form id='contact_form' action='savefollowers.php' method='POST' target='votar' >";
	 
	 	echo "		    <input type='hidden'  name='following' value='".$rowp["username"]."' />";
		
		

        
$smf = "SELECT * FROM follow WHERE followers='$username' AND following='".$rowp["username"]."' ORDER BY  follow.id DESC ";




$resultf = $mysqli->query($smf);


if ($resultf->num_rows > 0) {
    
while($rowf = $resultf->fetch_assoc()) {
   
     	   echo "<button type='submit'   class='btn btn-success btn-sm' id='submitForm'  onclick='change();' name='submit' data-send='false' style=' opacity:1; cursor:pointer;  margin-left:320px;   ' ><font color='white' size='2' ><b>FOLLOWING </b></font></button>";

	}
}

else
{
	     	   echo "<button type='submit'  class='btn btn-success btn-sm' id='submitForm'  onclick='change();' name='submit' data-send='false' style='background-color:white; opacity:1; cursor:pointer;  margin-left:330px;  ' ><font color='black' size='2' ><b>FOLLOW </b></font></button>";

}


	 echo "<button type='button'  id='ten'  onclick='play();' style='width:100px; display:none; ' >";
	 


	 		echo	"</form>";

		

		
  echo   "</div>
    <!--/First row-->

	
</section>";

	   
	   	
	   
echo "<br>";
		
		}
?>
</div>
</div>
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
      
	 