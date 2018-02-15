<?php 

require 'db.php';
session_start();
$receiver= $_GET['username'];

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
		 <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	
	 <!-- necessary scripts for the dialog -->
        
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


<script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
	
         function like() { 
		
			 var url = 'text.php?username=<?php echo rawurlencode ($receiver); ?>';  
	        $('#div1-wrapper').load(url + ' #div1');
	         
	     }
    </script>
	
	<script>
	 function change(){
	setTimeout(function () { // on a click on the button with id 'one'
  $('#ten').trigger('click');// trigger the click on second, and go on 
}, 1e3);
	 }
</script>
<script type="text/javascript">
   $('.toTop ').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
   });
   $('.toBottom').click(function(){
      $('html,body').animate({scrollTop: $(document).height()}, 600);
      return false;
   });
</script>

	</head>

		       <a name="toTop"></a>

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
				<li class="nav-item ">
                    <a class="nav-link" href="people.php">PEOPLE <span class="sr-only">(current)</span></a>
                </li>
				
				<li class="nav-item active">
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
	 

	 <a href="#toBottom" class="toBottom"><button class="btn btn-success btn-sm" style='margin-bottom:-70px; margin-left:40px;'>Scroll to Bottom &darr;</button></a>
	  
<div id="div1-wrapper">
 <div id="div1">
	  
	 <div class="box" style="width:60%; margin:auto; margin-bottom:50px;">     
     <div class="card">     
   <div class="card-block">
<?php   

   
      $dbp = mysqli_connect("localhost", "root","", "ask");
	 $sqlp = "SELECT * FROM images WHERE username= '$receiver' ";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
	    echo  "<section class='section team-section'  style='height:25px; width:1000px; '>

   
    <!--First row-->
    <div class='row text-center' >
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r'  >
 
            <div class='avatar' style='width:500px; margin-left:-120px;'>
		     
                <img src='images/".$rowp['image']."' class='rounded-circle' style='height:50px; width:50px;     border-radius: 25px; display:inline;  margin-left:-50px;' >           
		      <p style='display:inline;'><b><a href='users.php?username=".$rowp["username"]."' style='color:black;'>  &nbsp;   ".$rowp['username']." </a></b><br></b></p>
				</div>
           
        </div>
        <!--/Second column-->

        <!--/Fourth column-->

		
    </div>
    <!--/First row-->

	
</section>
<br>";
       
	   
  	
		$username = $_SESSION['username'];

$sml = "SELECT * FROM chat";



$resultl = $mysqli->query($sml);


if ($resultl->num_rows > 0) {
    
while($rowl = $resultl->fetch_assoc()) {
	
	if (($rowl['receiver']==$username) AND ($rowl['sender']==$receiver))
	{
         
		 $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='$receiver'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
		    echo  "<section class='section team-section'  style=' width:800px; min-height:100px; overflow:hidden; height:auto;'>

   
    <!--First row-->
    <div class='row text-center' style='height:10px;'>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='height:auto;' >
 
            <div class='avatar'  style='height:auto;'>
					<img src='images/".$rowp['image']."' class='rounded-circle' style='height:30px; width:30px; border-radius: 25px;  ' >           
           <div class='card' style='margin-left:50px;  margin-top:-30px; width:200px; border-radius:20px;'>
						<p style='margin:4px 4px 4px 4px; word-break: break-all;  '> ".$rowl['message']." </p>
                         </div> 							
          
				  		
				</div>
				<p style='margin-top:20px; margin-left:-100px;'><time style='display:inline; '> ".$rowl['time']." </time></p>
        </div>
        <!--/Second column-->
        
        <!--/Fourth column-->

    </div>
    <!--/First row-->
      
	
</section> ";
	   
		
}		 
		 				
	
	if (($rowl['receiver']==$receiver) AND ($rowl['sender']==$username))

	{
  
                $dbp = mysqli_connect("localhost", "root","", "ask");
		 $sqlp = "SELECT * FROM images WHERE username='$username'";
		 $resultp =mysqli_query ($dbp, $sqlp);
		 $rowp = mysqli_fetch_array($resultp);
			 
			 
			 
		    echo  "<section class='section team-section'  style=' width:800px; min-height:100px; overflow:hidden; height:auto;'>

   
    <!--First row-->
    <div class='row text-center' style='height:10px;'>
	

        <!--Second column-->
        <div class='col-lg-3 col-md-6 mb-r' style='height:auto;' >
 
            <div class='avatar'  style='height:auto;'>
					<img src='images/".$rowp['image']."' class='rounded-circle' style='height:30px; width:30px; border-radius: 25px;   margin-left:710px;' >           
           <div class='card' style='margin-left:490px;  margin-top:-30px; width:200px; border-radius:20px;'>
						<p style='margin:4px 4px 4px 4px; word-break: break-all;  '> ".$rowl['message']." </p>
                         </div> 							

				  		
				</div>
			<p style='margin-top:20px; margin-left:680px;'><time style='display:inline; '> ".$rowl['time']." </time></p>

        </div>
        <!--/Second column-->

        <!--/Fourth column-->

    </div>
    <!--/First row-->
      
	
</section> ";
	   

}
}
}		
		   
		 echo    " 
               <iframe name='votar' style='display:none;'></iframe>
		 
		 <form id='contact_form' action='savechat.php' method='POST' target='votar'>
                        
              <textarea type='text'  placeholder='text something...' name='message' style=' width:630px; display:inline;  border-bottom:1.5px solid green;  ' class='md-textarea'  ></textarea>
                     
                  <!-- Example autosize.js CDN Reference -->
               <script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
             <script>
    // Automatically size all of your <textarea> elements as you type
    autosize(document.querySelectorAll('textarea'));
             </script>			 
	
	 	<input type='hidden'  name='receiver' value='$receiver' />

	
	<input type='hidden'  name='cdate' value='"  . date("Y-m-d") . "' />";
						
						
date_default_timezone_set("Asia/Kolkata");


				echo	   " <input  type='hidden' name='ctime' value='"  . date("h:ia") . "' />";
				
  
      echo  "<button class='btn btn-success btn-lg' id='submitForm' type='submit' onclick='change();' style=' display:inline; margin-bottom:80px; cursor:pointer;'>TEXT</button>";
  
         	 echo "<button type='button'  id='ten'  onclick='like();' style='width:100px; display:none; ' >
 
				
			</form>
                   
</div>
</div>
";
?>

</div>
</div>
</div>
</div>
</div>
  
<a name="toBottom"></a>
 <a href="#toTop" class="toTop"><button class="btn btn-success btn-sm" style='margin-top:-150px; margin-left:40px;'>Scroll to TOP &uarr;</button></a>


       
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
      