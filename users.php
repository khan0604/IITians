<?php 

require 'db.php';
session_start();
$user= $_GET['username'];

?>


<?php


if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: explorehome.php");    
}
else {
    $username = $_SESSION['username'];
 
}
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
	
         function play() { 
		
			 var url = 'users.php?username=<?php echo rawurlencode ($user); ?>';  
	        $('#div9-wrapper').load(url + ' #div9');
	         
	     }
    </script>

<script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
	
         function liked() { 
		
			 var url = 'users.php?username=<?php echo rawurlencode ($user); ?>';  
	        $('#div5-wrapper').load(url + ' #div5');
	         
	     }
    </script>

<script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
	
         function like() { 
		
			 var url = 'users.php?username=<?php echo rawurlencode ($user); ?>';  
	        $('#div1-wrapper').load(url + ' #div1');
	         
	     }
    </script>
	
	<script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
	
         function snaplike() { 
		
			 var url = 'users.php?username=<?php echo rawurlencode ($user); ?>';  
	        $('#div2-wrapper').load(url + ' #div2');
	         
	     }
    </script>
	
	
	
	<script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
	
         function tweetlike() { 
		
			 var url = 'users.php?username=<?php echo rawurlencode ($user); ?>';  
	        $('#div3-wrapper').load(url + ' #div3');
	         
	     }
    </script>
	
	
	<script>
	 function change(){
	setTimeout(function () { // on a click on the button with id 'one'
  $('#ten').trigger('click');// trigger the click on second, and go on 
}, 1e3);
	 }
</script>

	<script>
	 function preview(){
	setTimeout(function () { // on a click on the button with id 'one'
  $('#six').trigger('click');// trigger the click on second, and go on 
}, 1e3);
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
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="answer.php">ANSWER</a>
                </li>
              
				<li class="nav-item ">
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



 <div id="div9-wrapper">
 <div id="div9"> 

<?php

$sml = "SELECT * FROM follow WHERE following='$user' ";



$k=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $k++;
	}
}
		
		
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='  background-color:white; display:inline;  cursor:pointer; margin-bottom:-480px; margin-left:375px;' data-toggle='modal' data-target='#model' ><font color='black' size='2' ><b> followers $k  </b></font></button>

  
  <div class='modal fade' id='model' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>FOLLOWED BY</b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($k>0){	 
	   
$sml = "SELECT * FROM follow WHERE following='$user' ";



$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
  
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$rowl['followers']."'";
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
	
echo "No followers Yet";
}
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";

	   ?>
	   

	   <?php

$sml = "SELECT * FROM follow WHERE followers='$user' ";



