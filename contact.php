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
		
			 var url = 'index.php';  
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
                <li class="nav-item ">
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
				
				<li class="nav-item active">
                    <a class="nav-link" href="contact.php">CONTACT </a>
                </li>
                <li class="nav-item " >
                    <a  href="logout.php" class="nav-link" style="margin-left:250px;"><button type="button" class="btn btn-success btn-sm" style="margin-left:100px; margin-top:-15px; margin-bottom:-15px; width:50%; " data-toggle="modal" data-target="#mymodal1" >LOGOUT</button></a>
                </li>
				

            </ul>
				
        </div>
    </div>
</nav>

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


