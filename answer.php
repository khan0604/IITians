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


<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['ASK'])) { 

        require 'save.php';
        
    }
}
?>



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
                <li class="nav-item active">
                    <a class="nav-link" href="answer.php">ANSWER<span class="sr-only">(current)</span></a>
                </li>
                
               <li class="nav-item">
                    <a class="nav-link" href="profile.php">PROFILE</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link"  href="post.php">POST</a>
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
  
        <button class="btn btn-success btn-lg" type="submit" name="ASK" style=" display:inline; margin-bottom:80px;">ASK QUESTION</button>
  
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
  
  
  <button type='button' class='btn btn-success btn-lg' data-toggle='modal' data-target='#".$row['id']."' ><i class='fa fa-pencil' aria-hidden='true'>   ANSWER</i></button>

  
  <div class='modal fade' id='".$row['id']."' role='dialog'>
    <div class='modal-dialog modal-lg'>
    
      <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>";
		
	
		
		
         echo "<h4 class='modal-title'><b><a href='questions.php?id=".$row["id"]."' style='color:black;'>Q. ".$row['quote']."?</a></b></h4>";

		 
		  echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>
          
        </div>
                        <div class='modal-body'>
                    <form id='contact_form' action='copy.php' method='POST'>
                        
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
