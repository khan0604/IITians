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

<script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(350);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>

<script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
	
         function like() { 
		
			 var url = 'post.php';  
	        $('#div1-wrapper').load(url + ' #div1');
	         
	     }
    </script>
	
	<script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
	
         function snaplike() { 
		
			 var url = 'post.php';  
	        $('#div2-wrapper').load(url + ' #div2');
	         
	     }
    </script>
	
	
	
	<script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
	
         function tweetlike() { 
		
			 var url = 'post.php';  
	        $('#div3-wrapper').load(url + ' #div3');
	         
	     }
    </script>
	
	
	<script>
	 function show(){
	setTimeout(function () { // on a click on the button with id 'one'
  $('#two').trigger('click');// trigger the click on second, and go on 
}, 1e3);
	 }
</script>

<script>
	 function snapshow(){
	setTimeout(function () { // on a click on the button with id 'one'
  $('#three').trigger('click');// trigger the click on second, and go on 
}, 1e3);
	 }
</script>


<script>
	 function tweetshow(){
	setTimeout(function () { // on a click on the button with id 'one'
  $('#four').trigger('click');// trigger the click on second, and go on 
}, 1e3);
	 }
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
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="answer.php">ANSWER</a>
                </li>
              
				<li class="nav-item ">
                    <a class="nav-link" href="profile.php">PROFILE</a>
                </li>
				<li class="nav-item active">
                    <a class="nav-link" href="post.php">POST<span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="people.php">PEOPLE </a>
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
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#mymodal1" ><i class="fa fa-pencil" aria-hidden="true">   ADD INSTANTS</i></button>

  
  <div class="modal fade" id="mymodal1" role="dialog">
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

  $username = $_SESSION['username'];

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
  
  echo "<iframe name='votar' style='display:none;'></iframe>";

  
     echo   "<form id='contact_form' action='saveinstantlikes.php' method='POST' target='votar' >";
	 
	 	echo "		    <input type='hidden'  name='id' value='".$row['id']."' />";
		
		

        
$sml = "SELECT * FROM likes WHERE postid='".$row['id']."'  AND likeusername='$username' AND type='instants' ORDER BY  likes.id DESC ";




$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
     	   echo "<button type='submit'  id='submitForm'  onclick='show();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1; cursor:pointer;  margin-left:10px;' ><td style='text-align:center; width: 100%;'><i class='heart' style='font-size: 1.5em; opacity:1;  '></i></td> </button>";

	}
}

else
{
	     	   echo "<button type='submit'  id='submitForm'  onclick='show();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1; cursor:pointer;  margin-left:10px;' ><td style='text-align:center; width: 100%;'><i class='fa fa-heart-o' style='font-size: 1.5em; opacity:1;  '></i></td> </button>";

}


	 echo "<button type='button'  id='two'  onclick='like();' style='width:100px; display:none; ' >";
	 
				            echo "<button type='button' style='background-color:white; opacity:1; cursor:pointer; margin-left:10px;' id='btn'>        <i class='fa fa-comment-o' aria-hidden='true' style='font-size: 1.5em;'></i></button>";


	 		echo	"</form>";

		
			   
$sml = "SELECT * FROM likes WHERE postid='".$row['id']."'  AND type='instants' ORDER BY  likes.id DESC";



$i=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $i++;
	}
}
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#b".$row['id']."' ><font color='black' size='2' ><b> likes $i  </b></font></button>

  
  <div class='modal fade' id='b".$row['id']."' role='dialog'>
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
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#modelc$x' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
  <div class='modal fade' id='modelc$x' role='dialog'>
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

	
	
	$dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='$username'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section' id='pc' style='height:25px; width:550px; display:inline;  '>

   
    <!--First row-->
    <div class='row text-center' style='display:inline;  '>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='display:inline; ' >
 
            <div class='avatar' style='display:inline; '>
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:10px; margin-bottom:10px;' >           
				</div>
           
		   
        </div>
        <!--/Second column-->

        <!--/Fourth column-->
		
    	 <iframe name='votar' style='display:none;'></iframe>

      <form id='contact_form' action='saveinstantcomments.php' method='POST' style=' margin-top:-60px;' target='votar' >
                        
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
          <button type='submit' class='btn btn-success'   id='submitForm' onclick='show();' name='submit' style='display:inline; cursor:pointer; margin-top:-35px; margin-right:-50px;'  >COMMENT</button>
        </div>
		</form>
    </div>
    <!--/First row-->

	
</section>";

$sml = "SELECT * FROM comments WHERE postid='".$row['id']."' AND type='instants' AND commentuser='$username'";



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
		      <p style='display:inline;'><b><a href='profile.php' style='color:black;'>  &nbsp; ".$rowp['username']." </a></b></p>
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
        <button type="button" class="btn btn-success btn-sm" style="margin-left:200px; width:30%; " data-toggle="modal" data-target="#mymodal2" ><i class="fa fa-pencil" aria-hidden="true">   ADD SNAPS</i></button>

	  
  <div class="modal fade" id="mymodal2" role="dialog">
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

	 echo "<iframe name='votar' style='display:none;'></iframe>";

  
     echo   "<form id='contact_form' action='savesnaplikes.php' method='POST' target='votar' >";
	 
	 	echo "		    <input type='hidden'  name='id' value='".$row['id']."' />";
		
		
        
$sml = "SELECT * FROM likes WHERE postid='".$row['id']."'  AND likeusername='$username' AND type='snaps' ORDER BY  likes.id DESC";




$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
     	   echo "<button type='submit'  id='submitForm'  onclick='snapshow();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1; margin-left:10px;' ><td style='text-align:center; width: 100%;'><i class='heart' style='font-size: 1.5em; opacity:1;  '></i></td> </button>";

	}
}

