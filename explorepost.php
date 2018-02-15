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
                success: function(){
	        $('#div1-wrapper').load(url + ' #div1');
	         
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



</head>




<body>

<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark green">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" >
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
              
				<li class="nav-item ">
                    <a class="nav-link" href="exploreprofile.php">PROFILE</a>
                </li>
				<li class="nav-item active">
                    <a class="nav-link" href="explorepost.php">POST<span class="sr-only">(current)</span></a>
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


	

<ul class="nav nav-tabs tabs-3 green" role="tablist" style="margin:auto; margin-top:100px; width:40%; ">
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


<div class="tab-content card" style="margin:auto; width:45%; ">


    <!--Panel 1-->
	<div class="tab-pane fade " id="panel99" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#imodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD INSTANTS</i></button>

  
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
<br>

</br>

 <div id="div1-wrapper">
 <div id="div1">
 <?php


$sm = "SELECT * FROM instants ORDER BY  instants.id DESC";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
				 echo  
 "<div class='tab-content card ' style='margin:auto; width:100%;  '>


    <!--Panel 1-->
	<div class='tab-pane fade in show active ' id='panel1' role='tabpanel'>
        <br>";
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$row['username']."'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:800px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style='margin-left:-400px; width:1000px;'>
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-20px;' >           
		      <p style='display:inline;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>  &nbsp; ".$rowp['username']."</a></b><br></b></p><p style='margin-top:-40px; margin-left:700px;'> on <time style='display:inline; '> ".$row['date']." </time> at <time style='display:inline; '> ".$row['time']." </time></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>";
	   

			echo	 "<img src='instants/".$row['instant']."' style='width:100%; height:500px; '><br>";
  
  echo "<button type='button'   style='background-color:white; cursor:pointer; opacity:1;  margin-left:10px;' data-toggle='modal' data-target='#imodal'><td style='text-align:center; width: 100%;'><i class='fa fa-heart-o' style='font-size: 1.5em; opacity:1;  '></i></td> </button>

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


  
  
  		            echo "<button type='button' style='background-color:white; opacity:1; cursor:pointer; margin-left:10px;' id='btn'>        <i class='fa fa-comment-o' aria-hidden='true' style='font-size: 1.5em;'></i></button>";


	 		echo	"<br>";

		
			   
$sml = "SELECT * FROM likes WHERE postid='".$row['id']."'  AND type='instants' ORDER BY  likes.id DESC";



$i=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $i++;
	}
}
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#".$row['id']."' ><font color='black' size='2' ><b> likes $i  </b></font></button>

  
  <div class='modal fade' id='".$row['id']."' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>LIKED BY</b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($i>0){	 
	   
$sml = "SELECT * FROM likes WHERE postid='".$row['id']."' AND type='instants' ORDER BY  likes.id DESC";



$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
  
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$rowl['likeusername']."'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:800px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' >
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-20px;' >           
		      <p style='display:inline;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>  &nbsp; ".$rowp['username']."</a> </b></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>";
	   

	}
}
}

if($i ==0)
{
	
echo "Yet to be liked";
}
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";
	   
	   		
$sml = "SELECT * FROM comments WHERE postid='".$row['id']."'  AND type='instants'";



$k=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $k++;
	}
}
		
		$x=$row['id'];
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#model$x' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
  <div class='modal fade' id='model$x' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>COMMENTS BY</b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($k>0){	 
	   
$sml = "SELECT * FROM comments WHERE postid='".$row['id']."' AND type='instants'";



$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
  
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$rowl['commentuser']."'";
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

	
</section>
	   
  		<p style='margin-left:10px; white-space: pre-line;'> ".$rowl['comment']." </p>";

	}
}
}

