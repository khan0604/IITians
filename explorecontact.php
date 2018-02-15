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



</head>



<body>


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
                    <a class="nav-link" href="explorehome.php">HOME <span class="sr-only">(current)</span></a>
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
				<li class="nav-item">
                    <a class="nav-link" href="explorepeople.php">PEOPLE </a>
                </li>
				
				<li class="nav-item">
                    <a class="nav-link" href="explorechat.php">CHAT </a>
                </li>
				
				
				<li class="nav-item active">
                    <a class="nav-link" href="explorecontact.php">CONTACT </a>
                </li>
                <li class="nav-item " >
                    <a class="nav-link" style="margin-left:150px;"><button type="button" class="btn btn-success btn-sm" style="margin-left:100px; margin-top:-15px; margin-bottom:-15px; width:50%; cursor:pointer;" data-toggle="modal" data-target="#mymodal1" >LOGIN</button></a>
                </li>
				  
                  
            <li class="nav-item " >
                    <a class="nav-link"  ><button type="button" class="btn btn-success btn-sm" style=" margin-top:-30px; margin-bottom:-30px; width:90%; cursor:pointer;" data-toggle="modal" data-target="#mymodal2" >SIGNUP</button></a>
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

	



<?php 
			 
			 
			 
		    echo  "<section class='section team-section' style='margin:auto;' >

   
    <!--First row-->
    <div class='row text-center' style='margin:auto;'>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='margin:auto;'>
 
            <div class='avatar' style='margin-left:40px;'>
		
                <img src='images/sohail.jpg' class='rounded-circle' style='height:200px; margin-top:90px; width:200px;' >
            </div>
            
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>";
	   
		 ?>

		 

			

 
	  	
				
<div class="card" style="margin:auto; width:50%; ">

    <!--Card image-->
				<!--Section: Team v.1-->
    <!--Card content-->
    <div class="card-block" >
        <!--Title-->
        <h4 class="card-title" style="margin-left:230px;"><b>SOHAIL KHAN</b></h4>
		<p style='margin-left:200px;'>DEVELOPER OF THIS WEBSITE</p>
		 <p>I Love to dance, listen music and watch superheroes stuff and I believe in the best way to predict the
                future is to create it. </p>

 
		 <a style='margin-left:80px; color:#e60000;' class="icons-sm email-ic" href="mailto:khan.1@iitj.ac.in"><i class="fa fa-envelope-o" style="font-size:48px;"></i> </a>
            <a style='margin-left:100px; ' class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/imkhansohail"><i
                    class="fa fa-facebook" style="font-size:48px;"> </i></a>
            <a style='margin-left:100px; ' class="icons-sm li-ic" target="_blank" href="https://in.linkedin.com/in/sohail-khan-578591142"><i
                    class="fa fa-linkedin" style="font-size:48px;"></i></a>
            <a style='margin-left:100px; color:#ff8080;' class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/soh_khn/"><i
                    class="fa fa-instagram" style="font-size:48px;"> </i></a>

        <!--Text-->
        
    </div>
    <!--/.Card content-->

</div>
<!--/.Card-->
<br>

                     
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
