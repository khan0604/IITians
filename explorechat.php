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
                    <a class="nav-link" href="explorehome.php">HOME </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exploreanswer.php">ANSWER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exploreprofile.php">PROFILE</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="explorepost.php">POST</a>
                </li>
				<li class="nav-item ">
                    <a class="nav-link" href="explorepeople.php">PEOPLE <span class="sr-only">(current)</span></a>
                </li>
				
				<li class="nav-item active">
                    <a class="nav-link" href="explorechat.php">CHAT </a>
                </li>
				<li class="nav-item ">
                    <a class="nav-link" href="explorecontact.php">CONTACT </a>
                </li>
                
				<li class="nav-item " >
                    <a class="nav-link" style="margin-left:150px;"><button type="button" class="btn btn-success btn-sm" style="margin-left:100px; margin-top:-15px; margin-bottom:-15px; width:50%; " data-toggle="modal" data-target="#mymodal1" >LOGIN</button></a>
                </li>
				  
                  
            <li class="nav-item " >
                    <a class="nav-link"  ><button type="button" class="btn btn-success btn-sm" style=" margin-top:-30px; margin-bottom:-30px; width:90%; " data-toggle="modal" data-target="#mymodal2" >SIGNUP</button></a>
                </li>
  

            </ul>
				
        </div>
    </div>
</nav>

<div class="modal fade" id="mymodal1" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b></b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="checkusers.php" method="POST" >
                        
                        <div class="md-form">
						
						<!--Form with header-->
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="form-header  green">
            <h3><i class="fa fa-lock"></i> Login:</h3>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" name="email" class="form-control" autocomplete="off">
            <label for="form2">Your email</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" name="password"  class="form-control">
            <label for="form4">Your password</label>
        </div>

        <div class="text-center">
            <button class="btn btn-success" id="submitForm" name="submit">Login</button>
        </div>

    </div>

    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            
            <p>Forgot <a href="#" >Password?</a></p>
        </div>
    </div>

</div>
<!--/Form with header-->
								 
							 
		    
			

                        </div>
						 
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
	
	
	<div class="modal fade" id="mymodal2" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b></b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">

                        
                       
						
						<!--Form with header-->
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="form-header green">
            <h3><i class="fa fa-user"></i> Register:</h3>
        </div>

        <!--Body-->
		<form id="contact_form" action="saveusers.php" method="POST" >

        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text"  name="username" class="form-control">
            <label for="form3">Your name</label>
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text"  name="email" class="form-control">
            <label for="form2">Your email</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password"  name="password" class="form-control">
            <label for="form4">Your password</label>
        </div>

        <div class="text-center">
            <button class="btn btn-success" id="submitForm" name="submit" >Sign up</button>
            <hr>
                    </div>
					
                    </form>

    </div>
</div>
<!--/Form with header-->

								 
							 
		    
			

                        
						 
                    
                </div>

    
      </div>
      
   
  
  </div>
</div>



 <form id="contact_form" action="http://localhost/MDB%20Free/search.php" method="POST">

<div class="md-form input-group" style="width:600px; margin:auto;">
    <input type="search" name="person" class="form-control" placeholder="Search for..." style=" width:500px; display:inline;  border-bottom:1.5px solid green;  ">
    <span class="input-group-btn">
        <button class="btn btn-success btn-lg"   type="button" data-toggle="modal" data-target="#imodal">SEARCH</button>
    </span>
<div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b></b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
						<p style='margin-left:200px; color:black;'><b> PLEASE SIGNUP OR LOGIN </b></p>
     </div>
	   </div>
	   </div>
	   </div>
  	
	
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
		
			
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:400px; height:10%;  background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#imodal' ><font color='black' size='2' ><b> message  </b></font></button>";

		echo "
          <div class='modal fade' id='imodal' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b></b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>
						<p style='margin-left:200px;'><b> PLEASE SIGNUP OR LOGIN </b></p>
     </div>
	   </div>
	   </div>
	   </div>";





	 

        
		

		
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
      