else
{
	     	   echo "<button type='submit'  id='submitForm'  onclick='snapshow();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1;  margin-left:10px; ' ><td style='text-align:center; width: 100%;'><i class='fa fa-heart-o' style='font-size: 1.5em; opacity:1;  '></i></td> </button>";

}


	 echo "<button type='button'  id='three'  onclick='snaplike();' style='width:100px; display:none; ' >";
	 
	
        
	            echo "<button type='button' style='background-color:white; cursor:pointer; opacity:1; margin-left:10px;' id='btn2'>        <i class='fa fa-comment-o' aria-hidden='true' style='font-size: 1.5em;'></i></button>";



		echo	"</form>";
		
    $sml = "SELECT * FROM likes WHERE postid='".$row['id']."' AND type='snaps' ORDER BY  likes.id DESC";
  
$i=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
    $i++;
	}
}


 
 
		echo " <button type='button' class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#d".$row['id']."' ><font color='black' size='2' ><b>  likes $i</b></font></button>

  
  <div class='modal fade' id='d".$row['id']."' role='dialog'>
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
		
		$x=$row['id'];
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#modele$x' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
  <div class='modal fade' id='modele$x' role='dialog'>
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

	$dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='$username'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section' id='pc2' style='height:25px; width:550px; display:inline;  '>

   
    <!--First row-->
    <div class='row text-center' style='display:inline;  '>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='display:inline; ' >
 
            <div class='avatar' style='display:inline; '>
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:10px; margin-bottom:10px;' >           
				</div>
           
		   
        </div>
        <!--/Second column-->

        <!--/Fourth column-->
		
    	 <iframe name='votar' style='display:none;'></iframe>

      <form id='contact_form' action='savesnapcomments.php' method='POST' style=' margin-top:-60px;' target='votar' >
                        
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
          <button type='submit' class='btn btn-success'   id='submitForm' onclick='snapshow();' name='submit' style='display:inline; cursor:pointer; margin-top:-35px; margin-right:-50px;'  >COMMENT</button>
        </div>
		</form>
    </div>
    <!--/First row-->

	
</section>";

$sml = "SELECT * FROM comments WHERE postid='".$row['id']."' AND type='snaps' AND commentuser='$username'";



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
		      <p style='display:inline;'><b><a href='profile.php' style='color:black;'>  &nbsp; ".$rowp['username']." </a></b></p>
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
		
	
		
		
         <h4 class="modal-title"><b>ADD TWEETS</b></h4>
		 
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
                        <div class="modal-body">
                    <form id="contact_form" action="savetweets.php" method="POST" >
                        
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

	
	 echo "<iframe name='votar' style='display:none;'></iframe>";

  
     echo   "<form id='contact_form' action='savetweetlikes.php' method='POST' target='votar' >";
	 
	 	echo "		    <input type='hidden'  name='id' value='".$row['id']."' />";
		
		
        
$sml = "SELECT * FROM likes WHERE postid='".$row['id']."'  AND likeusername='$username' AND type='tweets' ORDER BY  likes.id DESC";




$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
     	   echo "<button type='submit'  id='submitForm'  onclick='tweetshow();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1; margin-left:10px;' ><td style='text-align:center; width: 100%;'><i class='heart' style='font-size: 1.5em; opacity:1;  '></i></td> </button>";

	}
}

else
{
	     	   echo "<button type='submit'  id='submitForm'  onclick='tweetshow();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1;  margin-left:10px; ' ><td style='text-align:center; width: 100%;'><i class='fa fa-heart-o' style='font-size: 1.5em; opacity:1;  '></i></td> </button>";

}


	 echo "<button type='button'  id='four'  onclick='tweetlike();' style='width:100px; display:none; ' >";
	 
	
        
	

            echo "<button type='button' style='background-color:white; cursor:pointer; opacity:1; margin-left:10px;' id='btn3'>        <i class='fa fa-comment-o' aria-hidden='true' style='font-size: 1.5em;'></i></button>";

		echo	"</form>";
		
    $sml = "SELECT * FROM likes WHERE postid='".$row['id']."' AND type='tweets' ORDER BY  likes.id DESC";
  
$i=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
    $i++;
	}
}


 
 
		echo " <button type='button' class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#f".$row['id']."' ><font color='black' size='2' ><b>  likes $i</b></font></button>

  
  <div class='modal fade' id='f".$row['id']."' role='dialog'>
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
		
		$x=$row['id'];
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;  cursor:pointer;  background-color:white; display:inline;' data-toggle='modal' data-target='#modelg$x' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
  <div class='modal fade' id='modelg$x' role='dialog'>
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
	
	$dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='$username'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section' id='pc3' style='height:25px; width:550px; display:inline;  '>

   
    <!--First row-->
    <div class='row text-center' style='display:inline;  '>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='display:inline; ' >
 
            <div class='avatar' style='display:inline; '>
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:10px; margin-bottom:10px;' >           
				</div>
           
		   
        </div>
        <!--/Second column-->

        <!--/Fourth column-->
		
    	 <iframe name='votar' style='display:none;'></iframe>

      <form id='contact_form' action='savetweetcomments.php' method='POST' style=' margin-top:-60px;' target='votar' >
                        
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
          <button type='submit' class='btn btn-success'   id='submitForm' onclick='tweetshow();' name='submit' style='display:inline; cursor:pointer; margin-top:-35px; margin-right:-50px;'  >COMMENT</button>
        </div>
		</form>
    </div>
    <!--/First row-->

	
</section>";

$sml = "SELECT * FROM comments WHERE postid='".$row['id']."' AND type='tweets' AND commentuser='$username'";



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
		      <p style='display:inline;'><b><a href='profile.php' style='color:black;'>  &nbsp; ".$rowp['username']." </a></b></p>
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