if($k ==0)
{
	
echo "No Comments Yet";
}
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";
	   


	   
	  
		
   	     echo "<p style='margin-left:10px; white-space: pre-line;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>".$row['username']."</a></b> &nbsp; ".$row['caption']."</p>";

	
	
			 
			 
			 
			 
		    echo  "<section class='section team-section' id='pc' style='height:25px; width:550px; display:inline;  '>

   
    <!--First row-->
    <div class='row text-center' style='display:inline;  '>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='display:inline; ' >
 
            <div class='avatar' style='display:inline; '>
		
                <img src='images/dp.svg' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:10px; margin-bottom:10px;' >           
				</div>
           
		   
        </div>
        <!--/Second column-->

        <!--/Fourth column-->
		
    	 <iframe name='votar' style='display:none;'></iframe>

      <form id='contact_form' action='http://localhost/MDB%20Free/saveinstantcomments.php' method='POST' style=' margin-top:-60px;' target='votar' >
                        
                        <div class='md-form' style='display:inline;'>
						
			<input type='hidden'  name='id' value='".$row['id']."' />

	                   <textarea type='text'   name='comment' style='display:inline; width:60%; margin-left:10px;' placeholder='Add comment'></textarea>
                     
                  <!-- Example autosize.js CDN Reference -->
               <script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
             <script>
    // Automatically size all of your <textarea> elements as you type
    autosize(document.querySelectorAll('textarea'));
             </script>			 
	
		    
			

                        </div>
						 <div class='button'style='display:inline; '>
<button type='button' class='btn btn-success'  style='display:inline; cursor:pointer; margin-top:-35px; margin-right:-50px;' data-toggle='modal' data-target='#imodal' >COMMENT</button>
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
	   </div>
  





						 </div>
		</form>
    </div>
    <!--/First row-->

	
</section>";



	
  echo "	</div>
            </div>
			<br>
			
			</br>";
			

}
}
?>
</div>
 </div>
</div>

    
  <div class="tab-pane fade" id="panel88" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#xmodal" ><i class="fa fa-pencil" aria-hidden="true">   ADD SNAPS</i></button>

	  
  <div class="modal fade" id="xmodal" role="dialog">
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
<br>

</br>


 <div id="div2-wrapper">
 <div id="div2">

<?php

$sm = "SELECT * FROM snaps ORDER BY  snaps.id DESC";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
				 echo  
 "<div class='tab-content card ' style='margin:auto; width:100%;  '>


    <!--Panel 1-->
	<div class='tab-pane fade in show active ' id='panel2' role='tabpanel'>
        <br>";
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$row['username']."'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:1000px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style=' width:1000px;   margin-left:-380px;'>
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-50px;' >           
		      <p style='display:inline;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>  &nbsp;  ".$rowp['username']." </a></b><br></p><p style='margin-top:-40px; margin-left:660px;'> on <time style='display:inline; '> ".$row['date']." </time> at <time style='display:inline; '> ".$row['time']." </time></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>";
	   

        
		echo "<video style='width:100%; height:380px; ' controls>
             <source src='snaps/".$row['snap']."' type='video/mp4'>
 
               Your browser does not support the video tag.
            </video><br>";

			echo "<button type='button'   style='background-color:white; cursor:pointer; opacity:1;  margin-left:10px;' data-toggle='modal' data-target='#xmodal'><td style='text-align:center; width: 100%;'><i class='fa fa-heart-o' style='font-size: 1.5em; opacity:1;  '></i></td> </button>

          <div class='modal fade' id='xmodal' role='dialog'>
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


	            echo "<button type='button' style='background-color:white; cursor:pointer; opacity:1; margin-left:10px;' id='btn2'>        <i class='fa fa-comment-o' aria-hidden='true' style='font-size: 1.5em;'></i></button>";



		echo	"</br>";
		
    $sml = "SELECT * FROM likes WHERE postid='".$row['id']."' AND type='snaps' ORDER BY  likes.id DESC";
  
$i=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
    $i++;
	}
}

                $a=0;
 
 
		echo " <button type='button' class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#$a".$row['id']."' ><font color='black' size='2' ><b>  likes $i</b></font></button>

  
  <div class='modal fade' id='$a".$row['id']."' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>LIKED BY</b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($i>0){	 
	   
$sml = "SELECT * FROM likes WHERE postid='".$row['id']."' AND type='snaps' ORDER BY  likes.id DESC";


$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
$dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$rowl['likeusername']."'";
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
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>";
	      

	}
}
}