$k=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $k++;
	}
}
		
		
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='  background-color:white; display:inline; cursor:pointer; margin-bottom:-480px; margin-left:245px;' data-toggle='modal' data-target='#model2' ><font color='black' size='2' ><b> following $k  </b></font></button>

  
  <div class='modal fade' id='model2' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>FOLLOWING </b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($k>0){	 
	   
$sml = "SELECT * FROM follow WHERE followers='$user' ";



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
	   
	   $username = $_SESSION['username'];

	     echo "<iframe name='votar' style='display:none;'></iframe>";

  
     echo   "<form id='contact_form' action='savefollowers.php' method='POST' target='votar' >";
	 
	 	echo "		    <input type='hidden'  name='following' value='$user' />";
		
		

        
$smf = "SELECT * FROM follow WHERE followers='$username' AND following='$user' ORDER BY  follow.id DESC ";




$resultf = $mysqli->query($smf);


if ($resultf->num_rows > 0) {
    
while($rowf = $resultf->fetch_assoc()) {
   
     	   echo "<button type='submit'   class='btn btn-success btn-sm' id='submitForm'  onclick='change();' name='submit' data-send='false' style=' opacity:1; cursor:pointer;  margin-left:540px; margin-bottom:-700px; width:15%;' ><font color='white' size='2' ><b>FOLLOWING </b></font></button>";

	}
}

else
{
	     	   echo "<button type='submit'  class='btn btn-success btn-sm' id='submitForm'  onclick='change();' name='submit' data-send='false' style='background-color:white; opacity:1; cursor:pointer;  margin-left:540px; margin-bottom:-700px; width:15%;' ><font color='black' size='2' ><b>FOLLOW </b></font></button>";

}


	 echo "<button type='button'  id='ten'  onclick='play();' style='width:100px; display:none; ' >";
	 


	 		echo	"</form>";

			?>
	   
	</div>
</div>	

<?php 

$username = $_SESSION['username'];

		 $db = mysqli_connect("localhost", "root","", "ask");
		 $sql = "SELECT * FROM images WHERE username='$user'";
		 $result =mysqli_query ($db, $sql);
		 while($row = mysqli_fetch_array($result)){
			 
			 
			 
			 
		    echo  "<section class='section team-section' style='margin:auto;' >

   
    <!--First row-->
    <div class='row text-center' style='margin:auto;'>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='margin:auto;'>
 
            <div class='avatar' style='margin-left:20px;'>
		
                <img src='images/".$row['image']."' class='rounded-circle' style='height:200px; margin-top:90px; width:200px;' >
            </div>
            
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>";
	   }
		 ?>

		 

			

 
	  	<br>
		<br>
				
<div class="card" style="margin:auto; width:50%; ">

    <!--Card image-->
				<!--Section: Team v.1-->
    <!--Card content-->
    <div class="card-block" >
        <!--Title-->
        <h4 class="card-title" style="margin-left:230px;"><b><?php echo $user; ?></b></h4>
		
			<?php	echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:230px; height:10%;  background-color:white; cursor:pointer; '  ><font color='black' size='2' ><b><a href='text.php?username=$user' style='color:black;'> message  </a></b></font></button>";?>

<br>


 
		    		
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
        
<?php

$username = $_SESSION['username'];

$sm = "SELECT * FROM about WHERE username='$user'";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
	echo "
		 <p class='tag'><b>studying at   ".$row['college']."</b></p><br>
		 
	     <p class='tag'><b> department  ".$row['branch']."</b></p><br>
		 <p class='tag'><b> went to ".$row['school']."</b></p><br>
		 
		 <p class='tag'><b>Lives in   ".$row['currentcity']."</b></p><br>
		 
	     <p class='tag'><b> From   ".$row['hometown']."</b></p><br>
		 <p class='tag'><b> Born on ".$row['birthday']."</b></p><br>";
}
}
?>
</div>
    
    
<div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>
        
<?php

$username = $_SESSION['username'];

$sm = "SELECT * FROM interest WHERE username='$user'";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
	echo "<p class='tag'><b>".$row['intr']."</b></p><br>";
}
}
?>
  </div>
    
    <!--Panel 3-->
    <div class="tab-pane fade" id="panel3" role="tabpanel">
        <br>
<div class="tab-pane fade in show active" id="panel3" role="tabpanel">
        <br>
        
<?php

$sm = "SELECT * FROM clubs WHERE username='$user'";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
	echo "<p class='tag'><b> Works at ".$row['club']."</b></p><br>";
}
}
?>
</div>


<div class="tab-pane fade in show active" id="panel3" role="tabpanel">
        <br>
<?php

$sm = "SELECT * FROM position WHERE username='$user'";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
	echo "<p class='tag'><b> Works as ".$row['por']."</b></p><br>";
}
}
?>
</div>
 
 </div>
    <!--/.Panel 3-->
	
	<div class="tab-pane fade " id="panel4" role="tabpanel">
        <br>
        

<?php

$sm = "SELECT * FROM skills WHERE username='$user'";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
	echo "<p class='tag'><b> ".$row['skill']."</b></p><br>";
}
}
?>
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

