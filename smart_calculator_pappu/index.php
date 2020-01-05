<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="style.css">
	  <style type="text/css" src="style.css" ></style>
	<title></title>
	<style>
		body{
			height: 100%;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<div id="getdata"></div>
		
	<div class="row">
		<div class="header col-md-4">
			<h4>Smart Calculator - Pappu</h4>
			<p>Pappu try to never get failed !</p>
		</div>
		<div class="col-md-6 project">
			<h5>Developed by : </h5>
			<h4>Sahil Singroha & Abhishek Singh Dhull</h4>
		</div>
	</div>
		<hr>
		<div id="msg" class="msg"></div>
		<div id="chat" class=" sticky-top">
			
				<input type="text" name="srch" id="srch" placeholder="Enter your message" autocomplete="off">
				<button class="button"  onclick="insertData()" >
					<i class="fa fa-paper-plane" aria-hidden="true" ></i></button>
			
			
		</div>
	</div>	

            <script> 	
            		 var session_id =Math.floor(Math.random() * 1000000);	
                      function insertData() {
                        var srch=$("#srch").val();
                       
                		
                    // AJAX code to send data to php file.
                            $.ajax({

                                type: "POST",
                                url: "srch.php",
                                data: {srch:srch,session_id:session_id},
                                dataType: "html",
                                success: function(data) {
                                 $("#msg").html(data);
                                 $("#srch").val("");
                               
                               
                                },
                                error: function(err) {
                                alert(err);
                                }
                            });
             
                          }
                         </script>
					<script>
						var scrolled = false;
						function updateScroll(){
						    if(!scrolled){
						        var element = document.getElementById("msg");
						        element.scrollTop = element.scrollHeight;
						    }
						}

						$("#msg").on('scroll', function(){
						    scrolled=true;
						});
						setInterval(updateScroll,1000);
                  </script>
</body>
</html>