if($i ==0)
{
	
echo "Yet to be liked";
}
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";

	  
	  $sml = "SELECT * FROM comments WHERE postid='".$row['id']."'  AND type='snaps'";



$k=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $k++;
	}
}
		
		$b=$row['id'];
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#modelb$b' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
  <div class='modal fade' id='modelb$b' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>COMMENTS BY</b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($k>0){	 
	   
$sml = "SELECT * FROM comments WHERE postid='".$row['id']."' AND type='snaps'";



$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
  
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$rowl['commentuser']."'";
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

	
</section>
	   
  		<p style='margin-left:10px; white-space: pre-line;'> ".$rowl['comment']." </p>";

	}
}
}

if($k ==0)
{
	
echo "No Comments Yet";
}
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";
	   

	

   	     echo "<p style='margin-left:10px; white-space: pre-line;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>".$row['username']."</a></b> &nbsp; ".$row['descreption']."</p>";

			 
			 
			 
			 
		    echo  "<section class='section team-section' id='pc2' style='height:25px; width:550px; display:inline;  '>

   
    <!--First row-->
    <div class='row text-center' style='display:inline;  '>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='display:inline; ' >
 
            <div class='avatar' style='display:inline; '>
		
                <img src='images/dp.svg' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:10px; margin-bottom:10px;' >           
				</div>
           
		   
        </div>
        <!--/Second column-->

        <!--/Fourth column-->
		
    	 <iframe name='votar' style='display:none;'></iframe>

      <form id='contact_form' action='http://localhost/MDB%20Free/savesnapcomments.php' method='POST' style=' margin-top:-60px;' target='votar' >
                        
                        <div class='md-form' style='display:inline;'>
						
			<input type='hidden'  name='id' value='".$row['id']."' />

	                   <textarea type='text'   name='comment' style='display:inline; width:60%; margin-left:10px;' placeholder='Add comment'></textarea>
                     
                  <!-- Example autosize.js CDN Reference -->
               <script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
             <script>
    // Automatically size all of your <textarea> elements as you type
    autosize(document.querySelectorAll('textarea'));
             </script>			 
	
		    
			

                        </div>
						 <div class='button'style='display:inline; '>
<button type='button' class='btn btn-success'  style='display:inline; cursor:pointer; margin-top:-35px; margin-right:-50px;' data-toggle='modal' data-target='#xmodal' >COMMENT</button>
          <div class='modal fade' id='xmodal' role='dialog'>
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
	   </div>
  





						 </div>
		</form>
    </div>
    <!--/First row-->

	
</section>";


	
  echo "	</div>
            </div>
			<br>
			
			</br>";

}
}
?>  
</div>
</div>
</div>


    
    <!--Panel 3-->
    
    
	<div class="tab-pane fade" id="panel77" role="tabpanel">
        <br>
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#mymodal3" ><i class="fa fa-pencil" aria-hidden="true">   ADD TWEETS</i></button>

  
  <div class="modal fade" id="mymodal3" role="dialog">
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
<br>

</br>

  <div id="div3-wrapper">
 <div id="div3">

<?php

