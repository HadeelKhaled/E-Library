<?php
    include 'include/connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>E Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css page-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    
    <!--================ start navbar Area  =================-->
    <div class="navigation">
    <div class="logo">E-Library</div>
    <a class="btn-sign" target="_blank" href="Login Form/index.php">Sing in</a>
    </div>
    <!--================ end navbar Area  =================-->

  <!--================ start Welcome page Area  =================-->
  <section class="showcase" id="home">
      <video src="images/videoplayback.webm" muted loop autoplay></video>
      <div class="overlay"></div>
      <div class="text">
        <h3>Reading means </h3> 
        <h4>allowing light to enter the mind.</h4>
        <p>Reading helps stimulate the mind, as it is an exercise for the mind that always helps it to be internally active and alert it continuously to maintain focus. In our electronic library, we offer you a collection of books on various topics, to help provide knowledge for everyone and make them easily accessible.
        </p>
        <h5>Please log in with us to download books</h5>
      </div>
  </section>
  <!--================ end Welcome page Area  =================-->

	<!--================ start footer Area  =================-->
  <footer id="contact" style="margin-top: 0;">      
      <div class="bottom">
          <span class="credit">
            All rights reserved  © 2022 | E-Library
          </span>
      </div>
    </footer>
	<!--================ End footer Area  =================-->
  </body>
</html>
