		<?php 

require 'db.php';
session_start();
$id= $_GET['id'];


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
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
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
	
         function like() { 
		
			 var url = 'questions.php?id=<?php echo $id;?>';  
	        $('#div1-wrapper').load(url + ' #div1');
	         
	     }
    </script>

	<script>
	 function show(){
	setTimeout(function () { // on a click on the button with id 'one'
  $('#two').trigger('click');// trigger the click on second, and go on 
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
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
<br>

<br>

<div id="div1-wrapper">
 <div id="div1">
<?php

$username = $_SESSION['username'];


$sm = "SELECT * FROM questions WHERE id='$id'";



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
		      <p style='display:inline;'><b>  &nbsp; ".$rowp['username']."   ASKED</b><br></b></p><p style='margin-top:-20px; margin-left:90px;'> on <time style='display:inline; '> ".$row['qdate']." </time> at <time style='display:inline; '> ".$row['qtime']." </time></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>
<br>";
       
       echo "<h4 class='card-title' style='margin-left:10px; white-space: pre-line;'><b>Q." .$row['quote']."?</b></h4>";
	   
	   
	   
        
   echo     "<p class='card-text' style='margin-left:10px;'>Please Answer The Question</p>";
      
	  
	   echo     " 
  
  
  <button type='button' class='btn btn-success btn-lg' data-toggle='modal' data-target='#".$row['id']."' ><i class='fa fa-pencil' aria-hidden='true'>   ANSWER</i></button>

  
  <div class='modal fade' id='".$row['id']."' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>";
		
	
		
		
         echo "<h4 class='modal-title'><b>".$row['quote']."?</b></h4>";
		 
		 
		  echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>
                    <form id='contact_form' action='http://localhost/MDB%20Free/copy.php' method='POST'>
                        
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


<?php

$username = $_SESSION['username'];




$sm = "SELECT * FROM answer WHERE qid='$id'";





   $result = mysqli_query($mysqli,$sm);


    
while($row =mysqli_fetch_array($result)){

echo "<div class='box'>";   
 
            
echo "<div class='card'>";

        
  echo  "<div class='card-block'>";
  
  
       
	   
	       $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username= '".$row['username']."' ";
		 
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
			 
		    echo  "<section class='section team-section'  style='height:25px; width:1000px; '>

   
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
   
     	   echo "<button type='submit'  id='submitForm'  onclick='show();' name='submit' data-send='false' style='background-color:white; opacity:1;   margin-left:10px;' ><td style='text-align:center; width: 100%;'><i  class='fa fa-thumbs-up' aria-hidden='true' style='font-size: 1.5em; opacity:1;  color:#3CB371	;'></i></td> </button>";

	}
}

else
{
	     	   echo "<button type='submit'  id='submitForm'  onclick='show();' name='submit' data-send='false' style='background-color:white; opacity:1;  margin-left:10px;' ><td style='text-align:center; width: 100%;'><i class='fa fa-thumbs-o-up' aria-hidden='true' style='font-size: 1.5em; opacity:1; color:green;  '></i></td> </button>";

}


	 echo "<button type='button'  id='two'  onclick='like();' style='width:100px; display:none; ' >";
	 
     	  echo "<button type='button' style='background-color:white; opacity:1; margin-left:10px;' id='btn'>        <i class='fa fa-comment-o' aria-hidden='true' style='font-size: 1.5em; color:green;'></i></button>";


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
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; display:inline;' data-toggle='modal' data-target='#a".$row['id']."' ><font color='black' size='2' ><b> upvotes $i  </b></font></button>

  
  <div class='modal fade' id='a".$row['id']."' role='dialog'>
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
		      <p style='display:inline;'><b>  &nbsp; ".$rowp['username']." </b></p>
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
		
		echo " <button type='button'   class='btn btn-success btn-sm' style='margin-left:8px;   background-color:white; display:inline;' data-toggle='modal' data-target='#model$x' ><font color='black' size='2' ><b> comments $k  </b></font></button>

  
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
		      <p style='display:inline;'><b>  &nbsp; ".$rowp['username']." </b></p>
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

      <form id='contact_form' action='http://localhost/MDB%20Free/saveanscomments.php' method='POST' style=' margin-top:-60px;' target='votar' >
                        
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
          <button type='submit' class='btn btn-success'   id='submitForm' onclick='show();' name='submit' style='display:inline; margin-top:-35px; margin-right:-50px;'  >COMMENT</button>
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
		      <p style='display:inline;'><b>  &nbsp; ".$rowp['username']." </b></p>
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

