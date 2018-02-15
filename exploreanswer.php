<?php 

require 'db.php';
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <link href="index.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
    <title>WE ARE IITIANS</title>
    <!-- Font Awesome -->
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
                success: function(data, textStatus, jqXHR) {
                    $('#contact_dialog .modal-title').html("Result");
                    $('#contact_dialog .modal-body').html(data);
                    $("#submitForm").remove();
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
			<li class="nav-item">
                    <a class="nav-link" href="explorehome.php">HOME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="exploreanswer.php">ANSWER<span class="sr-only">(current)</span></a>
                </li>
                
               <li class="nav-item">
                    <a class="nav-link" href="exploreprofile.php">PROFILE</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link"  href="explorepost.php">POST</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="explorepeople.php">PEOPLE </a>
                </li>
				
				<li class="nav-item">
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

	

<form class="input" action="save.php" method="post">
                <!--Right-->
<div class="md-form " style=" width:1000px;">
                       
	                   <textarea type="text"  placeholder="ASK IITIANS..." name="quote" style=" width:500px; display:inline;  border-bottom:1.5px solid green;  " class="md-textarea"  ></textarea>
                     
                  <!-- Example autosize.js CDN Reference -->
               <script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
             <script>
    // Automatically size all of your <textarea> elements as you type
    autosize(document.querySelectorAll('textarea'));
             </script>			 
	
	<?php
	echo "<input type='hidden'  name='qdate' value='"  . date("Y-m-d") . "' />";
						
						
date_default_timezone_set("Asia/Kolkata");


				echo	   " <input  type='hidden' name='qtime' value='"  . date("h:ia") . "' />";
				?>

  
        <button class="btn btn-success btn-lg" type="button" name="ASK" style=" display:inline; margin-bottom:80px;" data-toggle="modal" data-target="#imodal" >ASK QUESTION</button>
  

  
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


<?php


$sm = "SELECT * FROM questions ORDER BY  questions.id DESC";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {

echo "<div class='box'>";   
 
            
echo "<div class='card'>";

        
  echo  "<div class='card-block'>";
  
  $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$row['qusername']."'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:1000px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style='width:500px; margin-left:-140px;'>
		     
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-20px;' >           
		      <p style='display:inline;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>  &nbsp; ".$rowp['username']."   </a>ASKED</b><br></b></p><p style='margin-top:-20px; margin-left:90px;'> on <time style='display:inline; '> ".$row['qdate']." </time> at <time style='display:inline; '> ".$row['qtime']." </time></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>
<br>";
       
       
	   		 echo "<h4 class='card-title'  style='white-space: pre-line;  margin-left:10px; '><b><a href='questions.php?id=".$row["id"]."' style='color:black;'>Q.   " .$row['quote']."?</a></b></h4>";

	   
	   
        
   echo     "<p class='card-text' style='margin-left:10px;'>Please Answer The Question</p>";
      
	  
	   echo     " 
  
  
  <button type='button' class='btn btn-success btn-lg' data-toggle='modal' data-target='#imodal' ><i class='fa fa-pencil' aria-hidden='true'>   ANSWER</i></button>

  
  <div class='modal fade' id='imodal' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>";
		
	
		
		
         echo "<h4 class='modal-title'><b><a href='questions.php?id=".$row["id"]."' style='color:black;'>Q. ".$row['quote']."?</a></b></h4>";

		 
		  echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>
                    <form id='contact_form' action='http://localhost/MDB%20Free/copy.php' method='POST'>
                        
                        <div class='md-form'>
                            <textarea type='text'  class='enter' name='ans'></textarea>
							 
                  <!-- Example autosize.js CDN Reference -->
               <script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
             <script>
    // Automatically size all of your <textarea> elements as you type
    autosize(document.querySelectorAll('textarea'));
             </script>	
			 
		    <input type='hidden'  name='id' value='".$row['id']."' />
			
					    <input type='hidden'  name='date' value='"  . date("Y-m-d") . "' />";
						
						
date_default_timezone_set("Asia/Kolkata");


				echo	   " <input  type='hidden' name='time' value='"  . date("h:ia") . "' />


                        </div>
						 <div class='button'>
          <button type='submit' class='btn btn-success'   id='submitForm'  name='submit'  >SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>";
   echo "</div>
          </div>
          </div>";
   echo "<br>";
  
}


}
?>


	                        
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

<!-- necessary scripts for the dialog -->

</body>

</html>