<div class="tab-content card" style="margin:auto; width:60%; ">

	  <div class="tab-pane fade " id="panel5" role="tabpanel">
     
<?php

$username = $_SESSION['username'];


$sm = "SELECT * FROM questions WHERE qusername='$user'";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {

echo "<div class='box' style='width:100%; margin-left:0px;'>";   
 
            
echo "<div class='card' style='width:100%;'>";

        
  echo  "<div class='card-block' style='width:100%;'> ";
  
  $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$row['qusername']."'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:800px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style='width:500px; margin-left:-140px;'>
		     
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-20px;' >           
		      <p style='display:inline;'><b>  &nbsp; ".$rowp['username']."   ASKED</b><br></b></p><p style='margin-top:-20px; margin-left:90px;'> on <time style='display:inline; '> ".$row['qdate']." </time> at <time style='display:inline; '> ".$row['qtime']." </time></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>
<br>";
       
       echo "<h4 class='card-title' style='margin-left:10px; white-space: pre-line;'><b><a href='questions.php?id=".$row["id"]."' style='color:black;'>Q." .$row['quote']."?</a></b></h4>";
	   
	   
	   
        
   echo     "<p class='card-text' style='margin-left:10px;'>Please Answer The Question</p>";
      
	  
	   echo     " 
  
  
  <button type='button' class='btn btn-success btn-lg' data-toggle='modal' data-target='#".$row['id']."' ><i class='fa fa-pencil' aria-hidden='true'>   ANSWER</i></button>

  
  <div class='modal fade' id='".$row['id']."' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>";
		
	
		
		
         echo "<h4 class='modal-title'><b>Q. ".$row['quote']."?</b></h4>";
		 
		 
		  echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>
                    <form id='contact_form' action='copy.php' method='POST'>
                        
                        <div class='md-form'>
                            <textarea type='text'  class='enter' name='ans'></textarea>
							 
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
</div>

 <div class="tab-pane fade " id="panel6" role="tabpanel">
     
	
 <div id="div5-wrapper">
 <div id="div5"> 
<?php

$username = $_SESSION['username'];




$sm = "SELECT * FROM answer WHERE username='$user'";





   $result = mysqli_query($mysqli,$sm);


    
while($row =mysqli_fetch_array($result)){


echo "<div class='box' style='width:100%; margin-left:0px;'>";   
 
            
echo "<div class='card' style='width:100%;'>";

        
  echo  "<div class='card-block' style='width:100%;'> ";
  
  
       
	   
	       $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username= '".$row['username']."' ";
		 
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:800px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style='width:500px; margin-left:-120px;' >
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-10px;' >           
		      <p style='display:inline; '><b>  &nbsp;  ".$rowp['username']." ANSWERED <br></b></p><p style='margin-top:-20px; margin-left:70px;'> on <time style='display:inline; '> ".$row['date']." </time> at <time style='display:inline; '> ".$row['time']." </time></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>
<br>";
        
   echo     "<p class='card-text' style='white-space: pre-line; margin-left:10px;'><b>ANSWER.</b>       " .$row['ans']."</p>";  
   
   
 
  

  
   echo "<iframe name='votar' style='display:none;'></iframe>";

  
     echo   "<form id='contact_form' action='saveansupvotes.php' method='POST' target='votar' style='display:inline;'>";
	 
	 	echo "		    <input type='hidden'  name='id' value='".$row['id']."' />";
		
		

        
$sml = "SELECT * FROM upvotes WHERE answerid='".$row['id']."'  AND upvoteuser='$username'  ";




$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
     	   echo "<button type='submit'  id='submitForm'  onclick='preview();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1;   margin-left:10px;' ><td style='text-align:center; width: 100%;'><i  class='fa fa-thumbs-up' aria-hidden='true' style='font-size: 1.5em; opacity:1;  color:#3CB371	;'></i></td> </button>";

	}
}

