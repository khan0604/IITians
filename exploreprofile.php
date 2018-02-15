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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $("#pc").slideUp();
		
    $("#btn").click(function(){
        $("#pc").slideDown();

    });
	
});
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $("#pc2").slideUp();

    $("#btn2").click(function(){
        $("#pc2").slideDown();

    });
	
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $("#pc3").slideUp();

    $("#btn3").click(function(){
        $("#pc3").slideDown();

    });
	
});
</script>


<script>
$(function(){ /* to make sure the script runs after page load */

	$('.card-text').each(function(event){ /* select all divs with the item class */
	
		var max_length = 250; /* set the max content length before a read more link will be added */
		
		if($(this).html().length > max_length){ /* check for content length */
			
			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
			var long_content	= $(this).html().substr(max_length);
			
			$(this).html(short_content+'<a href="#" link="green" class="read_more" style="color: green; display:inline;">.....READ MORE</a>'+'<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
						 
			$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
				event.preventDefault(); /* prevent the a from changing the url */
				$(this).hide(); /* hide the read more button */
				$(this).parents('.card-text').find('.more_text').show(); /* show the .more_text span */
		 
			});
			
		}
		
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
                <li class="nav-item">
                    <a class="nav-link" href="exploreanswer.php">ANSWER</a>
                </li>
              
				<li class="nav-item active">
                    <a class="nav-link" href="exploreprofile.php">PROFILE<span class="sr-only">(current)</span></a>
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



<?php




$k=0;
		
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='   background-color:white; display:inline;  cursor:pointer; margin-bottom:-420px; margin-left:385px;' data-toggle='modal' data-target='#imodal' ><font color='black' size='2' ><b> followers $k  </b></font></button>

  
  <div class='modal fade' id='imodal' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b></b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>
     						<p style='margin-left:200px; color:black;'><b> PLEASE SIGNUP OR LOGIN </b></p>";
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";

	   ?>
	   

	   <?php




$k=0;	
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; display:inline; cursor:pointer; margin-bottom:-420px; margin-left:250px;' data-toggle='modal' data-target='#imodal' ><font color='black' size='2' ><b> following $k  </b></font></button>

  
  <div class='modal fade' id='imodal' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>FOLLOWING </b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($k>0){	 
	   
$sml = "SELECT * FROM follow WHERE followers='$username' ";



$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
  
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$rowl['following']."'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:800px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' >
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-20px;' >           
		      <p style='display:inline;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>  &nbsp; ".$rowp['username']." </a></b></p>
				</div>
           
        </div>
		<br>
        <!--/Second column-->

        <!--/Fourth column-->

    </div>
    <!--/First row-->

	
</section>";
	   

	}
}
}

if($k ==0)
{
	
echo "Not following Yet";
}
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";

	   ?>
	   
	   

	   


<?php 
			 
			 
			 
			 
		    echo  "<section class='section team-section' style='margin:auto;' >

   
    <!--First row-->
    <div class='row text-center' style='margin:auto;'>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='margin:auto;'>
 
            <div class='avatar' style='margin-left:40px;'>
		
                <img src='images/dp.svg' class='rounded-circle' style='height:200px; margin-top:90px; width:200px;' >
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
        <h4 class="card-title" style="margin-left:250px;"><b>username</b></h4>
		
		 <button type="button" class="btn btn-success btn-sm" style="margin-left:210px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">        UPDATE DP</i></button>

  
  <div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b>UPDATE DP</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="updatedp.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="md-form">
						
							<input type="hidden" name="size" value="1000000" />
			

		 <label class="btn btn-success btn-sm" style="	margin-left:180px; cursor:pointer;">
		 
        <input type="file" name="instant" onchange="readURL(this);" />
          ADD PHOTO
        </label>
		<br>
		
		</br>
		     <img id="blah" src="#"  style="margin-top:20px;	margin-left:180px;"/>
   
						     
                            <b>caption</b><textarea type="text"   name="caption"></textarea>
                            							 
							 
		    
			

                        </div>
						 <div class="button">
          <button type="submit" class="btn btn-success"   id="submitForm"  name="submit"  >SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
<br>

</br>

 
		    		
        <!--Text-->
        
    </div>
    <!--/.Card content-->

</div>
<!--/.Card-->
<br>

</br>

<ul class="nav nav-tabs tabs-3 green" role="tablist" style="margin:auto; width:50%; ">
    <li class="nav-item" style=" width:25%;">
      <a  data-toggle="tab" href="#panel1" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">ABOUT</button></a>
    </li>
    <li class="nav-item" style=" width:25%; ">
      <a  data-toggle="tab" href="#panel2" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">INTEREST</button></a>
    </li>
    <li class="nav-item" style=" width:25%; ">
      <a  data-toggle="tab" href="#panel3" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">WORK</button></a>
    </li>
<li class="nav-item" style=" width:24%; ">
      <a  data-toggle="tab" href="#panel4" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">SKILLS </button></a>
    </li>

	</ul>
<!-- Tab panels -->
<br>


</br>


<div class="tab-content card" style="margin:auto; width:50%; ">


    <!--Panel 1-->
	<div class="tab-pane fade" id="panel1" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD ABOUT</i></button>

  
  <div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b>ADD ABOUT</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="http://localhost/MDB%20Free/saveabout.php" method="POST">
                        
                        <div class="md-form">
                            <b>Birthday</b><textarea type="text"   name="birthday"></textarea>
                            <b>Hometown</b><textarea type="text"   name="hometown"></textarea>							 
                             <b>Currentcity</b><textarea type="text"   name="currentcity"></textarea>
                            
                            <b>School</b><textarea type="text"   name="school"></textarea>
                             <b>College</b><textarea type="text"   name="college"></textarea>
                         <b>Branch</b><textarea type="text"   name="branch"></textarea>							 
				                         <b>Year</b><textarea type="text"   name="year"></textarea>							 
			 
		    

                        </div>
						 <div class="button">
          <button type="submit" class="btn btn-success"   id="submitForm"  name="submit"  >SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
<br>


</br>

<?php

	echo "	 <p class='tag'><b>studying at   </b></p><br>
		 
	     <p class='tag'><b> department  </b></p><br>
		 <p class='tag'><b> went to </b></p><br>
		 
		 <p class='tag'><b>Lives in   </b></p><br>
		 
	     <p class='tag'><b> From   </b></p><br>
		 <p class='tag'><b> Born on </b></p><br>";

?>
</div>
    
    
<div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD INTEREST</i></button>

  
  <div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b>ADD INTEREST</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="http://localhost/MDB%20Free/saveinterest.php" method="POST">
                        
                        <div class="md-form">
                            <textarea type="text"   name="intr"></textarea>
							 
		    

                        </div>
						 <div class="button">
          <button type="submit" class="btn btn-success"   id="submitForm"  name="submit"  >SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
<br>


</br>


  </div>
    
    <!--Panel 3-->
    <div class="tab-pane fade" id="panel3" role="tabpanel">
        <br>
<div class="tab-pane fade in show active" id="panel3" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD CLUBS</i></button>

  
  <div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b>ADD CLUBS</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="http://localhost/MDB%20Free/saveclubs.php" method="POST">
                        
                        <div class="md-form">
                            <textarea type="text"   name="club"></textarea>
							 
		    

                        </div>
						 <div class="button">
          <button type="submit" class="btn btn-success"   id="submitForm"  name="submit"  >SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
<br>


</br>

</div>


<div class="tab-pane fade in show active" id="panel3" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD POR</i></button>

  
  <div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b>ADD POR</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="http://localhost/MDB%20Free/savepor.php" method="POST">
                        
                        <div class="md-form">
                            <textarea type="text"   name="por"></textarea>
							 
		    

                        </div>
						 <div class="button">
          <button type="submit" class="btn btn-success"   id="submitForm"  name="submit"  >SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
<br>


</br>
</div>
 
 </div>
    <!--/.Panel 3-->
	
	<div class="tab-pane fade " id="panel4" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD SKILLS</i></button>

  
  <div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b>ADD SKILLS</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="http://localhost/MDB%20Free/saveskills.php" method="POST">
                        
                        <div class="md-form">
                            <textarea type="text"   name="skill"></textarea>
							 
		    

                        </div>
						 <div class="button">
          <button type="submit" class="btn btn-success"   id="submitForm"  name="submit"  >SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
<br>


</br>
</div>



</div>
<br>

</br>


<ul class="nav nav-tabs tabs-3 green" role="tablist" style="margin:auto; width:50%; ">
    <li class="nav-item" style=" width:33%;">
      <a  data-toggle="tab" href="#panel5" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">QUESTIONS</button></a>
    </li>
    <li class="nav-item" style=" width:33%; ">
      <a  data-toggle="tab" href="#panel6" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">ANSWERS</button></a>
    </li>
    <li class="nav-item" style=" width:33%; ">
      <a  data-toggle="tab" href="#panel7" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">POSTS</button></a>
    </li>

	</ul>
<!-- Tab panels -->
<br>

<div class="tab-content card" style= "margin-left:260px; width:60%; ">

	  <div class="tab-pane fade " id="panel5" role="tabpanel">
<br>     
<?php

echo "<p style='margin-left:350px;'><b>NO QUESTIONS YET</b></p>  ";
?>
<br>
</div>

 <div class="tab-pane fade " id="panel6" role="tabpanel">
     
	
 <div id="div5-wrapper">
 <div id="div5"> 
<?php
echo "<p style='margin-left:350px;'><b>NO ANSWERS YET</b></p>  ";

?>   
</div>
</div>
</div>

	  <div class="tab-pane fade " id="panel7" role="tabpanel">
        

<ul class="nav nav-tabs tabs-3 green" role="tablist" style="margin:auto; margin-top:100px; width:60%; ">
    <li class="nav-item" style=" width:33%;">
      <a  data-toggle="tab" href="#panel99" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">INSTANTS</button></a>
    </li>
    <li class="nav-item" style=" width:33%; ">
      <a  data-toggle="tab" href="#panel88" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">SNAPS</button></a>
    </li>
    <li class="nav-item" style=" width:33%; ">
      <a  data-toggle="tab" href="#panel77" role="tab" style="margin:auto; color:white; width:100%; "><button class="btn btn-success btn"  style=" width:100%;">TWEETS</button></a>
    </li>

	</ul>
<!-- Tab panels -->
<br>

</br>


<div class="tab-content card" style="margin:auto; width:75%; ">


    <!--Panel 1-->
	<div class="tab-pane fade " id="panel99" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD INSTANTS</i></button>

  
  <div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b>ADD INSTANTS</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">

                    <form id="contact_form" action="saveinstants.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="md-form">
						
							<input type="hidden" name="size" value="1000000" />
			

		 <label class="btn btn-success btn-sm" style="	margin-left:180px; cursor:pointer;">
		 
        <input type="file" name="instant" onchange="readURL(this);" />
          ADD PHOTO
        </label>
		<br>
		
		</br>
		     <img id="blah" src="#"  style="margin-top:20px;	margin-left:180px;"/>
   
						     
                            <b>caption</b><textarea type="text"   name="caption"></textarea>
                            							 
						<?php
	echo "<input type='hidden'  name='date' value='"  . date("Y-m-d") . "' />";
						
						
date_default_timezone_set("Asia/Kolkata");


				echo	   " <input  type='hidden' name='time' value='"  . date("h:ia") . "' />";
				?>
  	 
		    
			

                        </div>
						 <div class="button">
          <button type="submit" class="btn btn-success"   id="submitForm"  name="submit" >SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
<br>

</br>

 <div id="div1-wrapper">
 <div id="div1">
 <?php

  echo "<p style='margin-left:220px;'><b>NO INSTANTS YET</b></p>  ";

?>
</div>
 </div>
</div>

    
  <div class="tab-pane fade" id="panel88" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD SNAPS</i></button>

	  
  <div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b>ADD SNAPS</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="savesnaps.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="md-form">
						
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	

		 <label class="btn btn-success btn-sm" style="	margin-left:180px; cursor:pointer;">
		 
        <input type="file" name="snap" class="file_multi_video"/>
          ADD SNAPS
        </label>
		<br>
		
		</br>
		
		
		<video style="margin-top:10px;	margin-left:180px; width:400px; height:300px;" controls>
  <source src="mov_bbb.mp4" id="video_here">
    Your browser does not support HTML5 video.
</video>

<script>
$(document).on("change", ".file_multi_video", function(evt) {
  var $source = $('#video_here');
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});
</script>
<br>
		    
						     
                            <b>descreption</b><textarea type="text"   name="descreption"></textarea>
                            							 
							 
		    
				<?php
	echo "<input type='hidden'  name='date' value='"  . date("Y-m-d") . "' />";
						
						
date_default_timezone_set("Asia/Kolkata");


				echo	   " <input  type='hidden' name='time' value='"  . date("h:ia") . "' />";
				?>

                        </div>
						 <div class="button">
          <button type="submit" class="btn btn-success"   id="submitForm"  name="submit"  >SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
<br>

</br>


 <div id="div2-wrapper">
 <div id="div2">

<?php
  echo "<p style='margin-left:220px;'><b>NO SNAPS YET</b></p>  ";

?>  
</div>
</div>
</div>


    
    <!--Panel 3-->
    
    
	<div class="tab-pane fade" id="panel77" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD TWEETS</i></button>

  
  <div class="modal fade" id="imodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
		
	
		
		
         <h4 class="modal-title"><b>ADD TWEETS</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="http://localhost/MDB%20Free/savetweets.php" method="POST" >
                        
                        <div class="md-form">
						
	                   <textarea type="text"   name="tweet"  ></textarea>
                     
                  <!-- Example autosize.js CDN Reference -->
               <script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
             <script>
    // Automatically size all of your <textarea> elements as you type
    autosize(document.querySelectorAll('textarea'));
             </script>			 
	
		    <?php
	echo "<input type='hidden'  name='date' value='"  . date("Y-m-d") . "' />";
						
						
date_default_timezone_set("Asia/Kolkata");


				echo	   " <input  type='hidden' name='time' value='"  . date("h:ia") . "' />";
				?>
  
			

                        </div>
						 <div class="button">
          <button type="submit" class="btn btn-success"   id="submitForm"  name="submit"  onclick="tweetshow();">SUBMIT</button>
        </div>
                    </form>
                </div>

    
      </div>
      
   
  
  </div>
</div>
<br>

</br>

  <div id="div3-wrapper">
 <div id="div3">

<?php
  echo "<p style='margin-left:220px;'><b>NO TWEETS YET</b></p>  ";

?>
</div>  
</div>
</div>
</div>
</div>

<!--/.Panel 3-->
	
	<div class="tab-pane fade " id="panel66" role="tabpanel">
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