$sm = "SELECT * FROM tweets ORDER BY  tweets.id DESC";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
				 echo  
 "<div class='tab-content card ' style='margin:auto; width:100%;  '>


    <!--Panel 1-->
	<div class='tab-pane fade in show active ' id='panel3' role='tabpanel'>
        <br>";
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$row['username']."'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:1000px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style='width:1000px;  margin-left:-390px;'>
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-50px;' >           
		      <p style='display:inline;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>  &nbsp;   ".$rowp['username']." </a></b><br></p><p style='margin-top:-40px; margin-left:680px;'> on <time style='display:inline; '> ".$row['date']." </time> at <time style='display:inline; '> ".$row['time']." </time></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>";
	   

           	     echo "<p style='margin-left:20px; white-space: pre-line;'>  ".$row['tweet']."</p>";

				 echo "<button type='button'   style='background-color:white; cursor:pointer; opacity:1;  margin-left:10px;' data-toggle='modal' data-target='#zmodal'><td style='text-align:center; width: 100%;'><i class='fa fa-heart-o' style='font-size: 1.5em; opacity:1;  '></i></td> </button>

          <div class='modal fade' id='zmodal' role='dialog'>
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


	
	 
            echo "<button type='button' style='background-color:white; cursor:pointer; opacity:1; margin-left:10px;' id='btn3'>        <i class='fa fa-comment-o' aria-hidden='true' style='font-size: 1.5em;'></i></button>";

		echo	"</br>";
		
    $sml = "SELECT * FROM likes WHERE postid='".$row['id']."' AND type='tweets' ORDER BY  likes.id DESC";
  
$i=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
    $i++;
	}
}


 $c=0;
 
		echo " <button type='button' class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#$c".$row['id']."' ><font color='black' size='2' ><b>  likes $i</b></font></button>

  
  <div class='modal fade' id='$c".$row['id']."' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>LIKED BY</b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($i>0){	 
	   
$sml = "SELECT * FROM likes WHERE postid='".$row['id']."' AND type='tweets' ORDER BY  likes.id DESC";


$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
$dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$rowl['likeusername']."'";
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
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>";
	      

	}
}
}

if($i ==0)
{
	
echo "Yet to be liked";
}
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";

	$sml = "SELECT * FROM comments WHERE postid='".$row['id']."'  AND type='tweets'";



$k=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $k++;
	}
}
		
		$d=$row['id'];
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;  cursor:pointer;  background-color:white; display:inline;' data-toggle='modal' data-target='#modeld$d' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
  <div class='modal fade' id='modeld$d' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>COMMENTS BY</b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($k>0){	 
	   
$sml = "SELECT * FROM comments WHERE postid='".$row['id']."' AND type='tweets'";



$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
  
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$rowl['commentuser']."'";
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

	
</section>
	   
  		<p style='margin-left:10px; white-space: pre-line;'> ".$rowl['comment']." </p>";

	}
}
}

if($k ==0)
{
	
echo "No Comments Yet";
}
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";
	   
	   echo "<br>";
	
	echo "<br>";
	
			 
			 
			 
			 
		    echo  "<section class='section team-section' id='pc3' style='height:25px; width:550px; display:inline;  '>

   
    <!--First row-->
    <div class='row text-center' style='display:inline;  '>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='display:inline; ' >
 
            <div class='avatar' style='display:inline; '>
		
                <img src='images/dp.svg' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:10px; margin-bottom:10px;' >           
				</div>
           
		   
        </div>
        <!--/Second column-->

        <!--/Fourth column-->
		
    	 <iframe name='votar' style='display:none;'></iframe>

      <form id='contact_form' action='http://localhost/MDB%20Free/savetweetcomments.php' method='POST' style=' margin-top:-60px;' target='votar' >
                        
                        <div class='md-form' style='display:inline;'>
						
			<input type='hidden'  name='id' value='".$row['id']."' />

	                   <textarea type='text'   name='comment' style='display:inline; width:60%; margin-left:10px;' placeholder='Add comment'></textarea>
                     
                  <!-- Example autosize.js CDN Reference -->
               <script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
             <script>
    // Automatically size all of your <textarea> elements as you type
    autosize(document.querySelectorAll('textarea'));
             </script>			 
	
		    
			

                        </div>
						 <div class='button'style='display:inline; '>

<button type='button' class='btn btn-success'  style='display:inline; cursor:pointer; margin-top:-35px; margin-right:-50px;' data-toggle='modal' data-target='#zmodal' >COMMENT</button>
          <div class='modal fade' id='zmodal' role='dialog'>
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
	   </div>
  



						 </div>
		</form>
    </div>
    <!--/First row-->

	
</section>";


	
  echo "	</div>
            </div>
			<br>
			
			</br>";

}
}
?>
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