else
{
	     	   echo "<button type='submit'  id='submitForm'  onclick='preview();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1;  margin-left:10px;' ><td style='text-align:center; width: 100%;'><i class='fa fa-thumbs-o-up' aria-hidden='true' style='font-size: 1.5em; opacity:1; color:green;  '></i></td> </button>";

}


	 echo "<button type='button'  id='six'  onclick='liked();' style='width:100px; display:none; ' >";
	 
     	  echo "<button type='button' style='background-color:white; cursor:pointer; opacity:1; margin-left:10px;' id='btn'>        <i class='fa fa-comment-o' aria-hidden='true' style='font-size: 1.5em; color:green;'></i></button>";


	 		echo	"</form>";
			
			
			
			echo "<br>";
			
			   
$sml = "SELECT * FROM upvotes WHERE answerid='".$row['id']."' ";



$i=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $i++;
	}
}
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#".$row['id']."' ><font color='black' size='2' ><b> upvotes $i  </b></font></button>

  
  <div class='modal fade' id='".$row['id']."' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
		
	
		
		
         <h4 class='modal-title'><b>UPVOTED BY</b></h4>
		 
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>";
     
if($i>0){	 
	   
$sml = "SELECT * FROM upvotes WHERE answerid='".$row['id']."' ";



$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
  
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='".$rowl['upvoteuser']."'";
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
	
echo "Yet to be upvoted";
}
	   
	  echo " </div>
	   </div>
	   </div>
	   </div>";
	
	   		
$sml = "SELECT * FROM comments WHERE postid='".$row['id']."'  AND type='answers'";



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
	   
$sml = "SELECT * FROM comments WHERE postid='".$row['id']."' AND type='answers'";



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
	   
  		<p style='margin-left:10px;'> ".$rowl['comment']." </p>";

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

      <form id='contact_form' action='saveanscomments.php' method='POST' style=' margin-top:-60px;' target='votar' >
                        
                        <div class='md-form' style='display:inline;'>
						
			<input type='hidden'  name='id' value='".$row['id']."' />

	                   <textarea type='text'   name='comment' style='display:inline; width:70%; margin-left:10px;' placeholder='Add comment'></textarea>
                     
                  <!-- Example autosize.js CDN Reference -->
               <script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
             <script>
    // Automatically size all of your <textarea> elements as you type
    autosize(document.querySelectorAll('textarea'));
             </script>			 
	
		    
			

                        </div>
						 <div class='button'style='display:inline; '>
          <button type='submit' class='btn btn-success'   id='submitForm' onclick='preview();' name='submit' style='display:inline; cursor:pointer; margin-top:-35px; margin-right:-50px;'  >COMMENT</button>
        </div>
		</form>
    </div>
    <!--/First row-->

	
</section>";

$sml = "SELECT * FROM comments WHERE postid='".$row['id']."' AND type='answers' AND commentuser='$username'";



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
	   
  		<p style='margin-left:10px;'> ".$rowl['comment']." </p>";

	}
}


   echo "</div>
          </div>
          </div>";
   echo "<br>";
   
}

     

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
       
        
 <div id="div1-wrapper">
 <div id="div1">
 <?php

  $username = $_SESSION['username'];

$sm = "SELECT * FROM instants WHERE username='$user' ORDER BY  instants.id DESC";



$result = $mysqli->query($sm);


if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
				 echo  
 "<div class='tab-content card ' style='margin:auto; width:100%;  '>


    <!--Panel 1-->
	<div class='tab-pane fade in show active ' id='panel99' role='tabpanel'>
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
		      <p style='display:inline;'><b>  &nbsp; ".$rowp['username']."</b><br></b></p><p style='margin-top:-40px; margin-left:660px;'> on <time style='display:inline; '> ".$row['date']." </time> at <time style='display:inline; '> ".$row['time']." </time></p>
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
   
     	   echo "<button type='submit'  id='submitForm'  onclick='show();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1;   margin-left:10px;' ><td style='text-align:center; width: 100%;'><i class='heart' style='font-size: 1.5em; opacity:1;  '></i></td> </button>";

	}
}

else
{
	     	   echo "<button type='submit'  id='submitForm'  onclick='show();' name='submit' data-send='false' style='background-color:white; cursor:pointer; opacity:1;  margin-left:10px;' ><td style='text-align:center; width: 100%;'><i class='fa fa-heart-o' style='font-size: 1.5em; opacity:1;  '></i></td> </button>";

}


	 echo "<button type='button'  id='two'  onclick='like();' style='width:100px; display:none; ' >";
	 
				            echo "<button type='button' style='background-color:white; cursor:pointer; opacity:1; margin-left:10px;' id='btn'>        <i class='fa fa-comment-o' aria-hidden='true' style='font-size: 1.5em;'></i></button>";


	 		echo	"</form>";

		
			   
$sml = "SELECT * FROM likes WHERE postid='".$row['id']."'  AND type='instants' ORDER BY  likes.id DESC";



$i=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $i++;
	}
}
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#a".$row['id']."' ><font color='black' size='2' ><b> likes $i  </b></font></button>

  
  <div class='modal fade' id='a".$row['id']."' role='dialog'>
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
	   
	   		
$sml = "SELECT * FROM comments WHERE postid='".$row['id']."'  AND type='instants'";



$k=0;
$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
   
   $k++;
	}
}
		
		$x=$row['id'];
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#modelb$x' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
  <div class='modal fade' id='modelb$x' role='dialog'>
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
	   


	   
	  
		
   	     echo "<p style='margin-left:10px; white-space: pre-line;'><b>".$row['username']."</b> &nbsp; ".$row['caption']."</p>";

	
	
	$dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='$username'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section' id='pc' style='height:25px; width:600px; display:inline;  '>

   
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
        
        
 <div id="div2-wrapper">
 <div id="div2">

<?php

$sm = "SELECT * FROM snaps WHERE username='$user' ORDER BY  snaps.id DESC";



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
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:800px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style=' width:1000px;   margin-left:-380px;'>
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-50px;' >           
		      <p style='display:inline;'><b>  &nbsp;  ".$rowp['username']." </b><br></p><p style='margin-top:-40px; margin-left:660px;'> on <time style='display:inline; '> ".$row['date']." </time> at <time style='display:inline; '> ".$row['time']." </time></p>
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


 
 
		echo " <button type='button' class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#c".$row['id']."' ><font color='black' size='2' ><b>  likes $i</b></font></button>

  
  <div class='modal fade' id='c".$row['id']."' role='dialog'>
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
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;  cursor:pointer; background-color:white; display:inline;' data-toggle='modal' data-target='#modeld$x' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
  <div class='modal fade' id='modeld$x' role='dialog'>
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
	   

	

   	     echo "<p style='margin-left:10px; white-space: pre-line;'><b>".$row['username']."</b> &nbsp; ".$row['descreption']."</p>";

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
        
        
  <div id="div3-wrapper">
 <div id="div3">

<?php

$sm = "SELECT * FROM tweets WHERE username='$user'  ORDER BY  tweets.id DESC";



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
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:800px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style='width:1000px;  margin-left:-390px;'>
		
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-50px;' >           
		      <p style='display:inline;'><b>  &nbsp;   ".$rowp['username']." </b><br></p><p style='margin-top:-40px; margin-left:660px;'> on <time style='display:inline; '> ".$row['date']." </time> at <time style='display:inline; '> ".$row['time']." </time></p>
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


 
 
		echo " <button type='button' class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#e".$row['id']."' ><font color='black' size='2' ><b>  likes $i</b></font></button>

  
  <div class='modal fade' id='e".$row['id']."' role='dialog'>
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
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; cursor:pointer; display:inline;' data-toggle='modal' data-target='#modelf$x' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
  <div class='modal fade' id='modelf$x' role='dialog'>
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